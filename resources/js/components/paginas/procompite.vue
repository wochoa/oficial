<template>
<div>
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> PROCOMPITE |<small>Módulo de Inscripción</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- {{ info.nom_pagina }} -->
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <router-link :to="'/'">Inicio</router-link>
                        </li>
                        <li class="breadcrumb-item">Fondo de Apoyo Gerencial</li>
                        <!-- <li class="breadcrumb-item active">Top Navigation</li> -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container pt-3 ">

        <div class="row">

            <div class="col-sm-8">
                <div class="card">
                    <!-- Loading (remove the following to stop the loading)-->
                    <!-- <div class="overlay dark">
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div> -->

                    <div class="card-header">
                        FOIRMULARIO DE INSCRIPCION
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-sm-2">
                                <select v-model="tipodoc" class="form-control form-control-sm">
                                    <!-- <option value=''>selec....RUC</option> -->
                                    <!-- <option value=1>DNI</option> -->
                                    <option value=2>RUC</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <!-- <input type="number" class="form-control form-control-sm" placeholder="Ingrese el número" autofocus v-model="numdoc" @keyup.enter="validarnumero"> -->
                                <input type="number" class="form-control form-control-sm" placeholder="Ingrese el número" autofocus v-model="numdoc">
                            </div>
                            <!-- <div class="col-sm-2">
                                <button class="btn btn-primary btn-sm" v-loading.fullscreen.lock="fullscreenLoading" @click="validarnumero">Validar</button>
                            </div> -->
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm textmayuscula" placeholder="Razon social" v-model="nombresyape">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3">Seleccione la categoria:</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio1" value="CATEGORIA A" v-model="categoria" checked>
                                    <label class="form-check-label pr-5">CATEGORIA A</label>

                                    <input class="form-check-input " type="radio" name="radio1" value="CATEGORIA B" v-model="categoria">
                                    <label class="form-check-label pr-5">CATEGORIA B</label>

                                    <input class="form-check-input " type="radio" name="radio1" value="CATEGORIA C" v-model="categoria">
                                    <label class="form-check-label ">CATEGORIA C</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="">Provincia</label>
                                <select class="form-control form-control-sm" v-model="idprovincia" required @change="cargadistrito">
                                    <template v-for="pro in provi">
                                        <option :value="pro.idProv">{{pro.provincia}}</option>
                                    </template>

                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Distrito</label>
                                <select name="" id="" class="form-control form-control-sm" v-model="iddistrito" required>
                                    <template v-for="dis in distri">
                                        <option :value="dis.distrito">{{dis.distrito}}</option>
                                    </template>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Dirección</label>
                                <input type="text" placeholder="Ingrese su dirección" class="form-control form-control-sm textmayuscula" v-model="direccion">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="">Título de la propuesta productiva(Plan de negocios)</label>
                            <input type="text" name="" id="" class="form-control form-control-sm textmayuscula" placeholder="Ingrese el título de la propuesta" v-model="titulo_propuesta">
                        </div>

                        <div class="form-group row">
                            <label for="">Cadena productiva</label>
                            <select name="" id="" class="form-control form-control-sm" v-model="tectcadena">
                                <template v-for="cad in cadenas">
                                    <option :value="cad.cadena_productiva">{{cad.cadena_productiva}}</option>
                                </template>
                            </select>
                        </div>
                        <h4 class="text-danger">PERSONA DE CONTACTO</h4>
                        <div class="form-group row">
                            <label for="" class="col-sm-2">DNI</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control form-control-sm " placeholder="Ingresar número dni" v-model="dnicontacto">
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm textmayuscula" placeholder="Nombres y apellidos" v-model="nomcontacto">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="">Telefono fijo</label>
                                <input type="number" class="form-control form-control-sm" v-model="fijo">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Celular</label>
                                <input type="number" class="form-control form-control-sm" v-model="cel">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Correo electrónico</label>
                                <input type="email" class="form-control form-control-sm" pattern=".+@globex\.com" placeholder="Ingresar su correo" v-model="correo">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer clearfix">
                        <button class="btn btn-primary btn-sm" @click="registrarins" v-loading.fullscreen.lock="fullscreenLoading">Enviar inscripción</button>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        DESCARGAR ROTULADO DE INSCRIPCIÓN
                    </div>
                    <div class="card-body">
                        <div class="form-group row border-bottom pb-2">
                            <label for="" class="col-sm-3">RUC:</label>
                            <div class="col-sm-7"><input type="numbre" class="form-control form-control-sm mayusculas" placeholder="Ingrese dni/ruc" v-model="rucbuscar"></div>
                            <div class="col-2">
                                <button class="btn btn-sm btn-primary" @click="btnbuscarruc(rucbuscar)">Buscar</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <a v-if="idregistro" :href="ruta+'/api/rotulo/'+idregistro" class="btn btn-danger btn-sm" target="_blank">Descargar rotulado</a>
                        </div>
                        <div class="form-group row">
                            <iframe v-if="idregistro" :src="ruta+'/api/rotulo/'+idregistro" frameborder="0" style="display:block; height:60vh;"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</template>

