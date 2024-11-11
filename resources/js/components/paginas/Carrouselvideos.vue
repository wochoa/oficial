<template>
<swiper ref="mySwiper" :options="swiperOptions" class="swiper-multiple ">

    <swiper-slide v-for="(prim,index) in data_video" :key="index">

        <div class="card shadow-sm bg-success" style="height: 360px;border: #cccccc00 1px">
            <!-- <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+prim.img1" class="card-img-top" alt="..."> -->
            <img :src="'https://img.youtube.com/vi/'+prim.idvideo+'/maxresdefault.jpg'" class="card-img-top" alt="...">
            <!-- <iframe class="rounded-2" width="628" height="315" :src="'https://www.youtube.com/embed/'+prim.idvideo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <div class="card-body bg-success border-1">
                <router-link :to="'/noticias/'+prim.idnoticias">
                    <h5 class="card-title text-warning">{{ decodeHtml(prim.titulo)}}</h5>
                </router-link>

                <!-- <p class=" card-text lh-1 textxs" style="font-size: 12px">{{prim.cortado}}</p> -->

            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a :href="prim.url" class="btn btn-warning btn-sm" target="_blank">Ver video</a>
                </div>
                <small class="text-light">{{ prim.fecha}}</small>
            </div>
        </div>

    </swiper-slide>

    <div class="swiper-pagination pt-10" slot="pagination"></div>

</swiper>
</template>

<script>
import {
    Swiper,
    SwiperSlide,
    directive
} from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'

export default {
    props: ['ruta'],
    name: 'carrouselVideos',
    data() {
        return {
            data_video: {},
            swiperOptions: {
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                slidesPerView: 3,
                spaceBetween: 30,
                navigation: true,
                autoplay: {
                    delay: 4000,
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
        noticiasini() {
            var url = '/api/videosini';
            axios.get(url)
                .then(response => {
                    this.data_video = response.data.listavideos;

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
.swiper-pagination {
    bottom: 0px !important;
}
</style>
