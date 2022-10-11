<template>
 <div>
  <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  <small>{{ info.nom_pagina }}</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6"><!-- {{ info.nom_pagina }} -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link  :to="'/'">Inicio</router-link></li>
              <li class="breadcrumb-item">{{ info.nom_pagina }}</li>
              <!-- <li class="breadcrumb-item active">Top Navigation</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <div class="container pt-3">
    
    <div v-html="info.cont_pagina" class="mb-4">
      
    </div>
  </div>
    
 </div>
</template>

<script>
import axios from 'axios';

 export default {
   name: '',
   data () {
     return {
       idpag:this.$route.params.id,
       info:{},


     }
   },
   created () {
     this.cargardatos();
   },
   mounted () {     
   },
   methods: {
     cargardatos(){
       var url='/api/pagina/'+this.idpag;
           axios.get(url)
                .then(response=>{
                  this.info=response.data.pagina[0];
                });
     }
   }
 }
</script>

<style lang="css" scoped>

</style>
