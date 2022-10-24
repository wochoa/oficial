<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cargo</title>
    <style>
        .titulos{
            font-size: 12px
        }
        .contenido{
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div style="padding: 2px; border:#ccc dashed 1px;">
        <div align="center" style="padding-bottom:5px;">
            <img src="{{asset('/img/logooficial.png')}}" alt="" height="40px">
        </div>
        <table align="center" border="1" cellspacing="0" cellpadding="0" width='100%'>
            <tr>
                <td class="titulos"><b>RUC:</b></td><td class="contenido">{{$datos[0]->ruc}}</td><td class="titulos"><b>RAZON SOCIAL:</b></td ><td colspan="3" class="contenido"> {{$datos[0]->razonsocial}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>PROVINCIA:</b></td><td colspan="2" class="contenido">{{$datos[0]->provincia}}</td><td class="titulos"><b>DISTRITO:</b></td><td colspan="2" class="contenido">{{$datos[0]->distrito}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>DIRECCIÓN:</b></td><td colspan="5" class="contenido"> {{$datos[0]->direccion}}</td>
            </tr>
            <tr>
                <td colspan="6" class="titulos"><b>TÍTULO DE LA PROPUESTA PRODUCTIVA(Plan de negocio):</b></td>
            </tr>
            <tr>
                <td colspan="6" class="contenido">{{$datos[0]->titulopropuesta}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>CADENA PRODUCTIVA:</b></td><td colspan="5" class="contenido"> {{$datos[0]->cadena_productiva}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>CATEGORÍA:</b></td><td colspan="5" class="contenido">{{$datos[0]->categoria}}</td>
            </tr>
            <tr>
                <td colspan="6" class="titulos"><b>PERSONAL DE CONTACTO</b></td>
            </tr>
            <tr>
                <td class="titulos"><b>DNI:</b></td><td class="contenido">{{$datos[0]->dni}}</td><td class="titulos"><b>Nom y Ape.:</b></td><td colspan="3" class="contenido">{{$datos[0]->nombresyape}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>TELÉFONO:</b></td><td class="contenido">{{$datos[0]->tel_fijo}}</td><td class="titulos"><b>CELULAR:</b></td><td class="contenido">{{$datos[0]->tel_cel}}</td><td class="titulos"><b>EMAIL:</b></td><td class="contenido">{{$datos[0]->email}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>FECHA DE INSCRIPCIÓN:</b></td><td colspan="5" class="contenido"> {{$datos[0]->fecha}}</td>
            </tr>
        </table>
        <br >
        
        <div style="border-top:#ccc 1px dashed; padding-top:3px;">
            
            <img src="{{asset('/img/logooficial.png')}}" alt="" height="40px">
        </div>
        
        <div align="center">
            <h4>CARGO</h4>
        </div>
        <table align="center" border="1" cellspacing="0" cellpadding="0" width='100%'>
            <tr>
                <td class="titulos"><b>RUC:</b></td><td class="contenido">{{$datos[0]->ruc}}</td><td class="titulos"><b>RAZON SOCIAL:</b></td ><td colspan="3" class="contenido"> {{$datos[0]->razonsocial}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>PROVINCIA:</b></td><td colspan="2" class="contenido">{{$datos[0]->provincia}}</td><td class="titulos"><b>DISTRITO:</b></td><td colspan="2" class="contenido">{{$datos[0]->distrito}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>DIRECCIÓN:</b></td><td colspan="5" class="contenido"> {{$datos[0]->direccion}}</td>
            </tr>
            <tr>
                <td colspan="6" class="titulos"><b>TÍTULO DE LA PROPUESTA PRODUCTIVA(Plan de negocio):</b></td>
            </tr>
            <tr>
                <td colspan="6" class="contenido">{{$datos[0]->titulopropuesta}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>CADENA PRODUCTIVA:</b></td><td colspan="5" class="contenido"> {{$datos[0]->cadena_productiva}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>CATEGORÍA:</b></td><td colspan="5" class="contenido">{{$datos[0]->categoria}}</td>
            </tr>
            <tr>
                <td colspan="6" class="titulos"><b>PERSONAL DE CONTACTO</b></td>
            </tr>
            <tr>
                <td class="titulos"><b>DNI:</b></td><td class="contenido">{{$datos[0]->dni}}</td><td class="titulos"><b>Nom y Ape.:</b></td><td colspan="3" class="contenido">{{$datos[0]->nombresyape}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>TELÉFONO:</b></td><td class="contenido">{{$datos[0]->tel_fijo}}</td><td class="titulos"><b>CELULAR:</b></td><td class="contenido">{{$datos[0]->tel_cel}}</td><td class="titulos"><b>EMAIL:</b></td><td class="contenido">{{$datos[0]->email}}</td>
            </tr>
            <tr>
                <td class="titulos"><b>FECHA DE INSCRIPCIÓN:</b></td><td colspan="5" class="contenido"> {{$datos[0]->fecha}}</td>
            </tr>
        </table>
    </div>
    
</body>
</html>