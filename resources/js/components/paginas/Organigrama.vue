<template>
    <div>
          <!-- Content Header (Page header) -->
          <div class="content-header bg-light shadow-sm">
            <div class="container">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">  Organigrama  <small> | GRH</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6"><!-- {{ info.nom_pagina }} -->
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><router-link  :to="'/'">Inicio</router-link></li>
                    <li class="breadcrumb-item">Organigrama</li>
                    <!-- <li class="breadcrumb-item active">Top Navigation</li> -->
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
        <div class="container pt-3 "  >
          
            <div class="row">
                
                <div class="card">
                  <div class="card-header">
                        <h3 class="card- titulonot_2"><strong>Organigrama</strong></h3>
                  </div>
                  <div class="card-body">
                      <h4> Aprobado mediante Ordenanza Regional Nro 040-2020-GRH-CR. <a href="https://drive.google.com/file/d/1d_UbTmv1ZCLHmGVFTjTMOB_D_jicL9Mg/view" target="_blank" class="btn btn-danger btn-sm"> <i class="fa fa-file"></i> Ver documento</a></h4>
                        
                        <table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
                          <tr>
                            <td colspan="91">&nbsp;</td>
                            <td width="5">&nbsp;</td>
                            </tr>
                          <tr>
                            <td width="7">&nbsp;</td>
                            <td colspan="14" rowspan="2"><p>&nbsp;</p></td>
                            <td colspan="54" >&nbsp;</td>
                            <td colspan="22" rowspan="3" ><p>&nbsp;</p></td>
                            <td>&nbsp;</td>
                          </tr>
                                  
                          <tr>
                            <td>&nbsp;</td>
                            <td width="33" >&nbsp;</td>
                            <td width="8" >&nbsp;</td>
                            <td width="8" >&nbsp;</td>
                            <td width="8" >&nbsp;</td>
                            <td width="14" >&nbsp;</td>
                            <td width="8" >&nbsp;</td>
                            <td width="8" >&nbsp;</td>
                            <td width="14" >&nbsp;</td>
                            <td width="14" >&nbsp;</td>
                            <td colspan="6" rowspan="2" class="org_cont" @click="modal(5)" data-toggle="modal" data-target="#idmodal">Secretaria del Consejo regional</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="7">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="23" rowspan="4" class="org_cont " @click="modal(4)" data-toggle="modal" data-target="#idmodal"><p>CONSEJO REGIONAL</p></td>
                            <td width="9">&nbsp;</td>
                            <td width="9">&nbsp;</td>
                            <td width="5">&nbsp;</td>
                            <td width="13">&nbsp;</td>
                            <td width="9">&nbsp;</td>
                            <td width="9">&nbsp;</td>
                            <td width="11">&nbsp;</td>
                            <td width="11">&nbsp;</td>
                            <td width="11">&nbsp;</td>
                            <td width="11">&nbsp;</td>
                            <td width="11">&nbsp;</td>
                            <td width="11">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="13">&nbsp;</td>
                            <td width="8" >&nbsp;</td>
                            <td width="8" >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="2" class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td colspan="12" rowspan="2">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="13" rowspan="8" >&nbsp;</td>
                            <td colspan="2" rowspan="8">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16">&nbsp;</td>
                            <td width="16">&nbsp;</td>
                            <td width="28">&nbsp;</td>
                            <td width="14">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                            <td colspan="19">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td ><p>&nbsp;</p></td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td width="59" height="19">&nbsp;</td>
                            <td width="57" height="19">&nbsp;</td>
                            <td colspan="2" rowspan="4">&nbsp;</td>
                            <td colspan="34" rowspan="3"><p>&nbsp;</p></td>
                            <td rowspan="3">&nbsp;</td>
                            </tr>
                          <tr>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="6" rowspan="2" class="org_cont" @click="modal(8)" data-toggle="modal" data-target="#idmodal">Oficina Regional de Control Institucional</td>
                            <td colspan="2"><p>&nbsp;</p>
                              <p>&nbsp;</p></td>
                            <td colspan="11" class="lv border-right" data-id="3">&nbsp;</td>
                            <td colspan="12" data-id="3">&nbsp;</td>
                            </tr>
                          <tr>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="2" class="esd  border-top  border-right ">&nbsp;</td>
                            <td colspan="23" rowspan="4" class="org_cont " @click="modal(6)" data-toggle="modal" data-target="#idmodal"><p >GOBERNACION REGIONAL</p></td>
                          </tr>
                          <tr>
                            <td colspan="16">&nbsp;</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td colspan="6">&nbsp;</td>
                            <td colspan="12" rowspan="3" class="org_cont">Consejo de Coordinación Regional</td>
                            <td width="19">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td width="19">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td width="22">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td width="10">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td><p>&nbsp;</p></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="6" rowspan="2" class="org_cont" @click="modal(9)" data-toggle="modal" data-target="#idmodal">Procuraduría Pública Regional</td>
                            <td height="23" colspan="2" class="esd  border-bottom border-right ">&nbsp;</td>
                            <td colspan="2" class="lh border-top">&nbsp;</td>
                            <td colspan="6" class="lh border-top" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td colspan="6">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="19">&nbsp;</td>
                            <td colspan="11" rowspan="6" class="lv border-right">&nbsp;</td>
                            <td colspan="12">&nbsp;</td>
                            <td colspan="34">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="7" rowspan="2">&nbsp;</td>
                            <td colspan="12" data-id="2" ><p>&nbsp;</p></td>
                            <td colspan="15" rowspan="2">&nbsp;</td>
                            <td colspan="45" rowspan="2" >&nbsp;</td>
                            <td width="8" >&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="12" data-id="2" >&nbsp;</td>
                            <td rowspan="84" >&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="19" rowspan="8">&nbsp;</td>
                            <td ><p>&nbsp;</p></td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="5" rowspan="3" class="org_cont" @click="modal(21)" data-toggle="modal" data-target="#idmodal">Secretaría General</td>
                            <td width="5">&nbsp;</td>
                            <td colspan="10" rowspan="3">&nbsp;</td>
                            <td width="13" rowspan="2">&nbsp;</td>
                            <td width="17" rowspan="2"></td>
                            <td colspan="16" rowspan="3" ></td>
                            <td colspan="17">&nbsp;</td> 
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td class="esd  border-top  border-right ">&nbsp;</td>
                            <td colspan="17">&nbsp;</td>
                          </tr>
                          <tr>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="14" rowspan="2" data-id="22" >&nbsp;</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td colspan="10">&nbsp;</td>
                            <td width="12" class="lv border-right">&nbsp;</td>
                            <td colspan="10">&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="17" rowspan="2">&nbsp;</td>
                            <td colspan="17">&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td class="lv border-right">&nbsp;</td>
                            <td colspan="10" rowspan="4" class="lh border-top">&nbsp;</td>
                            <td class="esd  border-top  border-right ">&nbsp;</td>
                            <td colspan="10" rowspan="4" >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="17">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><p>&nbsp;</p></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="5" rowspan="3" class="org_cont" @click="modal(23)" data-toggle="modal" data-target="#idmodal">Oficina de Coordinación Lima</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td rowspan="3" class="lv border-right">&nbsp;</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="16" rowspan="3" ></td>
                            <td colspan="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="esd  border-bottom border-right ">&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td colspan="17">&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="17">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="34" rowspan="3">&nbsp;</td>
                            <td colspan="22" rowspan="3" class="org_cont " @click="modal(12)" data-toggle="modal" data-target="#idmodal">GERENCIA GENERAL REGIONAL</td>
                            <td colspan="17">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(16)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de Planeamiento estratégico</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="13" rowspan="6">&nbsp;</td>
                            <td colspan="4" rowspan="6" class="lv border-right">&nbsp;</td>
                            <td colspan="2" class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="22" rowspan="2" >&nbsp;</td>
                            <td colspan="6" rowspan="2" class="org_cont" @click="modal(25)" data-toggle="modal" data-target="#idmodal">oficina de gestión de recursos humanos</td>
                            <td height="19" >&nbsp;</td>
                            <td rowspan="9" >&nbsp;</td>
                            <td colspan="3" rowspan="5">&nbsp;</td>
                            <td rowspan="9" >&nbsp;</td>
                            <td colspan="11" rowspan="11" class="lv border-right">&nbsp;</td>
                            <td colspan="11" rowspan="5">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(17)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de Presupuesto Público</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td rowspan="11">&nbsp;</td>
                            </tr>
                          <tr>
                            <td class="lv border-right lh border-top">&nbsp;</td>
                            <td colspan="2" class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="26" >&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td colspan="17">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="22" rowspan="2" >&nbsp;</td>
                            <td colspan="6" rowspan="2" class="org_cont" @click="modal(28)" data-toggle="modal" data-target="#idmodal">oficina de abastecimiento</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(2)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de Modernización y Transformación Digital</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="lv border-right lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="12" rowspan="5" class="org_cont" @click="modal(15)" data-toggle="modal" data-target="#idmodal">Gerencia Regional de Planeamiento, Presupuesto y Acondicionamiento Territorial</td>
                            <td colspan="4" class="lv border-right">&nbsp;</td>
                            <td colspan="2" class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="26" rowspan="4" >&nbsp;</td>
                            <td colspan="2" rowspan="4">&nbsp;</td>
                            <td rowspan="4" class="lv border-right">&nbsp;</td>
                            <td colspan="3" rowspan="6" class="org_cont" @click="modal(24)" data-toggle="modal" data-target="#idmodal">GERENCIA REGIONAL DE ADMINISTRACION</td>
                            <td colspan="11" rowspan="7" class="lv border-right">&nbsp;</td>
                            <td rowspan="4" class="lh border-top">&nbsp;</td>
                            <td colspan="4" rowspan="11" class="esd  border-top  border-right ">&nbsp;</td>
                            <td colspan="17">&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(18)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de Programación Multianual de Inversiones - OPMI</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="2" class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="17">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="22" rowspan="2" >&nbsp;</td>
                            <td colspan="6" rowspan="2" class="org_cont" @click="modal(26)" data-toggle="modal" data-target="#idmodal">oficina de contabilidad</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td >&nbsp;</td>
                            <td ></td>
                            <td colspan="13">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(19)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de estudios de Pre Inversiones</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="lh border-top lv border-right">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lv border-right lh border-top"></td>
                            <td>&nbsp;</td>
                            <td colspan="12" rowspan="2" class="org_cont" @click="modal(14)" data-toggle="modal" data-target="#idmodal">Gerencia Regional de Asesoría Jurídica</td>
                            <td colspan="2" class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="26" >&nbsp;</td>
                            <td colspan="2" >&nbsp;</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="2" >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td colspan="11" class="lv border-right"></td>
                            <td class="lh border-top" ><p></p></td>
                            <td colspan="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="22" rowspan="2" >&nbsp;</td>
                            <td colspan="6" rowspan="2" class="org_cont" @click="modal(27)" data-toggle="modal" data-target="#idmodal">Oficina de tesorería</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td rowspan="4" >&nbsp;</td>
                            <td colspan="3" rowspan="5" class="org_cont" @click="modal(22)" data-toggle="modal" data-target="#idmodal">OFICINA REGIONAL DE COMUNICACIONES, IMAGEN Y PROTOCOLO</td>
                            <td rowspan="4" class="lv border-right">&nbsp;</td>
                            <td colspan="11" rowspan="4" class="lv border-right lh border-top">&nbsp;</td>
                            <td colspan="11" rowspan="5" class="esd  border-top  border-right ">&nbsp;</td>
                            <td colspan="13" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(13)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de Cooperación Internacional</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td rowspan="4">&nbsp;</td>
                            </tr>
                          <tr>
                            <td class="lv border-right lh border-top">&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="12" rowspan="2" class="org_cont" @click="modal(10)" data-toggle="modal" data-target="#idmodal">Oficina Regional de Gestión en Conflictos Sociales</td>
                            <td colspan="2" class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="26" >&nbsp;</td>
                            <td colspan="2" >&nbsp;</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td class="lh border-top" >&nbsp;</td>
                            <td colspan="17">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="22" rowspan="2" >&nbsp;</td>
                            <td colspan="6" rowspan="2" class="org_cont" @click="modal(29)" data-toggle="modal" data-target="#idmodal">oficina de patrimonio</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td colspan="13" >&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(20)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de Acondicionamiento territorial</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td colspan="11" class="lv border-right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="12" rowspan="2" class="org_cont" @click="modal(11)" data-toggle="modal" data-target="#idmodal">Oficina Regional de Gestion de riesgo de desastres, defensa Nacional y Seguridad Ciudadana</td>
                            <td colspan="4">&nbsp;</td>
                            <td colspan="2" class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          
                          <tr>
                            <td colspan="45" class="lv border-right">&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="10" >&nbsp;</td>
                            <td class="lh border-top" >&nbsp;</td>
                            <td width="6" rowspan="2" >&nbsp;</td>
                            <td width="6" rowspan="2" >&nbsp;</td>
                            <td width="6" rowspan="2" >&nbsp;</td>
                            <td width="8" rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2" >&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="45" class="lv border-right">&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="10" >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="11">&nbsp;</td>
                            <td >&nbsp;</td>
                          </tr>
                          
                          <tr>
                            <td colspan="10">&nbsp;</td>
                            <td width="17">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td width="8">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="esd  border-top  border-right ">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="14" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td class="esd  border-top  border-right "></td>
                            <td colspan="13" class="lh border-top">&nbsp;</td>
                            <td class="esd  border-top  border-right ">&nbsp;</td>
                            <td colspan="20" class="lh border-top">&nbsp;</td>
                            <td width="35" class="esd  border-top  border-right ">&nbsp;</td>
                            <td colspan="10">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="10" rowspan="2">&nbsp;</td>
                            <td colspan="15" rowspan="2" class="org_cont " @click="modal(30)" data-toggle="modal" data-target="#idmodal">GERENCIA REGIONAL DE DESARROLLO ECONÓMICO</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="13" rowspan="2" class="org_cont " @click="modal(33)" data-toggle="modal" data-target="#idmodal">GERENCIA REGIONAL DE DESARROLLO SOCIAL</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td rowspan="46" class="lv border-right">&nbsp;</td>
                            <td colspan="5" rowspan="2">&nbsp;</td>
                            <td colspan="18" rowspan="2" class="org_cont " @click="modal(50)" data-toggle="modal" data-target="#idmodal">GERENCIA REGIONAL DE RECURSOS NATURALES Y GESTION AMBIENTAL</td>
                            <td colspan="4" rowspan="2">&nbsp;</td>
                            <td colspan="17" rowspan="2" class="org_cont " @click="modal(45)" data-toggle="modal" data-target="#idmodal">GERENCIA REGIONAL DE INFRAESTRUCTURA</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="10">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="lv border-right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="3" class="lv border-right">&nbsp;</td>
                            <td colspan="13">&nbsp;</td>
                            <td colspan="13" class="lv border-right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="21">&nbsp;</td>
                            <td width="19" class="lv border-right">&nbsp;</td>
                            <td colspan="9">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="4" rowspan="30" class="lv border-right"><p>&nbsp;</p></td>
                            <td class="lh border-top">&nbsp;</td>
                            <td width="9" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td width="5" class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td colspan="5" class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="2" rowspan="41" class="lv border-right"><p>&nbsp;</p></td>
                            <td colspan="3" class="lh border-top">&nbsp;</td>
                            <td colspan="13">&nbsp;</td>
                            <td colspan="4">&nbsp;</td>
                            <td width="11" rowspan="5" class="lv border-right">&nbsp;</td>
                            <td colspan="8" class="lh border-top">&nbsp;</td>
                            <td colspan="8">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="3" rowspan="12" class="lv border-right"><p>&nbsp;</p></td>
                            <td colspan="6" class="lh border-top">&nbsp;</td>
                            <td colspan="9">&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td height="19" >&nbsp;</td>
                            <td><p>&nbsp;</p></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="15" rowspan="2" class="org_cont">Sub Gerencia de Promoción de la Inversión Privada</td>
                            <td width="16" >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" >Sub Gerencia de Inversión y Bienestar Social</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="4" rowspan="3">&nbsp;</td>
                            <td width="5" data-id="47" ></td>
                            <td colspan="16" rowspan="2" class="org_cont" @click="modal(51)" data-toggle="modal" data-target="#idmodal"><p>Sub Gerencia de Recursos Naturales</p></td>
                            <td colspan="5" data-id="49" >&nbsp;</td>
                            <td data-id="52" ss>&nbsp;</td>
                            <td colspan="14" rowspan="2" class="org_cont" @click="modal(46)" data-toggle="modal" data-target="#idmodal"><p>Sub Gerencia de estudios</p></td>
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td class="lh border-top" >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td class="lh border-top" data-id="47" ></td>
                            <td colspan="5" data-id="49" >&nbsp;</td>
                            <td class="lh border-top" data-id="52" ss>&nbsp;</td>
                          </tr>
                          <tr>
                            <td >&nbsp;</td>
                            <td colspan="20" >&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="16" data-id="38" >&nbsp;</td>
                            <td data-id="47" ></td>
                            <td colspan="16" data-id="47"></td>
                            <td colspan="5" data-id="49" >&nbsp;</td>
                            <td data-id="52" ss>&nbsp;</td>
                            <td data-id="52" ss>&nbsp;</td>
                            <td data-id="52" ss>&nbsp;</td>
                            <td data-id="52" ss>&nbsp;</td>
                            <td data-id="52" ss>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="9" >&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="15" rowspan="2" class="org_cont" @click="modal(84)" data-toggle="modal" data-target="#idmodal">Dirección Regional de Desarrollo Agrario y Riego</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont">Sub Gerencia de Juventudes</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4" rowspan="3">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="16" rowspan="2" class="org_cont" @click="modal(52)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de Gestión Ambiental</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="14" rowspan="2" class="org_cont" @click="modal(47)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de Obras y Supervision</td>
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="6" class="lh border-top">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="19" colspan="21" >&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="16">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="5">&nbsp;</td>
                            <td width="5">&nbsp;</td>
                            <td width="5">&nbsp;</td>
                            <td width="11">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td width="9">&nbsp;</td>
                            <td colspan="19" rowspan="2" class="org_cont" @click="modal(102)" data-toggle="modal" data-target="#idmodal"><p>Dirección Regional de la Producción</p></td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td ><p>&nbsp;</p></td>
                            <td colspan="11" rowspan="2" class="org_cont" >Sub Gerencia de Comunidades Nativas Campesinas, Identidad Cultural y Poblaciones Vulnerables</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="8" rowspan="2">&nbsp;</td>
                            <td colspan="11" rowspan="2" data-id="50" ><p>&nbsp;</p></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="14" rowspan="2" class="org_cont" @click="modal(48)" data-toggle="modal" data-target="#idmodal">Sub Gerencia de Liquidación</td>
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td class="lh border-top" >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            </tr>
                          <tr>
                            <td rowspan="11">&nbsp;</td>
                            <td rowspan="9" class="lv border-right">&nbsp;</td>
                            <td colspan="19">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="27" rowspan="3">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td rowspan="11">&nbsp;</td>
                            </tr>
                          <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="17" rowspan="5" class="org_cont" @click="modal(105)" data-toggle="modal" data-target="#idmodal">Sub Dirección de Pesquería</td>
                            <td rowspan="2">&nbsp;</td>
                            <td width="16" rowspan="2" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(126)" data-toggle="modal" data-target="#idmodal">Dirección Regional de Salud</td>
                            <td rowspan="2">&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="14" rowspan="5" class="org_cont" @click="modal(62)" data-toggle="modal" data-target="#idmodal">Direccion Regional de Transportes y Comunicacion</td>
                          </tr>
                          <tr>
                            <td class="lh border-top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td rowspan="3" class="lh border-top">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td width="16" rowspan="3" >&nbsp;</td>
                            <td colspan="12">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td width="11" rowspan="3">&nbsp;</td>
                            <td width="5" rowspan="3">&nbsp;</td>
                            <td width="5" rowspan="3">&nbsp;</td>
                            <td width="5" rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3">&nbsp;</td>
                            <td rowspan="3" class="lh border-top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(166)" data-toggle="modal" data-target="#idmodal">Dirección Regional de Educación</td>
                          </tr>
                          <tr>
                            <td class="lh border-top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="16">&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="5">&nbsp;</td>
                            <td colspan="11">&nbsp;</td>
                            <td colspan="45" rowspan="26"><p>&nbsp;</p></td>
                          </tr>
                          <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="17" rowspan="3" class="org_cont" @click="modal(106)" data-toggle="modal" data-target="#idmodal">Sub Dirección de Industria y Mype</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(120)" data-toggle="modal" data-target="#idmodal">Dirección Regional de Trabajo y Promocion del Empleo</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="2" rowspan="11" class="lv border-right">&nbsp;</td>
                            <td colspan="14">&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="16">&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="9" rowspan="2" class="org_cont" @click="modal(122)" data-toggle="modal" data-target="#idmodal">Sub Dirección de Prevencion y Soluciones de Conflictos</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="19" rowspan="2" class="org_cont" @click="modal(97)" data-toggle="modal" data-target="#idmodal"><p>Dirección Regional de Energía y Minas</p></td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td class="lh border-top" ></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="3" ></td>
                            <td colspan="11" ></td>
                            </tr>
                          <tr>
                            <td rowspan="7">&nbsp;</td>
                            <td rowspan="5" class="lv border-right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="15">&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="9" rowspan="2" class="org_cont" @click="modal(124)" data-toggle="modal" data-target="#idmodal">Sub Dirección de Inspeccion del Trabajo</td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td rowspan="20">&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="17" rowspan="2" class="org_cont">Sub Dirección de Minería y Asuntos Ambientales Mineros</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                          </tr>
                          <tr>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11">&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="15">&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="9" rowspan="2" class="org_cont" @click="modal(123)" data-toggle="modal" data-target="#idmodal">Sub Dirección de Promoción y Proteccion de los Derechos Fundamentales y de la Seguridad y Salud en el Trabajo</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="17" rowspan="2" class="org_cont">Sub Dirección de Energía y Asuntos Ambientales Energeticos</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11">&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="16">&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="9" rowspan="2" class="org_cont" @click="modal(125)" data-toggle="modal" data-target="#idmodal">Sub Dirección de Promoción del Empleo y Capacitacion Laboral</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="19" rowspan="2" class="org_cont" @click="modal(114)" data-toggle="modal" data-target="#idmodal"><p>Dirección Regional de Comercio Exterior y Turismo</p></td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="16">&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="4" rowspan="6">&nbsp;</td>
                            <td rowspan="6"><p>&nbsp;</p></td>
                            <td rowspan="8" class="lv border-right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="15">&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(93)" data-toggle="modal" data-target="#idmodal">Direccion regional de Vivienda Construcción y saneamiento</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="17" rowspan="2" class="org_cont" @click="modal(116)" data-toggle="modal" data-target="#idmodal">Sub Dirección de comercio Exterior</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="2" rowspan="5" class="lv border-right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11">&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="15">&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="9" rowspan="2" class="org_cont" @click="modal(95)" data-toggle="modal" data-target="#idmodal">Sub Dirección de Vivienda y Urbanismo</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="17" rowspan="2" class="org_cont" @click="modal(117)" data-toggle="modal" data-target="#idmodal">Sub Dirección de turismo</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="15">&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="9" rowspan="2" class="org_cont" @click="modal(96)" data-toggle="modal" data-target="#idmodal">Sub Dirección de Construcción y Saneamiento</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="5" rowspan="3">&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="4" rowspan="2">&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="17" rowspan="2" class="org_cont" @click="modal(118)" data-toggle="modal" data-target="#idmodal">Sub Dirección de Artesania</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="25">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11" rowspan="2" class="org_cont" @click="modal(44)" data-toggle="modal" data-target="#idmodal">Aldea Infantil &quot;SAN JUAN BOSCO&quot;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="25">&nbsp;</td>
                            <td width="16" >&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td class="lh border-top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="41" rowspan="2"><p>&nbsp;</p></td>
                            <td colspan="4">&nbsp;</td>
                            <td rowspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="25">&nbsp;</td>
                            <td colspan="6" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="11">&nbsp;</td>
                            <td colspan="5">&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="25">&nbsp;</td>
                            <td colspan="6" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="12" class="lv border-right" >&nbsp;</td>
                            <td colspan="14" >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td colspan="23" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="25">&nbsp;</td>
                            <td colspan="6" >&nbsp;</td>
                            <td colspan="9" rowspan="2" class="org_cont" @click="modal(161)" data-toggle="modal" data-target="#idmodal">Archivo regional</td>
                            <td colspan="5" class="lv border-right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="17" rowspan="2" class="org_cont">Oficinas Sub regionales de Desarrollo</td>
                            <td colspan="23" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="25">&nbsp;</td>
                            <td colspan="6" >&nbsp;</td>
                            <td colspan="5" class="lh border-top">&nbsp;</td>
                            <td colspan="5" class="lh border-top">&nbsp;</td>
                            <td colspan="23" >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          
                        </table>
                  </div>
                  
                </div>


              </div>
            
        </div>

         <!-- aqui ponemos los modales -->
             <b-modal ref="my-modal" hide-footer :title="depnombre">
              <table class="table table-bordered table-sm table-hover">
                  <tbody><tr><td><strong>Depednencia:</strong></td><td>{{depnombre}}</td></tr>
                  <tr><td><strong>Representante:</strong></td><td>{{representante}}</td></tr>
                  <tr><td><strong>Cargo:</strong></td><td>{{cargo}}</td></tr>
                  <tr><td><strong>Abreviatura:</strong></td><td>{{abreviatura}}</td></tr>
                  <tr><td><strong>Siglas:</strong></td><td>{{siglas}}</td></tr></tbody></table>
            </b-modal>

    </div>
