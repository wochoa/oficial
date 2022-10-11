<template>
  <swiper ref="mySwiper" :options="swiperOptions" class="swiper-multiple ">


    <swiper-slide v-for="(prim,index) in enlace_refe" :key="index">
      
      <div class="swiper-text pt-md-1 pt-sm-50">
          <a :href="prim.link_refe" target="">
            <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+prim.img_refe" fluid />
          </a>          
      </div>
    
    </swiper-slide>


    <!-- Add Arrows -->
    <div
      slot="button-next"
      class="swiper-button-next"
    />
    <div
      slot="button-prev"
      class="swiper-button-prev"
    />
  </swiper>
</template>

<script>
import { Swiper, SwiperSlide, directive } from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'
import axios from 'axios';

export default {
  props:['ruta'],
  name: 'carrousel',
  data() {
      return {
        swiperOptions: {

          slidesPerView: 6,
          centeredSlides: true,
          spaceBetween: 30,
          autoplay:{
                  delay: 3500,
                  disableOnInteraction: false,
                },
          navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                        },
        breakpoints: {
          1024: {
            slidesPerView: 6,
            spaceBetween: 40,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          320: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
        },
          
          
          // Some Swiper option/callback...
        },
         enlace_refe:{},
      }
    },
  components: {
    Swiper,
    SwiperSlide
  },
  directives: {
    swiper: directive
  },
  

    mounted() {
      // console.log('Current Swiper instance object', this.swiper);
      // this.swiper.slideTo(0, 1000, false);
      this.fun_referenciales();
    },
    methods: {
        
        fun_referenciales(){
            var url='/api/enlace_refe';
            axios.get(url)
            .then(response=>{
                this.enlace_refe=response.data.referenciales
            });
        }
   }
}
</script>

<style>
.swiper-pagination{
  bottom: 0px!important;
}
</style>