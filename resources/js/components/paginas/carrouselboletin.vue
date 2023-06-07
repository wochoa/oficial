<template>
<el-carousel :interval="4000" type="card" height="360px">
    <el-carousel-item v-for="sec3 in boletin" :key="sec3.idseccion" v-if="sec3.seccion_pag==3">
        <!-- <h3 class="medium">{{ item }}</h3> -->
        <!-- <a :href="sec3.enlace" class="text-warning" target="_blank">
            <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cadena(sec3.archivo_imagen)" width="300">
        </a> -->
        <div :class="'row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-'+sec3.color">
            <div class="col-auto d-none d-lg-block">

                <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cadena(sec3.archivo_imagen)" width="300" alt="">
            </div>
            <div class="col p-4 d-flex flex-column position-static">

                <div v-html="sec3.titulo">

                </div>
                <a :href="sec3.enlace" class="titulonot_2 text-warning" target="_blank">
                    {{ sec3.texto_enlace }} <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></a>
            </div>

        </div>

    </el-carousel-item>
</el-carousel>
</template>

<script>
export default {
    name: 'Boletinname',
    props: ['boletin'],

    data() {
        return {

        };
    },

    mounted() {

    },

    methods: {
        recorta_cadena(texto) {
            var substr = texto.substr(7);
            return substr;
        },

    },
};
</script>

<style lang="scss" scoped>
.el-carousel__item h3 {
    color: #475669;
    font-size: 14px;
    opacity: 0.75;
    line-height: 200px;
    margin: 0;
}

.el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
    opacity: 0.8;
}

.el-carousel__item:nth-child(2n+1) {
    background-color: #d3dce6;
}
</style>