<script>
import axios from 'axios';
import swal from 'sweetalert2';
// import { Loading } from 'element-ui';
// Vue.use(Loading);
window.Swal = swal;
import LaravelVuePagination from 'laravel-vue-pagination';
// Vue.component('pagination', pagination);

export default {
    props: ['ruta'],
    components: {
        'Pagination': LaravelVuePagination
    },
    data() {
        return {
            provi: [],
            distri: [],
            cadenas: [],
            idprovincia: '',
            iddistrito: '',
            tipodoc: '2', //dni=1,ruc=2
            numdoc: '', //numero de doc(dni o ruc)
            datosdni: {},
            datosruc: {},
            nombresyape: '',
            errornrodoc_ini: 0,
            fullscreenLoading: false,
            categoria: '',
            direccion: '',
            tectcadena: '',
            titulo_propuesta: '',
            dnicontacto: '',
            nomcontacto: '',
            fijo: '',
            cel: '',
            correo: '',
            rucbuscar: '',
            idregistro: '',
            datosbusqueda: {}
        }
    },
    created() {
        //  this.cargardatos();
        this.provincia();
    },
    mounted() {

    },
    methods: {

        provincia() {
            var url = '/api/provincia';
            axios.get(url).then(response => {
                this.provi = response.data.prov;
            });
        },
        cargadistrito() {
            var url = '/api/distrito/' + this.idprovincia;
            axios.get(url).then(response => {
                this.distri = response.data.dist;
            });

            this.cargacadena(this.idprovincia);
        },
        cargacadena(idpro) {
            var url = '/api/cadenaspro/' + idpro;
            axios.get(url).then(response => {
                this.cadenas = response.data.cad;
            });
        },
        validarnumero() {

            if (this.tipodoc == '2') {
                if (this.numdoc.length == 11) {
                    this.errornrodoc_ini = 1
                } else {
                    Swal.fire('Incorrecto', 'Digitos ingresados no corresponden a RUC', 'error');
                    this.errornrodoc_ini = 0
                }
            }

        },

        dni(numdni) {
            var url = 'http://app.regionhuanuco.gob.pe/soap_pruebas/reniec.php?cdni=' + numdni
            //var url='http://goredigital.regionhuanuco.gob.pe/reniec/'+numdni
            axios.get(url)
                .then(response => {
                    console.log(response)
                    this.datosdni = response.data
                    this.nombresyape = this.datosdni.prenombres + ' ' + this.datosdni.apPrimer + ' ' + this.datosdni.apSegundo
                    // this.fullscreenLoading = false;
                })
        },
        ruc(numruc) {
            var url = 'http://app.regionhuanuco.gob.pe/soap_pruebas/sunat.php?ruc=' + numruc
            axios.get(url)
                .then(response => {
                    console.log(response)
                    this.datosruc = response.data.data
                    this.nombresyape = this.datosruc.ddp_nombre
                    // this.fullscreenLoading = false;
                })
        },
        registrarins() {
            this.validarnumero();
            this.btnbuscarruc(this.numdoc)

            var url = '/api/addprocompite'

            var datos = {
                'tipodoc': this.tipodoc,
                'numdoc': this.numdoc,
                'nombresyape': this.nombresyape,
                'categoria': this.categoria,
                'idprovincia': this.idprovincia,
                'distrito': this.iddistrito,
                'direccion': this.direccion,
                'titulo': this.titulo_propuesta,
                'cadena': this.tectcadena,
                'dnicto': this.dnicontacto,
                'nomcto': this.nomcontacto,
                'fijo': this.fijo,
                'cel': this.cel,
                'correo': this.correo,

            }

            if (this.errornrodoc_ini != 0) {
                //this.fullscreenLoading = true;
                if (this.idregistro == '') {
                    axios.post(url, datos)
                        .then(response => {
                            //console.log(response.data)
                            //this.fullscreenLoading = false;
                            Swal.fire('Correcto', 'Se registró con éxito su inscripción', 'success');
                            this.idregistro = response.data

                            this.rucbuscar = this.numdoc;
                            this.limpiarcampos()
                        })
                        .catch(error => {
                            //console.log(error.data)
                            Swal.fire('Error', 'Se registró  su inscripción por falta de datos requeridos', 'error');
                            //this.fullscreenLoading = false;
                        })
                }

            }

        },
        btnbuscarruc(nroruc) {

            var url1 = '/api/regprocompite/' + nroruc
            axios.get(url1)
                .then(response => {
                    this.datosbusqueda = response.data.datosproc[0]
                    //alert(this.datosbusqueda.activo)
                    this.idregistro = this.datosbusqueda.idinscrip
                    Swal.fire('Correcto', 'El RUC ingresado ya se encuentra registrado', 'success');
                })
                .catch(error => {
                    this.idregistro = ''
                        })

        },

        limpiarcampos() {
            this.numdoc = '';
            this.nombresyape = '';
            this.categoria = '';
            this.idprovincia = '';
            this.iddistrito = '';
            this.direccion = '';
            this.titulo_propuesta = '';
            this.tectcadena = '';
            this.dnicontacto = '';
            this.nomcontacto = '';
            this.fijo = '';
            this.cel = '';
            this.correo = '';

        },

    }
}
</script>

<style lang="css" scoped>
.textmayuscula {
    text-transform: uppercase;
}
</style>
