<template>
 <div>
  <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  <small>Registro de visitas</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6"><!-- {{ info.nom_pagina }} -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link  :to="'/'">Inicio</router-link></li>
              <li class="breadcrumb-item">Visitas</li>
              <!-- <li class="breadcrumb-item active">Top Navigation</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <div class="container pt-3 "  >
    
      <div class="row">
	      	
          <div class="card">
          
          	      	<div class="card-body">
                      <div class="input-group mt-4">
                        <input type="search" class="form-control form-control-lg" placeholder="Buscar por nombres y apellidos" v-model="buscar" v-on:keyup.enter="actualizarLista"  @keyup="actualizarLista">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-primary" @click="actualizarLista">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="btn btn-info" @click="getResults">
                            <i class="fa-solid fa-rotate"></i>
                            </button>
                        </div>
                    </div>
	      			
                    <div class="form-group mt-3">
                    <table class="table table-sm table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>N</th>                    
                          <th>DNI</th>
                          <th>NOMBRE VISITANTE</th>
                          <th>HORA INGRESO</th>
                          <th>ENTIDAD</th>
                          <th>MOTIVO</th>
                          <th>HORA SALIDA</th>
                          <th>OFICINA</th>
                          <th>FUNCIONARIO</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="list in datavisitas.data" :key="list.idregvisita">
                          <td>{{ list.idregvisita }}</td>
                          <td>{{ list.dni }}</td>
                          <td>{{ list.nombre }}</td>
                          <td>{{ list.fechaingreso }}</td>
                          <td>{{ list.iprocedencia }}</td>
                          <td>{{ list.motivo }}</td>
                          <td>{{ list.fechasalida }}</td>
                          <td>{{ list.nom_oficina }}</td>
                          <td>{{ list.nom_funcionario }}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    </div>

                    <div class="card-footer clearfix">
                    <pagination :data="datavisitas" :limit="1" @pagination-change-page="getResults"></pagination>
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
   data () {
     return {
      datavisitas: {},
      buscar:'',
      }
   },
   created () {
    //  this.cargardatos();
   },
   mounted () { 
    //this.buscador();
    if(!this.buscar)
     {this.getResults();}    
   },
   methods: {
    
        getResults(page) {
                          if (typeof page === "undefined") {
                            page = 1;
                          }
                          
                          axios
                            .get('/api/visitas?page=' + page)
                            .then(response => {
                              this.datavisitas = response.data.visitas;
                              this.buscar=''
                              console.log(this.datavisitas);
                            });
                         },
      recorta_cad(texto)
      {
        var substr=texto.substr(7);
        return substr;
      },
   actualizarLista(){
    //  this.datavisitas.push(this.buscar);
    //  this.buscar = '';
    var url='/api/buscarvisita/'+this.buscar;
    axios.get(url)
        .then(respuesta=>{
          this.datavisitas=respuesta.data.visitas;
          //this.getResults();
        });
        
   }
   }
 }
</script>

<style lang="css" scoped>

</style>
