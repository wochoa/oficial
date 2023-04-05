<template>
<div>

    <main>
        <!-- style="background:#00528e" -->

        <Slidershow :ruta="ruta"></Slidershow>

    </main>

    <!-- TRAMITES Y Servicios -->
    <div class="pt-3 mb-2" style="background: url('img/fondo/pattern-4.png');">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 flex-start">
                    <!-- SECCION 1 --->
                    <h4 class="text-center">Trámites y Servicios</h4>
                    <hr />

                    <div class="row mt-4 text-center ">
                        <div class="col-xs-4 col-sm-2 col-6 mb-1" v-for="(list1,indexs1) in listasecciones">
                            <a v-if="list1.seccion_pag==1" :class="'btn btn-block btn-outline-'+list1.color+' boton shadow anima_btn'" :href="list1.enlace" target="_blank">
                                <i :class="list1.icono+' fa-2x'"></i>
                                <p class="text-uppercase pt-3 lh-1" v-html="list1.texto_enlace"></p>
                                <!-- <p class="lh-1 fw-light textxs">....................................................</p> -->
                            </a>
                        </div>

                    </div>

                    <!-- SECCION 2 -->
                    <div class="row">

                        <div class="col-sm-4" v-for="(sec2,indexs2) in listasecciones" v-if="sec2.seccion_pag==2" v-html="sec2.titulo">

                        </div>

                    </div>

                    <!-- SECION NOTICIAS -->
                    <div class="row p-1" style="background: url('img/fondo/rayaazul.svg'), #cfe2ff;border-radius: 4px ">
                        <h4 class="text-center">Noticias </h4>
                        <hr />
                        <Slidernoticias :ruta="ruta" class="mt-4" />
                        <div align="right">
                            <router-link :to="'/allnoticias'" :class="'btn btn-primary btn-sm'">
                                Ver más noticias
                                <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                            </router-link>
                        </div>
                    </div>

                    <!-- SECCION CUATRO -->
                    <div class="row p-1 mt-2 bg-primary" v-for="(sec4,indexs2) in listasecciones" v-if="sec4.seccion_pag==4" style="border-radius: 4px">
                        <div class="col-md-9">
                            <h4 class="lead">{{sec4.titulo}}</h4>
                            <h5>{{ sec4.texto_enlace }}</h5>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-block btn-outline-warning" :href="sec4.enlace " target="_blank">Descargar</a>
                        </div>
                    </div>

                    <!-- SECION 3-->
                    <div class="row p-1" style="background: url('img/fondo/bg1.jpg'), #cfe2ff;border-radius: 4px ">
                        <h4 class="text-center">Boletines </h4>
                       
                        <div class="col-md-6" v-for="sec3 in listasecciones" v-if="sec3.seccion_pag==3">
                            <div :class="'row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-'+sec3.color">
                                <div class="col-auto d-none d-lg-block">

                                    <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cadena(sec3.archivo_imagen)" width="200" alt="">
                                </div>
                                <div class="col p-4 d-flex flex-column position-static"  >
                                    <!-- {{ sec3.titulo }} -->
                                    <!-- {{ decodeHtml(sec3.titulo )}} -->
                                    <div v-html="sec3.titulo">

                                    </div>
                                    <a :href="sec3.enlace" class="titulonot_2 text-warning" target="_blank">
                                        {{ sec3.texto_enlace }} <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-2">
                    <!-- SECCION 5  --->
                    <template v-for="(sec5,index5) in listasecciones" v-if="sec5.seccion_pag==5">
                        <a v-if="sec5.archivo_imagen!=null" :href="sec5.enlace" :class="'dropdown-item bg-'+sec5.color+' mb-1'" target="_blank">
                            <div class="media">
                                <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cadena(sec5.archivo_imagen)" alt="User Avatar" class="img-fluid">
                            </div>
                        </a>

                        <a v-else :href="sec5.enlace" :class="'btn btn-'+sec5.color+' btn-block mb-1 titulonot_2 bton_enlace'"><i class="fas fa-address-card"></i> {{ sec5.texto_enlace }}</a>
                    </template>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE TRAMITES Y SERVICIOS -->

    <!-- VIDEOS -->
    <section id="anuncios">
        <div class="pt-3 pb-3" style="background:#ffff;">
            <div class="container">
                <h4 class="text-center"> Videos </h4>
                <hr />
                <div id="carrusel_video" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <button type="button" data-bs-target="#carrusel_video" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                        </button>

                        <button type="button" data-bs-target="#carrusel_video" data-bs-slide-to="1" aria-label="Slide 2">
                        </button>

                        <button type="button" data-bs-target="#carrusel_video" data-bs-slide-to="2" aria-label="Slide 3">
                        </button>

                        <button type="button" data-bs-target="#carrusel_video" data-bs-slide-to="3" aria-label="Slide 4">
                        </button>
                        <button type="button" data-bs-target="#carrusel_video" data-bs-slide-to="4" aria-label="Slide 5">
                        </button>

                    </ol>
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PVaFAHd7xMo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-primary mt-3">#SEMANASANTA</h3>
                                    <p class="text-justify">🔵 EN ESTA #SEMANASANTA Y #FERIADOLARGO VISITA TINGO MARÍA I GOREHCO 👏🏻🎊</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7AQnjKrdpyY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-primary mt-3">#Desarrollo</h3>
                                    <p class="text-justify">AGENCIA REGIONAL DE DESARROLLO POTENCIARÁ ECONOMÍA REGIONAL 💪</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/moBoLDBxscs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-primary mt-3">#Descentralización</h3>
                                    <p class="text-justify">PRONTO AGENCIA REGIONAL DE DESARROLLO EN HUÁNUCO 💯</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/C5dwGzYGhCw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-primary mt-3">#Territorio</h3>
                                    <p class="text-justify">GOBERNADOR RESPALDA LÍMITE SANTA VIRGINIA, PACHITEA</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RZ4Izygd_7k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-primary mt-3"> #Transparencia </h3>
                                    <p class="text-justify">XII CONSEJO DE MINISTROS DESCENTRALIZADO HUÁNUCO, RESULTADOS</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div align="right" class="mt-2 p-2">
                        <button class="carrolser_control btn btn-info btn-sm btn-circle" type="button" data-bs-target="#carrusel_video" data-bs-slide="prev" style="right: 50px !important;margin-botom:-5px">
                            <span class="carousel-control-prev-icon " aria-hidden="true" style="width: 1rem !important; height: 1rem !important;"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carrolser_control btn btn-info btn-sm ml-2 btn-circle" type="button" data-bs-target="#carrusel_video" data-bs-slide="next" style="right: 0px !important;">
                            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 1rem !important; height: 1rem !important;"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                        <a href="https://www.youtube.com/channel/UCFCS1cmD-9iM6nqetz-qXoA" class="btn btn-primary btn-sm">Ver más videos <i class="fas fa-arrow-circle-right" aria-hidden="true"></i> </a>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- FIN VIDEOS -->

    <!-- UBICACIÓN-->
    <div class="pt-3 pb-3" style="background:#ffff;">
        <div class="container-fluid">
            <h4 class="text-center">Contáctanos </h4>

            <hr />

            <div id="mapa-contactanos" class="p-3 pt-4 d-none d-md-block">
                <table>
                    <tbody>
                        <tr>

                            <td>
                                <h6> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg> DIRECCIÓN </h6>
                                <div>
                                    Calle Calicanto 145
                                    <br>
                                    Amarilis-Huanuco
                                </div>
                                <br>
                            </td>
                        </tr>
                        <!-- <tr>
                       <td>
                          <h6> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                          </svg> TELÉFONOS </h6>
                             <div>
                                062-512124
                             </div>
                           <br>
                       </td>
                    </tr> -->
                        <tr>
                            <td>
                                <!-- <h6> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                          </svg> CORREOS</h6> -->
                                <div>
                                    Responsable del Portal de Transparencia
                                    <h6>Mg. Bertha Ada Gonzales Soto</h6>
                                </div>
                                <div>
                                    Responsable de acceso a la información
                                    <br>
                                    <h6>ABOG. JUAN PEDRO OLIVEROS DENEGRI</h6>
                                </div>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="map-responsive">
                <iframe :src="'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1389.4704820193235!2d-76.23563653018458!3d-9.932625095755043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7c2fcae5899ab%3A0xdb74b5c9e67b6366!2sGobierno%20Regional%20Hu%C3%A1nuco!5e0!3m2!1ses-419!2spe!4v1649430178415!5m2!1ses-419!2spe'" :width="1300" :height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- FIN UBICACIÓN-->

    <!-- ENLACES EXTERNOS-->
    <div class="pt-3 pb-3" style="background:#cfe2ff;">
        <div class="container">
            <h4 class="text-center">Enlaces Externos </h4>
            <hr />
            <SliderEnlaces :ruta="ruta" />
        </div>
    </div>
    <!-- FIN ENLACES EXTERNOS-->

    <!-- POPUP -->
    <div class="modal fade" id="infopopup" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">

                <div class="modal-body" style="padding: 2px !important;">
                    <a href="#" class="bg-warning" data-dismiss="modal" style="float: right;position: relative;padding-left: 8px;border-radius: 10px;width: 23px;margin-top: -20px;margin-right: -5px;font-weight: bold;">x</a>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active" data-interval="40000">
                                <img src="#" class="img-fluid" alt="...">

                                <div align="center"><a href="#" class="btn btn-sm btn-warning" style="padding:1px !important;"><i class="fas fa-arrow-circle-right"></i> TITULO</a> </div>

                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon bg-info" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls " role="button" data-slide="next">
                                <span class="carousel-control-next-icon bg-info" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>

    <!-- sss -->
    <b-modal ref="my-modal" buttonSize='sm' headerClass='p-0 border-bottom-0 ' hideHeaderClose footerClass='p-2 border-top-0' madalContentClass="p-0 bg-secondary" bodyClass="p-0" hide-footer centered>
        <template #modal-header="{ close }">
            <div class="d-flex justify-content-end">
                <a @click="close()" class="bg-warning cerrar" height="550"><i class="fa-regular fa-circle-xmark fa-2x" style="margin-top:2px"></i></a>
            </div>
        </template>

        <div>
            <Anunciopopup :ruta="ruta"></Anunciopopup>
        </div>

    </b-modal>
    <!-- FIN DE POPUP -->
