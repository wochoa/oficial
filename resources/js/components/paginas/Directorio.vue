<template>
 <div>
  <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  DIRECTORIO <small> | REGIONAL</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6"><!-- {{ info.nom_pagina }} -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link  :to="'/'">Inicio</router-link></li>
              <li class="breadcrumb-item">Directorio regional</li>
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
                        <input type="search" class="form-control form-control-lg" placeholder="Buscar por oficina" v-model="buscar" @keyup="getResults">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-primary" @click="getResults">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="btn btn-info" >
                            <i class="fa-solid fa-rotate"></i>
                            </button>
                        </div>
                    </div>
	      			
                    <div class="form-group mt-3">
                    <table class="table table-sm table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>CODIGO</th>                    
                          <th>OFICINA</th>
                          <th>CARGO </th>
                          <th>FUNCIONARIO</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="list in datadirectorio.data" :key="list.iddependencia">
                          <td>{{ list.iddependencia }}</td>
                          <td>{{ list.depe_nombre }}</td>
                          <td>{{ list.depe_cargo }}</td>
                          <td>{{ list.depe_representante }}</td>
                          
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    </div>

                    <div class="card-footer clearfix">
                    <pagination :data="datadirectorio" :limit="1" @pagination-change-page="getResults"></pagination>
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
   data () {
     return {
      datadirectorio: {},
      buscar:'',
      }
   },
   created () {
    //  this.cargardatos();
   },
   mounted () { 
    //this.buscador();
    // if(!this.buscar)
    //  {this.getResults();}
    this.getResults();    
   },
   methods: {
    
        getResults(page) {
                          if (typeof page === "undefined") {
                            var pg=1
                          }
                          else{
                            var pg=page
                          }
                          
                          axios
                            .get('/api/directorio/'+this.buscar+'?page=' + pg)
                            .then(response => {
                              this.datadirectorio = response.data.directorio;
                              //this.buscar=''
                              console.log(this.datadirectorio);
                            });
                         },
      recorta_cad(texto)
      {
        var substr=texto.substr(7);
        return substr;
      },

   }
 }
</script>

<style lang="css" scoped>

</style>
