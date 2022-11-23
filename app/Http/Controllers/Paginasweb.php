<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Paginasweb extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //$temas=$this->tema();
        //return view('portal',compact('temas'));
        return view('portal');
    }
    public function menus()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web

        $menus=DB::table('menus')->where(['iddirecciones_web'=>$iddireccionweb,'activo_menu'=>1])->orderBy('idmenus','ASC')->get();
        
        $datsubmenu=DB::table('submenu')->join('menus','submenu.idmenus','=','menus.idmenus')->where(['activo_submenu'=>1,'iddirecciones_web'=>$iddireccionweb])->select('submenu.idsubmenu','submenu.nom_submenu','submenu.link_submenu','submenu.archivo','submenu.idpagina','submenu.ico_submenu','submenu.idmenus')->orderBy('submenu.idmenus','ASC')->get();

        
        return response()->json(['menus'=>$menus,'submenus'=>$datsubmenu], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
        
    }

    public function convocatorias()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web

        $proceso=DB::table('cas_proceso_seleccion')->where('iddireccionweb',$iddireccionweb)->orderBy('id_proc_sel_cas','DESC')->get();
        $i=1;
        $archivos=DB::table('archivo_sel_cas')->join('cas_proceso_seleccion','archivo_sel_cas.id_proceso_selec','=','cas_proceso_seleccion.id_proc_sel_cas')->where('iddireccionweb',$iddireccionweb)->select('idarchivo_sel_cas','nom_archivo','url_archivo','archivo_sinurl','etapa','id_proceso_selec')->orderBy('idarchivo_sel_cas','ASC')->get();
        foreach($proceso as $itemproc)
        {
            $final=[];
            $entrevista=[];
            $curricular=[];
            $inscripcion=[];

            for($j=0;$j<Count($archivos);$j++)
            {
                if($itemproc->id_proc_sel_cas==$archivos[$j]->id_proceso_selec)
                {
                    if($archivos[$j]->etapa=='FINAL'){
                        $final[]=array('nom_archivo'=>$archivos[$j]->nom_archivo,'url_archivo'=>$archivos[$j]->url_archivo);
                    }
                    if($archivos[$j]->etapa=='ENTREVISTA'){
                        $entrevista[]=array('nom_archivo'=>$archivos[$j]->nom_archivo,'url_archivo'=>$archivos[$j]->url_archivo);
                    }
                    if($archivos[$j]->etapa=='CURRICULAR'){
                        $curricular[]=array('nom_archivo'=>$archivos[$j]->nom_archivo,'url_archivo'=>$archivos[$j]->url_archivo);
                    }
                    if($archivos[$j]->etapa=='INSCRIPCION'){
                        $inscripcion[]=array('nom_archivo'=>$archivos[$j]->nom_archivo,'url_archivo'=>$archivos[$j]->url_archivo);
                    }
                }
                //$detalles=array('inscripcion'=>$inscripcion,'curricular'=>$curricular,'entrevista'=>$entrevista,'final'=>$final);
               

            }
                $detalles=array('inscripcion'=>$inscripcion,'curricular'=>$curricular,'entrevista'=>$entrevista,'final'=>$final);

                $fechaini=$itemproc->proc_sel_cas_fecha_inicio;
                $fechains=$itemproc->cas_proc_sel_fecha_fin_inscripcion;
                $fechafin=$itemproc->proc_sel_cas_fecha_termino;
                $fecharesul=$itemproc->cas_proc_sel_fecha_resultados;

                $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
                //para concluido el proceso fechaactual>fecharesultado
                if($fecha_actual>strtotime($fecharesul)){$colofondo='background:#ffe5e5;';$espan='badge bg-danger';$texto='CONCLUIDO';}
                 //para en proceso fechaactual>fechains y fechaactual<fechafin
                 if($fecha_actual>strtotime($fechains) and $fecha_actual<strtotime($fechafin)){$colofondo='background:#f7d097;';$espan='badge bg-warning';$texto='EN PROCESO';}
                 //para en proceso fechaactual>fechains y fechaactual<fechafin
                 if(($fecha_actual>strtotime($fechaini) or $fecha_actual<=strtotime($fechaini) ) and $fecha_actual<strtotime($fechains)){$colofondo='background:#c0e0d3;'; $espan='badge bg-success';$texto='NUEVO';}

                

            $newDatos[]=['idproceso'=>$itemproc->id_proc_sel_cas,'nom_proceso'=>$itemproc->proc_sel_cas_descripcion,'ini_insc'=>$itemproc->proc_sel_cas_fecha_inicio,'color_fondo'=>$colofondo,'span'=>$espan,'texto'=>$texto,'fin_insc'=>$itemproc->cas_proc_sel_fecha_fin_inscripcion,'fecha_res'=>$itemproc->cas_proc_sel_fecha_resultados,'detalle'=>$detalles];
        }

       

        return response()->json(['convocatorias'=>$newDatos],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
    public function noticiasini()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web
        $publicacion=DB::table('noticias')->where(['activo'=>1,'iddirecciones_web'=>$iddireccionweb])->orderBy('idnoticias','DESC')->limit(8)->get();
        for($i=0;$i<count($publicacion);$i++)
        {
            $imagen=substr($publicacion[$i]->img1,7);
            $titulo=html_entity_decode($publicacion[$i]->titulo);//utf8_decode($publicacion[$i]->titulo);
            // $content=$publicacion[$i]->contenido;//utf8_decode($publicacion[$i]->contenido);
            // $cortado=substr($content,0,60);
            $datos[]=array('idnoticias'=>$publicacion[$i]->idnoticias,'titulo'=>$titulo,'img1'=>$imagen,'fecha'=>$publicacion[$i]->fechapubli);
        }

        //$datos=$this->convert_from_latin1_to_utf8_recursively($datos);
        return response()->json(['listanoticias'=>$datos],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function pagina($id)
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web

        $datos=DB::table('pagina')->where(['id_pagina'=>$id,'iddirecciones_web'=>$iddireccionweb])->get();

        $id=$datos[0]->id_pagina;
        $nom_pagina=$datos[0]->nom_pagina;//utf8_decode($datos[0]->nom_pagina);
        $nom_archivophp=$datos[0]->nom_archivophp;
        $cont_pagina=$datos[0]->cont_pagina;//utf8_decode($datos[0]->cont_pagina);
        $fecha_pag=$datos[0]->fecha_pag;
        $activo_pag=$datos[0]->activo_pag;
        $iddirecciones_web=$datos[0]->iddirecciones_web;
        $iduser=$datos[0]->iduser;
        $created_at=$datos[0]->created_at;
        $updated_at=$datos[0]->updated_at;

        //$datos=array('id'=>$id,'nom_pagina'=>$nom_pagina,'nom_archivophp'=> $nom_archivophp,'cont_pagina'=>$cont_pagina,'fecha_pag'=>$fecha_pag,'activo_pag'=>$activo_pag,'iddirecciones_web'=>$iddirecciones_web,'iduser'=>$iduser,'created_at'=>$created_at,'updated_at'=>$updated_at);

        return response()->json(['pagina'=>$datos],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
    public function enlacerefe()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        

        $ereferencial=DB::table('enlacerefe')->where(['activo_refe'=>1,'iddirecciones_web'=>$portalesweb])->orderBy('idenlacerefe','ASC')->get();

        for($i=0;$i<count($ereferencial);$i++)
        {
            $imagen=substr($ereferencial[$i]->img_refe,7);
            $datos[]=array('idref'=>$ereferencial[$i]->idenlacerefe,
                            'entidad_ref'=>$ereferencial[$i]->entidad_ref,
                            'img_refe'=>$imagen,
                            'link_refe'=>$ereferencial[$i]->link_refe,
                            'fecha'=>$ereferencial[$i]->created_at
                        );
        }

        return response()->json(['referenciales'=>$datos],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
    public function secciones()
    {   $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $seccion=DB::table('secciones')->where(['activo'=>1,'iddirecciones_web'=>$portalesweb])->orderBy('seccion_pag','ASC')->orderBy('idseccion','DESC')->get();

        return response()->json(['secciones'=>$seccion],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function allnoticias()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');

        $publicacion=DB::table('noticias')->where(['activo'=>1,'iddirecciones_web'=>$portalesweb])->where('idnoticias','>','6170')->orderBy('idnoticias','DESC')->paginate(8);
        // for($i=0;$i<count($publicacion);$i++)
        // {
        //     //$simplificar=substr($publicacion[$i]->titulo,0,60);
        //     $imagen=substr($publicacion[$i]->img1,7);
        //     $datos[]=array('idnoticias'=>$publicacion[$i]->idnoticias,'titulo'=>$publicacion[$i]->titulo,'contenido'=>$publicacion[$i]->contenido,'img1'=>$imagen,'fecha'=>$publicacion[$i]->fechapubli);
        // }
        return response()->json(['listanoticias'=>$publicacion],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function detnoticias($id)
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');

        $publicacion=DB::table('noticias')->where(['activo'=>1,'iddirecciones_web'=>$portalesweb])->where('idnoticias',$id)->orderBy('idnoticias','DESC')->get();

            $imagen1=substr($publicacion[0]->img1,7);
            $imagen2=substr($publicacion[0]->img2,7);
            $imagen3=substr($publicacion[0]->img3,7);

            $datos[]=array(
                'idnoticias'=>$publicacion[0]->idnoticias,
                'titulo'=>$publicacion[0]->titulo,
                'contenido'=>$publicacion[0]->contenido,
                'img1'=>$imagen1,
                'img2'=>$imagen2,
                'img3'=>$imagen3,
                'fecha'=>$publicacion[0]->fechapubli
            );
     
        return response()->json(['detallenot'=>$datos],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
    public function visitas()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');

        $publicacion=DB::table('regvisita')->where('iddirecciones_web',$portalesweb)->orderBy('idregvisita','DESC')->paginate(10);

        return response()->json(['visitas'=>$publicacion],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE); 
    }

    public function buscarvisita($bus)
    {
        
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');

        $publicacion=DB::table('regvisita')->where('nombre','LIKE','%'.$bus.'%')->where('iddirecciones_web',$portalesweb)->orderBy('idregvisita','DESC')->paginate(200);

        return response()->json(['visitas'=>$publicacion],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE); 

    }

    public function listapopup()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $publicacion=DB::table('popup')->where('activogral',1)->where('iddirecciones_web',$portalesweb)->orderBy('idpopup','DESC')->get();

        return response()->json(['popup'=>$publicacion],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE); 
    }

    public function normatividad($text='',$anio,$siglas,$descripcion,$bus='')
    {
        //reg_status=1 
       
       if(strlen($text)==1 and $anio==0 and strlen($bus)==0){// cuando los tres campos es por defecto sin dato alguno
        $normatividad=DB::connection('bdgorehco')->table('regulation')->where('reg_status',1)->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
       }
       else{
                if(strlen($text)==1 and $anio==0 and strlen($bus)>0)// SOLO PONIENDO EN BUSCAR
                {// SOLO PONIENDO EN BUSCAR
                   if($siglas==1 and  $descripcion==0)
                   {
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where('reg_status',1)->where('reg_title','LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                   if($siglas==0 and  $descripcion==1){
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where('reg_status',1)->where('reg_description','LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                   if($siglas==1 and  $descripcion==1){
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where('reg_status',1)->where('reg_description','LIKE','%'.$bus.'%')->orWhere('reg_title', 'LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                   if($siglas==0 and  $descripcion==0){                    
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where('reg_status',1)->where('reg_description','LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                }
                if(strlen($text)>1 and $anio==0 and strlen($bus)==0){// SOLO POR TIPO DE DOCUMENTO
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text])->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20); 
                }
                if(strlen($text)==1 and $anio>0 and strlen($bus)==0){///  SOLO POR ANIO
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_year'=>$anio])->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20); 
                }

                if(strlen($text)>1 and $anio==0 and strlen($bus)>0){///  SOLO POR TIPO DE DOCUMENTO Y BUSQUEDA
                    //$normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text])->where('reg_title', 'LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                    
                   if($siglas==1 and  $descripcion==0)
                   {
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text])->where('reg_title','LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                   if($siglas==0 and  $descripcion==1){
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text])->where('reg_description','LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                   if($siglas==1 and  $descripcion==1){
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text])->where('reg_description','LIKE','%'.$bus.'%')->orWhere('reg_title', 'LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                   if($siglas==0 and  $descripcion==0){                    
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text])->where('reg_description','LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }

                }
                if(strlen($text)>1 and $anio>0 and strlen($bus)==0){///  SOLO POR TIPO DE DOCUMENTO Y ANIO
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text,'reg_year'=>$anio])->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20); 
                    
                }
                if(strlen($text)>1 and $anio>0 and strlen($bus)>0){///  CUANDO SE BUSCA POR LOS TRES: TIPO DOCUMENTO, ANIO Y BUSQUEDA
                    //$normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text,'reg_year'=>$anio])->where('reg_description','LIKE','%'.$bus.'%')->orWhere('reg_title', 'LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                    if($siglas==1 and  $descripcion==0)
                   {
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text,'reg_year'=>$anio])->where('reg_title','LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                   if($siglas==0 and  $descripcion==1){
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text,'reg_year'=>$anio])->where('reg_description','LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                   if($siglas==1 and  $descripcion==1){
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text,'reg_year'=>$anio])->where('reg_description','LIKE','%'.$bus.'%')->orWhere('reg_title', 'LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                   if($siglas==0 and  $descripcion==0){                    
                    $normatividad=DB::connection('bdgorehco')->table('regulation')->where(['reg_status'=>1,'reg_type'=>$text,'reg_year'=>$anio])->where('reg_description','LIKE','%'.$bus.'%')->orderBy('reg_year','DESC')->orderBy('reg_type','ASC')->orderBy('reg_num','DESC')->paginate(20);
                   }
                    
                }
                
       }
            // $normatividad=DB::connection('bdgorehco')->table('regulation')->where('reg_status',1)->where('reg_description','LIKE','%'.$bus.'%')->orderByRaw('reg_year DESC')->paginate(20);
        $datocapturados=array('tipobus' =>$text ,'tipanio' =>$anio  ); 
        
        $tipodoc=DB::connection('bdgorehco')->table('regulations_tipo')->orderByRaw('tip_description ASC')->distinct('tip_description')->get();
        $array=['normatividad'=>$normatividad,'tipodoc'=>$tipodoc,'datocapturados'=>$datocapturados];
        

        //return response()->json($this->convert_from_latin1_to_utf8_recursively($array));//local
        
        return response()->json($array,200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE);

    }

    public function directorio($dir='')
    {
        if(strlen($dir)!=0){
            $directorio=DB::connection('pgsql')->table('tram_dependencia')->where(['depe_tipo'=>1,'depe_estado'=>1])->where('depe_nombre','LIKE','%'.strtoupper($dir).'%')->orderBy('iddependencia','ASC')->paginate(20); 
        }
        else{
            $directorio=DB::connection('pgsql')->table('tram_dependencia')->where(['depe_tipo'=>1,'depe_estado'=>1])->orderBy('iddependencia','ASC')->paginate(20); 
        }
       
        
        return response()->json(['directorio'=>$directorio],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE); 
        // return view('directorio',compact('directorio'));
    }

    

   public function organigrama()
   {
    return view('organigrama');
   }
   public function unidad($cod)
   {
    $directorio=DB::connection('pgsql')->table('tram_dependencia')->where(['depe_tipo'=>1,'iddependencia'=>$cod])->orderBy('iddependencia','ASC')->get();
    //return view('directorio',compact('directorio'));
    return $directorio;
   }
   public function fag()
   {
        
    //cargados el directorio regional
    $enlace = "http://".request()->server('HTTP_HOST');        
    $iddirweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
    // $listafag=DB::connection('bdgorehco')->table('fag')->orderByRaw('ano DESC')->paginate(12);
    $listafag=DB::table('fag')->where('iddirecciones_web',$iddirweb)->orderByRaw('ano DESC')->paginate(12);
    // return view('fag',compact('listafag'));
    
    //  $publicacion=DB::table('popup')->where('activogral',1)->where('iddirecciones_web',$portalesweb)->orderBy('idpopup','DESC')->get();

        return response()->json(['listafag'=>$listafag],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE); 

   }

   public function slider()
   {
    //cargados el directorio regional
    $enlace = "http://".request()->server('HTTP_HOST'); 
    $iddirweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web'); 
    $slider=DB::table('slider')->where(['iddirecciones_web'=>$iddirweb,'activo_slider'=>1])->orderBy('idslider','DESC')->get();
    return response()->json(['slider'=>$slider],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE); 
   }

   public function tema()
   {   $dnsserver="http://gestionportales.regionhuanuco.gob.pe";

       $enlace = "http://".request()->server('HTTP_HOST');
       $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->get();
       $direccionweb=$portalesweb[0]->iddirecciones_web;//3;// 3: direccion regional de educacion -> este dato se saco del registyro de bd de direcciones_web
       $nombredireccionweb=$portalesweb[0]->nom_direcciones_web;

       $tema=DB::table('tema_portal')->where('iddirecciones_web',$direccionweb)->get();
       
       $tmcolor_tema=$tema[0]->color_tema;
       $tmlogo_tema=$tema[0]->logo_tema;
       $tmtop_email=$tema[0]->top_email;
       $tmtop_fono=$tema[0]->top_fono;
       $tmtop_correocorp=$tema[0]->top_correocorp;
       $tmtop_transparencia=$tema[0]->top_transparencia;
       $tmtop_mesapartesvirtual=$tema[0]->top_mesapartesvirtual;
       $tmfooter_f1=utf8_encode($tema[0]->footer_f1);
       $tmfooter_f2=utf8_encode($tema[0]->footer_f2);
       $tmfooter_f3=utf8_encode($tema[0]->footer_f3);
       $tmredes_sociales=utf8_encode($tema[0]->redes_sociales);
       $linkfacebook=$tema[0]->linkpag_facebook;
       $favicon=$tema[0]->favicon;


       

       $temas=array('tmcolor_tema'=>$tmcolor_tema,'tmlogo_tema'=>$tmlogo_tema,'tmtop_email'=>$tmtop_email,'tmtop_fono'=>$tmtop_fono,'tmtop_correocorp'=>$tmtop_correocorp,'tmtop_transparencia'=>$tmtop_transparencia,'tmtop_mesapartesvirtual'=>$tmtop_mesapartesvirtual,'tmfooter_f1'=>$tmfooter_f1,'tmfooter_f2'=>$tmfooter_f2,'tmfooter_f3'=>$tmfooter_f3,'tmredes_sociales'=>$tmredes_sociales,'tmredes_linkface'=>$linkfacebook,'favicons'=>$favicon,'nombredireccionweb'=>$nombredireccionweb,'dnsserver'=>$dnsserver);

       return  response()->json(['tema'=>$temas],200);

   }


   ////
   public static function convert_from_latin1_to_utf8_recursively($dat)
   {
      if (is_string($dat)) {
         return utf8_encode($dat);
      } elseif (is_array($dat)) {
         $ret = [];
         foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);

         return $ret;
      } elseif (is_object($dat)) {
         foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);

         return $dat;
      } else {
         return $dat;
      }
   }
   
   private function properText($str){
    // $str = mb_convert_encoding($str, "HTML-ENTITIES", "UTF-8");
    // $str = preg_replace('[a-zA-Z áéíóúÁÉÍÓÚñÑ.]',htmlentities('${1}'),$str);
    $str=html_entity_decode($str);
    return($str); 
}

    
}

