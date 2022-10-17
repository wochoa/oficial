<template>
 <div>
  <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> PROCOMPITE |<small>Módulo de Inscripción</small></h1>
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
                  FOIRMULARIO DE INSCRIPCION
                </div>
          	    <div class="card-body">
                      
	      			
                    <div class="form-group row">
                      <div class="col-sm-2">
                        <select v-model="tipodoc" class="form-control form-control-sm">
                          <option value=1>DNI</option>
                          <option value=2>RUC</option>
                        </select>
                      </div>
                      <div class="col-sm-3">
                        <input type="number" class="form-control form-control-sm" placeholder="Ingrese el número" autofocus>
                      </div>
                      <div class="col-sm-1">
                        <button class="btn btn-primary btn-sm">Validar </button>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" placeholder="Razon social" disabled>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-3">Seleccione la categoria:</label>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" >
                          <label class="form-check-label pr-5">CATEGORIA A</label>

                          <input class="form-check-input " type="radio" name="radio1">
                          <label class="form-check-label pr-5">CATEGORIA B</label>

                          <input class="form-check-input " type="radio" name="radio1">
                          <label class="form-check-label ">CATEGORIA C</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-4">
                        <label for="">Provincia</label>
                        <select  class="form-control form-control-sm" v-model="idprovincia" required @change="cargadistrito">
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
                        <input type="text" placeholder="Ingrese su dirección" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="">Título de la propuesta productiva(Plan de negocios)</label>
                      <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Ingrese el título de la propuesta">
                    </div>

                    <div class="form-group row">
                      <label for="">Cadena productiva</label>
                      <select name="" id="" class="form-control form-control-sm">
                        <template v-for="cad in cadenas">
                            <option :value="cad.cadena_productiva">{{cad.cadena_productiva}}</option>
                          </template>
                        </select>
                    </div>
                    <h4 class="text-danger">PERSONA DE CONTACTO</h4>
                    <div class="form-group row">
                      <label for="" class="col-sm-2">DNI</label>
                      <div class="col-sm-3">
                        <input type="number" class="form-control form-control-sm" placeholder="Ingresar número dni">
                      </div>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" placeholder="Nombres y apellidos">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-4">
                        <label for="">Telefono fijo</label>
                        <input type="number" class="form-control form-control-sm">
                      </div>
                      <div class="col-sm-4">
                        <label for="">Celular</label>
                        <input type="number" class="form-control form-control-sm">
                      </div>
                      <div class="col-sm-4">
                        <label for="">Correo electrónico</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Ingresar su correo">
                      </div>
                    </div>
                  </div>

                  <div class="card-footer clearfix">
                    <button class="btn btn-primary btn-sm">Enviar inscripción</button>
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
      provi:[],
      distri:[],
      cadenas:[],
      idprovincia:'',
      iddistrito:'',
      tipodoc:1,//dni=1,ruc=2
      }
   },
   created () {
    //  this.cargardatos();
    this.provincia();
   },
   mounted () { 
     
   },
   methods: {
    
        
    provincia(){
      var url='/api/provincia';
      axios.get(url).then(response=>{
                  this.provi=response.data.prov;
                });
              },
    cargadistrito()
    {
      var url='/api/distrito/'+this.idprovincia;
      axios.get(url).then(response=>{
                  this.distri=response.data.dist;
                });

                this.cargacadena(this.idprovincia);
    },
    cargacadena(idpro)
    {
      var url='/api/cadenaspro/'+idpro;
      axios.get(url).then(response=>{
                  this.cadenas=response.data.cad;
                });
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
