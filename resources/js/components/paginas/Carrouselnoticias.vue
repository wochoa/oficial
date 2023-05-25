<template>
  <swiper ref="mySwiper" :options="swiperOptions" class="swiper-multiple ">


    <swiper-slide v-for="(prim,index) in data_noticias" :key="index">
      
      <div class="card shadow-sm " style="height: 380px;">
          <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+prim.img1" class="card-img-top" alt="...">
          <div class="card-body">
              <router-link :to="'/noticias/'+prim.idnoticias">
               <h5 class="card-title">{{ decodeHtml(prim.titulo)}}</h5>
              </router-link>
             
              <!-- <p class=" card-text lh-1 textxs" style="font-size: 12px">{{prim.cortado}}</p> -->
              
              
          </div>
          <div class="card-footer d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <!-- <a href="#" class="btn btn-primary btn-sm">Leer más</a> -->
                  <router-link :to="'/noticias/'+prim.idnoticias" class="btn btn-primary btn-sm">Leer más</router-link>
                  <!-- <a href="#" class="">Another link</a> -->
              </div>
              <small class="text-muted">{{ prim.fecha}}</small>
          </div>
      </div>
    
    </swiper-slide>


    <div class="swiper-pagination pt-10" slot="pagination"></div>
    
  </swiper>
  
  
</template>

<script>
import { Swiper, SwiperSlide, directive } from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'

export default {
  props:['ruta'],
  name: 'carrousel',
  data() {
      return {
        data_noticias:{},
        swiperOptions: {
                          pagination: {
                                        el: '.swiper-pagination',
                                        clickable: true,
                                      },
                          slidesPerView: 3,
                          spaceBetween: 30,
                          navigation:true,
                          autoplay:{
                                  delay: 3500,
                                  disableOnInteraction: false,
                                },
                          breakpoints: {
          1024: {
            slidesPerView: 3,
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
            slidesPerView: 1,
            spaceBetween: 10,
          },
        },
                          
                          
                          // Some Swiper option/callback...
                        },
         
      }
    },
  components: {
    Swiper,
    SwiperSlide
  },
  directives: {
    swiper: directive
  },
  
    computed: {
      // swiper() {
      //   return this.$refs.mySwiper.$swiper
      // }
    },
    mounted() {
      // console.log('Current Swiper instance object', this.swiper);
      // this.swiper.slideTo(0, 1000, false);
      this.noticiasini();
    },
    methods: {
        noticiasini()
        {
            var url='/api/noticiasini';
            axios.get(url)
                .then(response=>{
                    this.data_noticias=response.data.listanoticias;
                    
                });
        },
         decodeHtml(html) {
    // console.log(html);
      var txt = document.createElement("textarea");
      txt.innerHTML = html;
      return txt.value;
    },
   }
}
</script>

<style>
.swiper-pagination{
  bottom: 0px!important;
}
</style>