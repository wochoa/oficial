<template>
 <div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top" :style="'background:'+$attrs.thema.tmcolor_tema+'!important;'"><!-- #2745a0  #054a91-->
            <div class="container">
                <!-- <a class="navbar-brand" href="/">
                    Laravel
                </a> -->
                <router-link to="/" class="navbar-brand" >
                  <!-- <img :src="ruta+'./../img/logo.png'" alt="" height="40"> -->
                  <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cad($attrs.thema.tmlogo_tema)" height="60">
               </router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <template  v-for="(item,index) of listamenus">
                        
                          <li class="nav-item dropdown" v-if="item.link_menu==='#'">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  v-html="item.nom_menu"></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                              <template v-for="submen in listasubmenus">
                                 <template v-if="submen.idmenus===item.idmenus">
                                    <router-link v-if="submen.idpagina" class="dropdown-item" :to="'/pagina/'+submen.idpagina"  v-html="submen.nom_submenu"></router-link>
                                    <a v-else class="dropdown-item" :href="submen.link_submenu "  v-html="submen.nom_submenu"></a>
                                 </template>                                
                              </template>

                            </div>
                         </li>
                         <li v-else class="nav-item">
                          <router-link :to="item.link_menu" class="nav-link text-uppercase">{{ item.nom_menu }}</router-link>
                         </li>
                         <!-- {{ listamenus }} -->
                        </template>
                         


                    </ul>
                </div>
            </div>
    </nav>
    
    <div class="nav-scroller bg-white shadow-sm fixed-top " :style="'background-color:'+ $attrs.thema.tmcolor_tema+'78 !important;margin-top: 85px; height:2.75rem;'">

      <div class="container nav nav-underline " >
         
            <div class="col-md-3 bg-dark" align="left">
            <a href="http://digital.regionhuanuco.gob.pe/registro/mesa-partes-virtual/3" class="nav-link active" target="_blank"><i class="fa fa-envelope"></i> Nuestra Mesa de Partes Virtual</a>
             </div>
            <div class="col-md-3 bg-secondary" align="left">
            <!-- <a href="/pagina/103" class="nav-link active" target="_blank"><i class="fa fa-envelope"></i> Mesa de Partes Virtual Direcciones y Unidades</a> -->
            <router-link :to="'/pagina/103'" class="nav-link active"><i class="fa fa-envelope"></i> Mesa de Partes Virtual Direcciones y Unidades</router-link>
            </div>
            <div class="col-md-2"><!-- <a class="nav-link active">Central teléfonica <i class="fa fa-phone-volume"></i> +51 (062) 51-2124</a>--></div>
            <div class="col-md-2"><a class="nav-link active" href="https://mail.regionhuanuco.gob.pe/"><i class="fa fa-envelope"></i> Correo Institucional</a></div>
            <div class="col-md-2" align="right"><a class="nav-link active" href="http://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=10146#.WcqzcWjWyUk"><img src="http://www.regionhuanuco.gob.pe/img/portal.png" alt="" height="30"></a></div> 
         </div>
      
    </div>
 </div>
</template>

<script>
import axios from "axios";

 export default {
     props:['ruta'],
     data() {
       return {
         listamenus:{},
         listasubmenus:{},
       }
     },
     created() {
       this.cargamenus();
     },
     methods: {
       cargamenus(){
         var url='/api/menus';
         axios.get(url)
              .then(response=>{
                this.listamenus=response.data.menus;
                this.listasubmenus=response.data.submenus;
              });
       },
       recorta_cad(texto) {
            var substr = (texto || '').substr(7);
            return substr;
        }
     },
   
 }
</script>

<style lang="css" scoped>

html,body {
  overflow-x: hidden; /* Prevent scroll on narrow devices */
} 

body {
  padding-top: 65px;
}

@media (max-width: 991.98px) {
  .offcanvas-collapse {
    position: fixed;
    top: 56px; /* Height of navbar */
    bottom: 0;
    left: 100%;
    width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    visibility: hidden;
    background-color: #343a40;
    transition: transform .3s ease-in-out, visibility .3s ease-in-out;
  }
  .offcanvas-collapse.open {
    visibility: visible;
    transform: translateX(-100%);
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: flex;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  color: rgba(255, 255, 255, .75);
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-underline .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
  color: #6c757d;
}

.nav-underline .nav-link:hover {
  /* background: #ffffff; */
  opacity: 50%;
  color: #000000;
  font-weight: bold;
}

.nav-underline .active {
  font-weight: 500;
  color: #ffffff;
  text-align: center;
  
}

.bg-1 {
  background: #E73434;
}

.bg-2 {
  background: #6FAC93;
}

.bg-purple {
  background-color: #6f42c1;
}
.dropdown-menu{
  border-radius: 0rem !important;
}

@media all and (min-width: 992px) {
	.navbar .dropdown-menu{ right:0; left: auto;  }
	.navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
	.navbar .nav-item:hover .nav-link{ color: #fff;  }
	.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar .dropdown-menu.fade-up{ top:180%;  }
	.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
}

</style>
