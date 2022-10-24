<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class procompite extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provincia()
    {
        $prov=DB::connection('bdgorehco')->table('ubprovincia')->where('idDepa',10)->orderBy('idProv','ASC')->get();
        return response()->json(['prov'=>$prov]);
    }

    public function distrito($id)
    {
        $dist=DB::connection('bdgorehco')->table('ubdistrito')->where('idProv',$id)->orderBy('distrito','ASC')->get();
        return response()->json(['dist'=>$dist]);
    }

    public function cadenaspro($id)
    {
        $cad=DB::connection('bdgorehco')->table('cadenaproductiva')->where(['idprov'=>$id,'activo'=>1])->orderBy('cadena_productiva','ASC')->get();
        return response()->json(['cad'=>$cad]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addprocompite(Request $request)
    {
        //
        $fecha=date('Y-m-d H:i:s');
        $validacion=$request->validate([
            'numdoc'=>'required',
            'nombresyape'=>'required',
            'idprovincia'=>'required',
            'distrito'=>'required',
            'direccion'=>'required',
            'titulo'=>'required',
            'cadena'=>'required',
            'dnicto'=>'required',
            'nomcto'=>'required',
            'cel'=>'required',
            'correo'=>'required',
            'categoria'=>'required'
        ]);
            $datos=[
                'ruc'=>$request->numdoc,
                'razonsocial'=>strtoupper($request->nombresyape),
                'provincias'=>$request->idprovincia,
                'distrito'=>strtoupper($request->distrito),
                'direccion'=>strtoupper($request->direccion),
                'titulopropuesta'=>strtoupper($request->titulo),
                'cadena_productiva'=>strtoupper($request->cadena),
                'dni'=>$request->dnicto,
                'nombresyape'=>strtoupper($request->nomcto),
                'tel_fijo'=>$request->fijo,
                'tel_cel'=>$request->cel,
                'email'=>$request->correo,
                'fecha'=>$fecha,
                'categoria'=>$request->categoria,
                'activo'=>1
            ];
            $id = DB::connection('bdgorehco')->table('regprocompite')->insertGetId(
                $datos,'idinscrip'
            );
        return $id;
    }
    public function regprocompite($ruc)
    {
        $datos=DB::connection('bdgorehco')->table('regprocompite')->where(['ruc'=>$ruc,'activo'=>1])->get();
      
       return response()->json(['datosproc'=>$datos]);
    }
    public function rotulo($id)
    {
        $datos=DB::connection('bdgorehco')->table('regprocompite')->join('ubprovincia','regprocompite.provincias','=','ubprovincia.idprov')->where('idinscrip',$id)->get();
        // return view('cargopfocompite',compact('datos'));

        //$today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('cargopfocompite', compact('datos'));
        return $pdf->stream($datos[0]->ruc.'.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
