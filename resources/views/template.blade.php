<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gbobierno Regional Huánuco</title>

  {{-- <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css"> --}}
  <script src="https://cdn.jsdelivr.net/npm/leaflet@1.8.0/dist/leaflet-src.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.8.0/dist/leaflet.css">
  <link rel='stylesheet' href="{{ mix('css/app.css') }}" />
<style>
    @charset "UTF-8";

/* Tamaño del scroll */
body::-webkit-scrollbar {
 width: 8px;
}

/* Estilos barra (thumb) de scroll */
body::-webkit-scrollbar-thumb {
 background: #0044a2;
 border-radius: 4px;
}

body::-webkit-scrollbar-thumb:active {
 background-color: #999999;
}

body::-webkit-scrollbar-thumb:hover {
 background: #404148;
 box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
}

/* Estilos track de scroll */
body::-webkit-scrollbar-track {
 /* background: #e1e1e1; */
 border-radius: 4px;
}

body::-webkit-scrollbar-track:hover, 
body::-webkit-scrollbar-track:active {
 background: #d4d4d4;
}

</style>

</head>
<body class="layout-top-nav layout-navbar-fixed text-sm">
  <div class="wrapper" id="app">
  
    <App ruta="{{ route('baseruta') }}" tema="{{route('tema')}}">
        @yield('content')
    </App>
  


  

  </div>

<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>