<template>
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <small>Gerencia Regional de Recursos Naturales</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6"><!-- {{ info.nom_pagina }} -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link :to="'/'">Inicio</router-link></li>
              <li class="breadcrumb-item">Gerencia Regional de Recursos Naturales</li>
              <!-- <li class="breadcrumb-item active">Top Navigation</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container pt-3">

      <!-- Banner -->
      <div class="banner-section mb-4">
        <div class="banner-icon">🌿</div>
        <div>
          <h2 class="fw-bold">GERENCIA DE RECURSOS NATURALES</h2>
          <p class="mb-0">Gestión y conservación de los recursos naturales para un Huánuco sostenible.</p>
        </div>
      </div>

      <div class="row">
        <!-- Sidebar acordeón -->
        <div class="col-lg-4 mb-3">
          <div class="sidebar">
            <h5>Sub Gerencias</h5>

            <!-- Iteramos sobre los menús devueltos por nuestra API -->
            <div v-for="menu in menus" :key="menu.idmenus" class="mb-2">
              <button class="btn btn-success w-100 btn-subarea mt-2 text-start" type="button" data-bs-toggle="collapse"
                :data-bs-target="'#menu-' + menu.idmenus">
                {{ menu.nom_menu }}
              </button>
              <div class="collapse show ms-3" :id="'menu-' + menu.idmenus">
                <ul class="list-group list-group-flush">
                  <!-- Mostramos la página a partir de la relación del submenú (submenu.pagina) -->
                  <li class="list-group-item" v-for="submenu in menu.submenus" :key="submenu.idsubmenu">
                    <a href="#" class="text-decoration-none text-success" v-if="submenu.pagina" @click.prevent="seleccionarPagina(submenu.pagina)">
                      {{ submenu.pagina.nom_pagina }}
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            
          </div>
        </div>

        <!-- Contenido principal -->
        <div class="col-lg-8">
          <div class="document-section" v-if="paginaSeleccionada">
            <h5>{{ paginaSeleccionada.nom_pagina }}</h5>
            <div v-html="paginaSeleccionada.cont_pagina" class="mb-4"></div>
          </div>

          <div class="note mt-2 p-2">
            <strong>Nota:</strong> Los documentos se proporcionan en formato PDF para su visualización en línea y
            descarga.
          </div>
        </div>

        
      </div>

    </div>
  </div>


</template>

<script>
import axios from 'axios';

export default {
  name: '',
  data() {
    return {
      info: {},
      menus: [],
      paginaSeleccionada: null,
    }
  },
  created() {
     this.cargardatos();
  },
  mounted() {
  },
  methods: {
    cargardatos() {
       var url='/api/gesambiental';
           axios.get(url)
                .then(response=>{
                  this.info=response.data.pagina[0];
                  this.menus=response.data.menus;
                  
                  if (this.menus.length > 0 && this.menus[0].submenus.length > 0 && this.menus[0].submenus[0].pagina) {
                    this.paginaSeleccionada = this.menus[0].submenus[0].pagina;
                  } else {
                    this.paginaSeleccionada = this.info; // Fallback a la página principal si no hay submenús
                  }
                });
    },
    seleccionarPagina(pagina) {
      this.paginaSeleccionada = pagina;
    }
  }
}
</script>

<style lang="css" scoped>
.banner-section {
  background: url('https://www.regionhuanuco.gob.pe/assets/img/bg-banner.jpg') no-repeat center center;
  background-size: cover;
  color: #166d39;
  padding: 30px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  gap: 20px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.banner-icon {
  width: 80px;
  height: 80px;
  background-color: #6caf3f;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 36px;
}

.sidebar {
  height: auto !important;
  max-height: none !important;
  overflow-y: visible !important;
}

.document-section {
  background-color: #fff;
  border-radius: 8px;
  padding: 20px;
  margin-bottom: 15px;
}

.document-section h5 {
  color: #1f8f4c;
}

.document-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.btn-verde-huanuco {
  background-color: #1f8f4c;
  color: #fff;
}

.btn-verde-huanuco:hover {
  background-color: #166d39;
  color: #fff;
}

.note {
  background-color: #fff3cd;
  padding: 10px;
  border-radius: 6px;
}
</style>
