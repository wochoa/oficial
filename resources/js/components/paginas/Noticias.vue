<template>
 <div>
  <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  <small>Noticias</small></h1>
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
      <div class="col-8">
        <div class="card p-3">
        <h4 class="p-3">{{ detnot.titulo }}</h4>

          <swiper class="swiper-autoplay container" :options="swiperOptions">
              <swiper-slide><img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+detnot.img1" class="card-img-top" ></swiper-slide>
              <swiper-slide><img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+detnot.img2" class="card-img-top"></swiper-slide>
              <swiper-slide><img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+detnot.img3" class="card-img-top"></swiper-slide>

              

                 <div
                      slot="pagination"
                      class="swiper-pagination"
                    />
                    <div
                      slot="button-next"
                      class="swiper-button-next"
                    />
                    <div
                      slot="button-prev"
                      class="swiper-button-prev"
                    />
          </swiper>

          <!-- <p >{{decodeHtml(detnot.contenido)}}</p> -->
          <p v-html="detnot.contenido"></p>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
        <!-- <h4>Fanpage facebook</h4> -->

        

        <iframe :src="'https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/gobiernoregionalhuanuco/&tabs=timeline&width=415&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=431428387353926'" width="415" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

        </div>
      </div>
    </div>
  </div>
    
 </div>
</template>

<script>
import { Swiper, SwiperSlide, directive } from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'

import axios from 'axios';

 export default {
   name: '',
     components: {
    Swiper,
    SwiperSlide
  },
  
   data () {
     return {
       idnot:this.$route.params.id,
       detnot:{},
       swiperOptions: {
         slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      },



     }
   },
   created () {
     this.cargardatos();
   },
   mounted () {     
   },
   methods: {
     cargardatos(){
       var url='/api/noticias/'+this.idnot;
           axios.get(url)
                .then(response=>{
                  this.detnot=response.data.detallenot[0];
                });
     },
      decodeHtml(html) {
    console.log(html);
      var txt = document.createElement("textarea");
      txt.innerHTML = html;
      return txt.value;
    },
   }
 }
</script>

<style lang="css" scoped>

</style>
