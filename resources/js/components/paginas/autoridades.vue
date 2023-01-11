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
                        <p class="card-text mb-auto titulonot_2">Gobernador Regional </p>
                        <p class="card-text mb-auto titulonot_2">Gobernador regional elegido mediante voluntad popular para el periodo 2023-2026</p>

                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img :src="ruta+'/img/gober2023/gobernador.png'" alt="" height="273">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-secondary">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">JUAN SIVORI PAREDES RIOS</strong>
                        <h3 class="mb-0 titulonot_2">Vice Gobernador Regional</h3>

                        <p class="card-text mb-auto titulonot_2">Vice Gobernador regional elegido mediante sesión de consejo para el periodo 2023-2026</p>
                        <p class="card-text mb-auto titulonot_2">Consejero por la Provincia de Puerto Inca </p>

                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img :src="ruta+'/img/consejeros2023/01ptoinca.jpg'" alt="" height="273">
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
                            <div class="card bg-secondary">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINTE HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ING. MILTON SOTO SOTO</b></h2>
                                            <p class="text-warning text-sm"><b>GERENTE GENERAL REGIONAL: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-warning">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>msotos@regionhuanuco.gob.pe</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: xxxxx</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/gerentes/1.png'" alt="" class="img-circle img-fluid" >
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
                                    <!-- {{-- PROVINTE HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ABOG. JORGE RAUL OYARCE ESTRELLA</b></h2>
                                            <p class="text-muted text-sm"><b>GERENTE REGIONAL DE ASESORIA JURIDICA: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>xxxxxx</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: xxxxx</li>
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
                                    <!-- {{-- PROVINTE HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ECON. NELSON CÁRDENAS OJEDA</b></h2>
                                            <p class="text-muted text-sm"><b>GERENTE REGIONAL DE PLANEAMIENTO, PRESUPUESTO Y ACONDICIONAMIENTO TERRITORIAL: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>xxxxxx</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: xxxxx</li>
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
                                    <!-- {{-- PROVINTE HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ING. TITO JOSIP JAIME HIDALGO</b></h2>
                                            <p class="text-muted text-sm"><b>GERENTE REGIONAL DE DESARROLLO ECONOMICO: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>xxxxxx</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: xxxxx</li>
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
                                    <!-- {{-- PROVINTE HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>CPC. EDWING EDY MENDOZA VELEZ DE VILLA</b></h2>
                                            <p class="text-muted text-sm"><b>GERENTE REGIONAL DE ADMINISTRACION: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>xxxxxx</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: xxxxx</li>
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
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINTE HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ING. JUAN TOMAS DEZA FALCON</b></h2>
                                            <p class="text-muted text-sm"><b>GERENTE REGIONAL DE RECURSOS NATURALES Y GESTION AMBIENTAL: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>xxxxxx</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: xxxxx</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/gerentes/6.png'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=473969171589913&set=a.179560614364105" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Ver C.V.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINTE HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ECON. ALDO FERNANDO REYES VIVIANO</b></h2>
                                            <p class="text-muted text-sm"><b>GERENTE REGIONAL DE DESARROLLO SOCIAL: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>xxxxx</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: xxxxxx</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/gerentes/7.png'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=473973668256130&set=a.179560614364105" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Ver C.V.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINTE HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>ING. DANIEL ENRIQUE HIDALGO LEDESMA</b></h2>
                                            <p class="text-muted text-sm"><b>GERENTE REGIONAL DE INFRAESCTRUCTURA: </b> -</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>dhidalgo@regionhuanuco.gob.pe</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 982191307</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/gerentes/8.png'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=473977061589124&set=a.179560614364105" class="btn btn-sm btn-primary">
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

        <div class="row">
            <h3>Consejeros Regionales</h3>
            <div class="card card-solid titulonot_2" style="padding-top: 20px; padding-bottom: 10px;padding-left: 10px;padding-right: 10px">
                <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-secondary">
                                <div class="card-header text-muted border-bottom-0">
                                    <!-- {{-- PROVINCIA HUÁNUCO --}} -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>RAFAEL CÉSPEDES GAMARRA <span class="right badge badge-danger">Consejero delegado</span></b></h2>
                                            <p class="text-warning text-sm"><b>CONSEJERO: </b> PROVINCIA HUACAYBAMBA</p>
                                            <ul class="ml-4 mb-0 fa-ul text-warning">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>fenixc815@gmail.com </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 918 824 475</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/04huacaybamba.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192177834279&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary" >
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
                                            <h2 class="lead"><b>ESTER GUISELLA LUCAS AMBO </b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA AMBO</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>guisella.lucas@gmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962 812 008</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/17ambo.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192577834239&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Carlos Alberto  Esteban Atencia</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA AMBO</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>carloshuanuco@hotmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 949 648 090</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/16ambo.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192541167576&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Vidal Ruben Adrian Fausto</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA DOS DE MAYO</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>pradogarciaconsejero@gmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 942 455 377</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/08dosmayo.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192297834267&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Amadeo Reymundez Sanchez</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA DOS DE MAYO</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>reysan_808@hotmail.com </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 931 237 037</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/05dosmayo.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=478192211167609&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Ricardo Wellingthon Prado Garcia</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUAMALIES</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>pradogarciaconsejero@gmail.com </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 985 329 575</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/03huamalies.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=478192127834284&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Nicolas Nieves Inga Esteban</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUAMALIES</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>--- </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 995 707 100</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/10huamalies.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192354500928&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Elizabeth Justiniano Rivera</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUÁNUCO</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>elizabethjustiniano609@gmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 944 509 107</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/13huanuco.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192437834253&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Kandy Yaniny Vargas Aguirre</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUÁNUCO</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>vakandy22@hormail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962 681 150</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/19huanuco.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192634500900&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Olchese Tarazona Gonzales</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUÁNUCO</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>olchesetarazonagonzales@gmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962 937 287</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/14huanuco.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192471167583&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Olinda Rosa Tacuchi de Davila</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA LAURICOCHA</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>---</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 915 362 943</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/18lauricocha.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192601167570&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Manuel Rosales Garcia</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA LEONCIO PRADO</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>---</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 917 804 587</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/06leoncioprado.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192234500940&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Milagros del Pilar Beraun Leandro</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA LEONCIO PRADO</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>milabele96@gmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 926 042 449</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/12leoncipprado.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192411167589&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Dante Oliver Tarazona Reyes</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA MARAÑON</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>datare2002@gmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 923 292 596</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/07maranon.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192271167603&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Roy KenedyTolentino Fabian</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA PACHITEA</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>roykenedy@hotmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 992 528 207</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/09pachitea.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192321167598&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Eliel Escobal Ayala</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA PACHITEA</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>elielescobal@gmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 980 603 328</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/15pachitea.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192507834246&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Lester Lopez Espiritu</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA PUERTO INCA</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>listerlopez47@gmail.com </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 963 265 737</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/02ptoinca.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=478192074500956&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Juan Sivori Paredes Rios</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA PUERTO INCA</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>sivori301058@hotmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 901 339 483</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/01ptoinca.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo?fbid=478223001164530&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
                                            <h2 class="lead" style="text-transform: uppercase;"><b>Rocio Diana Isla Esteban</b></h2>
                                            <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA YAROWILCA</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>risla104@gmail.com</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 926 546 197</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img :src="ruta+'/img/consejeros2023/11yarowilca.jpg'" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">

                                        <a href="https://www.facebook.com/photo/?fbid=478192384500925&set=pcb.478192661167564" target="_blank" class="btn btn-sm btn-primary">
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
