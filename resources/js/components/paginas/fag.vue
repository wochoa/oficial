<template>
 <div>
  <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> FAG |<small>Fondo de Apoyo Gerencial</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6"><!-- {{ info.nom_pagina }} -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link  :to="'/'">Inicio</router-link></li>
              <li class="breadcrumb-item">Fondo de Apoyo Gerencial</li>
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
                <div class="card-header">
                  Listado Fondo de Apoyo Gerencia
                </div>
          	    <div class="card-body">
                      
	      			
                    <div class="form-group mt-3">
                    <table class="table table-sm table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>N°</th>                    
                          <th>MES</th>
                          <th>AÑO</th>
                          <th>ARCHIVO</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="list in datafag.data" :key="list.idfag">
                          <td>{{ list.idfag }}</td>
                          <td>{{ nomnes(list.mes) }}</td>
                          <td>{{ list.ano }}</td>
                          <td><a :href="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cad(list.img)" title="" target="_blank"> Ver archivo</a></td>

                        </tr>
                      </tbody>
                    </table>
                    </div>
                    </div>

                    <div class="card-footer clearfix">
                    <pagination :data="datafag" :limit="1" @pagination-change-page="getResults"></pagination>
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
      datafag: {},
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
                            .get('/api/fag?page=' + page)
                            .then(response => {
                              this.datafag = response.data.listafag;
                              this.buscar=''
                              console.log(this.datafag);
                            });
                         },
      recorta_cad(texto)
      {
        var substr=texto.substr(7);
        return substr;
      },

      nomnes(mes)
      {
        switch(mes)
        {
          case '01': var nom_mes='ENERO'; break;
          case '02': var nom_mes='FEBRERO'; break;
          case '03': var nom_mes='MARZO'; break;
          case '04': var nom_mes='ABRIL'; break;
          case '05': var nom_mes='MAYO'; break;
          case '06': var nom_mes='JUNIO'; break;
          case '07': var nom_mes='JULIO'; break;
          case '08': var nom_mes='AGOSTO'; break;
          case '09': var nom_mes='SETIEMBRE'; break;
          case '10': var nom_mes='OCTUBRE'; break;
          case '11': var nom_mes='NOVIEMBRE'; break;
          case '12': var nom_mes='DOCIEMBRE'; break;
        }
        return nom_mes;
      }

   }
 }
</script>

<style lang="css" scoped>

</style>