</template>
<script>
import axios from 'axios';
export default {
   props:['ruta'],
   data () {
     return {
      depnombre:'',
      representante:'',
      cargo:'',
      abreviatura:'',
      siglas:'',
     }
   },
   components: {

   },
   created () {},
   mounted () {},
   methods: {
    modal(id)
    {
        // alert(id);
          var url='/api/unidad/'+id;
           axios.get(url)
                .then(response=>{
                  // this.info=response.data.pagina[0];
                  this.depnombre=response.data[0].depe_nombre
                  this.representante=response.data[0].depe_representante
                  this.cargo=response.data[0].depe_cargo
                  this.abreviatura=response.data[0].depe_abreviado
                  this.siglas=response.data[0].depe_sigla
                   this.$refs['my-modal'].show();
                });
    }
   }
 }
</script>
<style lang="css" scoped>
.linea td {
  font-size: 2px;
  line-height: 2px;
   background-color: #CCCCCC;
	} 
	td{  border-width: 2px;}
	.org_cont{
	font-size: 13px;
	/*border: solid 2px;*/
	border-radius: 10px;
	background-color: #054a91;/*##94d9ea;*/
	cursor: pointer;
	color:#fff
	}
	.org_conts{
	/* border: solid 2px;*/
	border-radius: 10px 10px 0px 0px;
	text-align: center;
	background-color: #94d9ea;/*#d1ebf1;*/
	cursor:pointer;
	}
	.org_conti{
	/*border: solid 2px;*/
	border-radius: 0px 0px 10px 10px;
	background-color: #5ccbe6;/*#d1ebf1;*/
	cursor:pointer;
	}

	.org_cont:hover{
	background-color: #054a91;
	color:#fff
	}
	.org_conts:hover{
	background-color: #054a91;
	color:#fff
	}
	.org_conti:hover{
	background-color: #054a91;
	color:#fff
	}

	.lh{
	/* [disabled]border-right-style: none; */
	  border-top-style: solid;
    /* border-top: 1px #054a91 !important; */
	}
	.esd   {
	border-top-style: solid;
	border-right-style: solid;
  /* border-top: 1px solid #123d68 !important; */
	}
	.eii {
	border-bottom-style: solid;
	border-left-style: solid;
	}
	.lv{
	border-right-style: solid;
	}
	.esd{
	border-bottom-style: solid;
	border-right-style: solid;
	}
	.esi {
	border-left-style: solid;
	border-top-style: solid;
	}
	td{text-align: center}
	p{ margin:0px 0px 0px 0px; padding:0px 0px 0px 0px;}
	.title{
	font-size: 21px;
	font-weight: bolder;
	}
	.bold{font-weight: bolder;}
    
	table{ /*background-color:#fff;*/ 
          color:#2F4D88;
          /* border-color: #054b9100; */
          }
  thead, tbody, tfoot, tr, td, th{
        /* border-color: inherit; */
    border-style: solid;
    border-width: 0;
  }
  .border-top{
    border-top: 1px solid #2F4D88 !important;
  }
  .border-bottom{
    border-bottom: 1px solid #2F4D88 !important;
  }
  .border-right{
    border-right: 1px solid #2F4D88 !important;
  }
</style>