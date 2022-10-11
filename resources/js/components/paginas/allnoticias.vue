<template>
 <div>
  <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  <small>Listado de noticias</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6"><!-- {{ info.nom_pagina }} -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link  :to="'/'">Inicio</router-link></li>
              <li class="breadcrumb-item">Noticias</li>
              <!-- <li class="breadcrumb-item active">Top Navigation</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <div class="container pt-3">
    
      <div class="row">
	      	
	      	
	      			
	      			<div class="col-md-3"  v-for="list in datanoticias.data" :key="list.idnoticias">
			          <div class="card mb-4 shadow-sm" style="padding-bottom: 10px">
			           			           
			           
			            
                  <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cad(list.img1)" class="card-img-top" alt="...">
			            <div class="card-body">
			              <router-link :to="'/noticias/'+list.idnoticias" title="" class="text-decoration-none"> <p class="nav-link ">{{ list.titulo }}</p></router-link>
			              
			            </div>
                  <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                            <router-link :to="'/noticias/'+list.idnoticias" class="btn btn-primary btn-sm">Leer más</router-link>
                            <!-- <a href="#" class="">Another link</a> -->
                        </div>
                        <small class="text-muted">{{ list.fechapubli}}</small>
                    </div>

			          </div>
			        </div>

	      		
	      		
            <pagination :data="datanoticias" :limit="1" @pagination-change-page="getResults"></pagination>


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
      datanoticias: {},     
      }
   },
   created () {
    //  this.cargardatos();
   },
   mounted () { 
     this.getResults();    
   },
   methods: {
    
        getResults(page) {
                          if (typeof page === "undefined") {
                            page = 1;
                          }
                          axios
                            .get('/api/allnoticias?page=' + page)
                            .then(response => {
                              this.datanoticias = response.data.listanoticias;
                              console.log(this.datanoticias);
                            });
                         },
      recorta_cad(texto)
      {
        var substr=texto.substr(7);
        return substr;
      }
   }
 }
</script>

<style lang="css" scoped>

</style>