</div>
</template>

<script>
import Slidershow from './CarrouselPublicidad'
import Slidernoticias from './Carrouselnoticias'
import SliderEnlaces from './CarrouselEnlaces'
import Anunciopopup from './anunciospopup'
// import axios from 'axios'

export default {
    props: ['ruta'],
    components: {
        Slidershow,
        Slidernoticias,
        SliderEnlaces,
        Anunciopopup
    },

    data() {
        return {
            listasecciones: {},
            hideHeaderClose: true,
            centered: true
        }
    },
    mounted() {
        this.func_secciones();
        this.showModal();

    },
    methods: {
        func_secciones() {
            var url = '/api/secciones';
            axios.get(url)
                .then(response => {
                    this.listasecciones = response.data.secciones;
                });
        },
        recorta_cadena(texto) {
            var substr = texto.substr(7);
            return substr;
        },
        showModal() {
            this.$refs['my-modal'].show()
            //   $('.modal-header').css('padding', '1px !important;');
        },
        decodeHtml(html) {
            console.log(html);
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        }

        // hideModal() {
        //   this.$refs['my-modal'].hide()
        // },
        // toggleModal() {
        //   // We pass the ID of the button that we want to return focus to
        //   // when the modal has hidden
        //   this.$refs['my-modal'].toggle('#toggle-btn')
        // }
    },

}
</script>

