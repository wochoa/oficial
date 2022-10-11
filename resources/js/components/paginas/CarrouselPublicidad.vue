<template>
  <swiper
    class="swiper-paginations container"
    :options="swiperOptions"
  >
    <!-- <swiper-slide
      v-for="(data,index) in swiperData"
      :key="index"
    > -->
    <template v-if="existeimg==true">
      
        <swiper-slide v-for="itm in datacorousel" :key="itm.idslider">
            <img
            :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cad(itm.img_slider)"
            class="img-fluid"
          />
          
        </swiper-slide>
      
    

     <!-- <swiper-slide>
      <img
        :src="ruta+'/img/slider2.jpg'"
        fluid
      />
    </swiper-slide> -->

     <!-- <swiper-slide>
      <img
        :src="ruta+'/img/slider.jpg'"
        fluid
      />
    </swiper-slide> -->
    </template>
     

    <div
      slot="pagination"
      class="swiper-pagination"
    />
  </swiper>
</template>

<script>


import { Swiper, SwiperSlide, directive } from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'

export default {
  props:['ruta'],
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      datacorousel: {},
      existeimg:true,
      swiperOptions: {
                        pagination: {
                          el: '.swiper-pagination',
                          clickable: true,
                                    },
                        autoplay:{
                                  delay: 4500,
                                  disableOnInteraction: false,
                                },
                        slidesPerView: 'auto',
                        centeredSlides: true,
                        // effect:'cube',
                      },
    }
  },
  mounted() {
    this.imageslider();
  },
   methods: {
    // imageslide
    imageslider(){
      var url='/api/slider';
       axios.get(url)
            .then(response=>{
              this.datacorousel=response.data.slider;
              this.existeimg=true;
              console.log(response.data);
            }).catch(function(error) {
                // handle error
                this.existeimg=false;
              });
    },
     recorta_cad(texto)
      {
        var substr=texto.substr(7);
        return substr;
      },
   }
}
</script>