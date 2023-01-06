<template>
<div>
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> <small>Autoridades</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- {{ info.nom_pagina }} -->
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <router-link :to="'/'">Inicio</router-link>
                        </li>
                        <li class="breadcrumb-item">Autoridades</li>
                        <!-- <li class="breadcrumb-item active">Top Navigation</li> -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container pt-3 ">

        <div class="row mb-2">

            <div class="col-md-6 ">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-dark">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">Mg. ANTONIO LEONIDAS PULGAR LUCAS</strong>
                        <h3 class="mb-0 titulonot_2">GOBERNADOR REGIONAL</h3>
                        <p class="card-text mb-auto titulonot_2">Vice Gobernador Regional </p>
                        <p class="card-text mb-auto titulonot_2">Gobernador regional elegido mediante voluntad popular para el periodo 2023-2026</p>

                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img :src="ruta+'/img/gober2023/gobernador.png'" alt="" height="273">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-dark">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">.....................</strong>
                        <h3 class="mb-0 titulonot_2">.................</h3>

                        <!-- <p class="card-text mb-auto titulonot_2">Vice Gobernador regional elegido mediante voluntad popular para el periodo 2019-2022</p> -->
                        <p class="card-text mb-auto titulonot_2">Vice Gobernador Regional </p>

                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img :src="ruta+'/img/gober2023/foto-incognito.jpg'" alt="" height="273">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h3>FUNCIONARIOS</h3>
            <div class="card card-solid titulonot_2" style="padding-top: 20px; padding-bottom: 10px;padding-left: 10px;padding-right: 10px">
                <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINCIA HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ING. MILTON SOTO SOTO</b></h2>
                                            <p class="text-muted text-sm"><b>GERENCIA REGIONAL DE INGRAESTRUTURA: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>salhuana1607@hotmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962982810</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/gerentes/1.png'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=473939791592851&set=a.179560614364105" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Ver C.V.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINCIA HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ABOG. JORGE RAUL OYARCE ESTRELLA</b></h2>
                                            <p class="text-muted text-sm"><b>GERENCIA REGIONAL DE ASESORIA JURIDICA: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>salhuana1607@hotmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962982810</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/gerentes/2.png'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=473952654924898&set=a.179560614364105" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Ver C.V.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINCIA HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ECON. NELSON CÁRDENAS OJEDA</b></h2>
                                            <p class="text-muted text-sm"><b>GERENCIA REGIONAL DE PLANEAMIENTO, PRESUPUESTO Y ACONDICIONAMIENTO TERRITORIAL: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>salhuana1607@hotmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962982810</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/gerentes/3.png'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=473958134924350&set=a.179560614364105" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Ver C.V.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINCIA HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ING. TITO JOSIP JAIME HIDALGO</b></h2>
                                            <p class="text-muted text-sm"><b>GERENCIA REGIONAL DE DESARROLLO ECONOMICO: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>salhuana1607@hotmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962982810</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/gerentes/4.png'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=473961581590672&set=a.179560614364105" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Ver C.V.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINCIA HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ING. EDWING EDY MENDOZA VELEZ DE VILLA</b></h2>
                                            <p class="text-muted text-sm"><b>GERENCIA REGIONAL DE ADMINISTRACION: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>salhuana1607@hotmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962982810</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/gerentes/5.png'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=473965198256977&set=a.179560614364105" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Ver C.V.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
</template>

<script>
export default {
    props: ['ruta'],
    data() {
        return {

        }
    },
    components: {

    },
    created() {},
    mounted() {},
    methods: {

    }
}
</script>

<style lang="css" scoped>

</style>
