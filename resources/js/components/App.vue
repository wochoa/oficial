<template>
    <div>
        <Header :ruta="ruta"></Header>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <transition name="slide-fade" mode="out-in">
                    <router-view :ruta="ruta"> </router-view>
                </transition>
            </div>
            <!-- /.content-wrapper -->
        <Footer :ruta="ruta"></Footer>



    </div>
</template>

<script>
import Header from './plantilla/Header';
import Footer from './plantilla/Footer'

import 'jquery/dist/jquery.min.js';
    export default {
        props:['ruta'],
        components:{Header,Footer},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped>
.layout-navbar-fixed .wrapper .content-wrapper{
    margin-top: auto !important;
}

/*
  Enter and leave animations can use different
  durations and timing functions.
*/
.slide-fade-enter-active {
 transition: all .6s ease /* -out; */
}

.slide-fade-leave-active {
  transition: all .6s cubic-bezier(.17,.67,.83,.67)
}

.slide-fade-enter,
.slide-fade-leave-to {
  transform: translatey(350px);
  opacity: 0;

  
}


</style>