<style lang="css" scoped>
.sr-only {
    color: #2745a0;
}

/* .carousel {
    position: relative;
} */

/* #anuncios .carousel-indicators {
    bottom: -75px;
} */

/* .carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;

} */

.masnoticias {
    align-content: center;
}

.msn {
    /* margin-left: 50px; */
    background: rgba(0, 68, 162, 0.5);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 50px;
    ;
    /* width: 400px;
        height: 200px; */
    text-align: center;
    height: 185px;
    padding: 30px 5px;
    border: dashed 1px #e9ecec;

}

.msn1 {
    font-size: 20px;
    /* font-weight: bold; */
    /* color: #000000; */
    /* margin-top: 40px; */
}

.msn2 {
    font-size: 12px;
    /* font-weight: bold; */
}

.msn3 {
    /* margin-left: 50px; */
    background: rgba(0, 68, 162, 1);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    ;
    /* width: 400px;
        height: 200px; */
    text-align: center;
    height: 185px;
    padding: 15px 5px;

}

.bg-primary {
    color: #FFF;
    background-color: rgba(0, 68, 162, 1) !important;
}

hr {
    height: 3px;
    width: 10%;
    background-color: #2745a0;
    margin: 0 auto;
    margin-bottom: 3px;
}

h4 {
    font-weight: normal;
    font-weight: bold;
}

h6 {
    color: aliceblue;
    font-weight: bold;
}

#mapa-contactanos {
    position: absolute;
    top: 1;
    left: 16.5%;
    z-index: 5;
    background-color: rgba(39, 69, 160, 0.80);
    width: 350px;
    height: 472px;
    line-height: 1.2;
}

#mapa-contactanos h2 {
    color: #FFF;
}

#mapa-contactanos table td {
    vertical-align: middle;
}

#mapa-contactanos table td i {
    color: #FFF;
    font-size: 1.3em;
    margin-right: 7px;
}

#mapa-contactanos table td label {
    color: #FFF;
    font-size: .8em;
}

#mapa-contactanos table td div {
    color: #FFF;
    font-size: .9em;
}

@media (max-width: 1024px) and (min-width: 900px) {
    #mapa-contactanos {
        left: 8%;
    }
}

@media (max-width: 899px) and (min-width: 768px) {
    #mapa-contactanos {
        left: 4%;
    }
}

@media (max-width: 767px) {
    #mapa-contactanos {
        left: 0;
    }
}

#seccion_contactanos table td {
    vertical-align: middle;
}

.map-responsive {
    overflow: hidden;
    padding-bottom: 470px;
    position: relative;
    height: 0;
}

.map-responsive iframe {
    left: 0;
    top: 0;
    /* height:50%; */
    width: 100%;
    position: absolute;
}

.textxs {
    font-size: .85em !important;
}

.boton {
    height: 110px;
    /* animation: all 0.3s ease-out;
   border-radius: 0px !important; */
}

.bton_enlace {
    border-radius: 0px !important;
}

.nav-item:hover {
    background-color: rgb(230, 230, 243);
}

/* .row{
   padding: 20px;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: center;
    width: 97%;
    margin: 0% auto;
} */
.anima_btn {
    background-color: #FFF;
    border: dashed 1px;
}

.anima_btn:hover {
    background-color: #0044a273;
}

.cerrar {
    /* float: right; */
    position: relative !important;
    padding-left: 1px;
    border-radius: 15px;
    width: 30px;
    margin-top: -30px;
    margin-left: 1px;
    font-weight: bold;
}

.modal-header .modalheader {
    padding: 0px !important;
}
</style>
