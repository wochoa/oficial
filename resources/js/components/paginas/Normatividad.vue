<template>
<div>
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Normatividad <small>Regional</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- {{ info.nom_pagina }} -->
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <router-link :to="'/'">Inicio</router-link>
                        </li>
                        <li class="breadcrumb-item">Normatividad regional</li>
                        <!-- <li class="breadcrumb-item active">Top Navigation</li> -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container pt-3 ">

        <div class="row">

            <div class="card">

                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="">Tipo documento</label>
                            <select v-model="codtipo" @change.prevent="getResults()" class="form-control">
                                <option v-for="td in datatipodoc" :key="td.id" :value="td.id">{{td.tip_description}}</option>
                            </select>

                        </div>
                        <div class="col-sm-2">
                            <label for="">Año</label>
                            <select class="form-control" v-model="anio" @change="getResults($event)">
                                <option value="">Todo</option>
                                <option v-for="fec in datfecha" :value="fec">{{fec}}</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group mt-4">
                                <input type="search" class="form-control form-control-lg text-uppercase" placeholder="Ingrese su búsqueda (Ejm): 2018-2022, comité de selección" v-model="buscar" @keyup.enter="getResults(paginaslista)" autofocus>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-primary" @click.prevent="getResults(paginaslista)">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button class="btn btn-info" @click.prevent="limpiar">
                                        <i class="fa-solid fa-rotate"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- <div class="form-group row mt-2">
                                <div class="form-check">
                                    <label for="" class="pr-5">Búsqueda por:</label>
                                    <input class="form-check-input" type="checkbox" v-model="numerosiglas" v-on:change="getResults" true-value="1" false-value="0">
                                    <label class="form-check-label pr-5">Número y siglas documento</label>
                                    <input class="form-check-input" type="checkbox" v-model="descripciondoc" v-on:change="getResults" true-value="1" false-value="0">
                                    <label class="form-check-label">Descripción documento</label>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <table class="table table-borderless table-sm " style="">
                            <thead>
                                <tr>
                                    <th>Documentos</th>
                                    <th>Archivos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="list in datanormatividad.data" :key="list.id" class="border ">
                                    <td>
                                        <table width="100%" style="border:1px; padding:0px; margin:0px; ">
                                            <tr>
                                                <td width="12%"><strong>Doc:</strong></td>
                                                <!-- <td>{{ list.regulations_tipo }}({{list.reg_title}})</td> -->
                                                <td>{{list.reg_title}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Fecha:</strong></td>
                                                <td>{{convertDateFormat(list.reg_date)}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Descripción:</strong></td>
                                                <td>{{list.reg_description}}</td>
                                            </tr>

                                        </table>
                                    </td>
                                    <td class="border-left">
                                        <div v-html="archivos(list.files,list.id)" class="text-center">

                                        </div>

                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer clearfix">
                    <pagination :data="datanormatividad" :limit="1" @pagination-change-page="getResults"></pagination>
                </div>

            </div>

        </div>

    </div>

</div>
</template>

<script>
import axios from 'axios';
import LaravelVuePagination from 'laravel-vue-pagination';
// Vue.component('pagination', pagination);

export default {
    components: {
        'Pagination': LaravelVuePagination
    },
    name: '',
    data() {
        return {
            datanormatividad: {},
            datatipodoc: {},
            codtipo: 45,
            anio: 2015,
            buscar: '',
            paginaslista: 1,
            datfecha: [],
            numerosiglas: 1,
            descripciondoc: 0,

        }
    },
    created() {
        var today = new Date();
        var year = today.getFullYear();
        var incr = 0;

        for (var i = year; i >= 1986; i--) {

            this.datfecha[incr] = i
            incr++;
        }
    },
    mounted() {
        //this.buscador();
        // if(!this.buscar)
        //  {this.getResults();} 
        this.fechasistema();
        this.getResults();
        this.listatipodocumento();
    },
    methods: {
        listatipodocumento() {
            var url = '/api/tipodoc'

            axios
                .get(url)
                .then(response => {
                    //this.datanormatividad = response.data.normatividad;
                    this.datatipodoc = response.data;
                    //console.log(response.data)

                });
        },

        getResults(page = 1) {

            this.paginaslista = page
            var textbu = this.buscar.toUpperCase();

            var url = '/api/regulations';
            const params = {
                page,
                regulations_tipo: this.codtipo,
                reg_year: this.anio,
                magic: textbu,
                with: 'files',
                paginate: 20,
                'orders[]': 'reg_num.desc'
            }

            axios
                .get(url, {
                    params
                })
                .then(response => {
                    //this.datanormatividad = response.data.normatividad;
                    this.datanormatividad = response.data;
                    console.log(response.data)

                });
        },
        fechasistema() {
            const hoy = new Date();
            // const year = hoy.getFullYear();
            // const mes = hoy.getMonth();
            // const dia = hoy.getDate();

            // var mesdo = mes < 10 ? "0" + mes : mes;
            // var diado = dia < 10 ? "0" + dia : dia;
            this.anio = hoy.getFullYear();

            //this.fechacobranza = hoy.toISOString().substring(0, 10); // year + '-' + mesdo + '-' + diado;

        },
        limpiar() {
            // this.buscar = '';

            // this.anio = 0;
            // this.getResults();
            location.reload()
        },
        recorta_cad(texto) {
            var substr = texto.substr(7);
            return substr;
        },
        archivos(objeto, idreg) {
            var archivos = objeto //JSON.parse(objeto);
            var cantidad = archivos.length;
            var enlace = '<span class="badge badge-dark right">' + cantidad + ' Archivos</span>';
            for (var i = 0; i < cantidad; i++) {
                enlace += '<a href="http://200.3.195.20:8080/regulations/file/' + archivos[i].file_idregulation + '/' + archivos[i].file_tomo + '/' + archivos[i].file_nro_tipo + '" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a><p class="text-center">' + archivos[i].file_size + ' MB</p>';

            }

            return enlace;
        },

        convertDateFormat(string) {
            var cad = '' + string + '';
            var info = cad.split('-');
            return info[2] + '-' + info[1] + '-' + info[0];

        }

    }
}
</script>

<style lang="css" scoped>

</style>
