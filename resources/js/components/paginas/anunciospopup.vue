<template>
  <swiper
    class="swiper-paginations "
    :options="swiperOptions"
  >
    <!-- <swiper-slide
      v-for="(data,index) in swiperData"
      :key="index"
    > -->
     <swiper-slide  v-for="(popup,index) in listapopup" :key="index">
      <img
        :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cad(popup.nompopup)"
        height="600"
        width="498"
      />
      
      <div class=" modal-footer text-center " v-if="popup.enlace_popup!='#'">
      <!-- <button class="btn btn-warning btn-xs">dsdsdsd</button> -->
      <a :href="popup.enlace_popup" class="text-decoration-none btn btn-warning btn-sm lh-1"><i class="fas fa-arrow-circle-right"></i> <small>{{popup.titulopopup}}</small></a>
      </div>
    </swiper-slide>

     <!-- <swiper-slide>
      <img
        :src="ruta+'/img/slider2.jpg'"
        fluid
      />
    </swiper-slide>

     <swiper-slide>
      <img
        :src="ruta+'/img/slider.jpg'"
        fluid
      />
    </swiper-slide> -->

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
        listapopup:{},
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
      this.caragpopup();
     

   },
  methods: {
    caragpopup()
    {
        var url='/api/listapopup';
        axios.get(url)
             .then((result) => {
                this.listapopup=result.data.popup
             });
    },
    recorta_cad(texto)
      {
        var substr=texto.substr(7);
        return substr;
      }
  },
}
</script>