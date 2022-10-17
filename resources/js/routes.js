import Vue from 'vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import Router from 'vue-router';


Vue.use(Router);
// Import Bootstrap and BootstrapVue CSS files (order is important)
// import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)


import Inicio  from './components/paginas/index.vue'
import Noticias from './components/paginas/Noticias.vue';
import Allnoticias from './components/paginas/allnoticias.vue';
import Convocatorias from './components/paginas/Convocatorias.vue';
import Visitas from './components/paginas/visitas.vue';
import Autoridades from './components/paginas/autoridades.vue';
import Normatividad from './components/paginas/Normatividad.vue';
import Pagina from './components/paginas/Pagina.vue';
import Logo from './components/paginas/Logo.vue';
import Directorio from './components/paginas/Directorio.vue';
import Organigrama from './components/paginas/Organigrama.vue';
import Fag from './components/paginas/fag.vue';
import Procompite from './components/paginas/procompite.vue';

export default new Router({
    mode: 'history',
    routes:[
        {//   id:0,
            path:'/',
            name:'index',
            component:Inicio 
        },
        {
            path:'/allnoticias',
            component:Allnoticias
        },
        {
            path:'/noticias/:id',
            name:'Noticiasid',
            component:Noticias
        },
        {
            path:'/lconvocatorias',
            component:Convocatorias
        },
        {
            path:'/lautoridades',
            component:Autoridades
        },
        {
            path:'/ldirectorio',
            component:Directorio
        },
        {
            path:'/logo',
            component:Logo
        },
        {
            path:'/organigrama',
            component:Organigrama
        },
        {
            path:'/procompite',
            component:Procompite
        },
        {
            path:'/lnormatividad/:id?/:anio?/:bus?',
            name:'normatividad',
            component:Normatividad
        },
        {
            path:'/pagina/:id',
            name:'Paginaid',
            component:Pagina
        },
        {
            path:'/visitas',
            component:Visitas
        },
        {
            path:'/lfag',
            component:Fag
        },

    ],
    linkActiveClass:'active'
})