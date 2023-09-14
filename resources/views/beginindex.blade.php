@extends('layouts.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
<style>
body { background-image: url('/images/Fondo Nurse001.jpg');
  font-family: 'Roboto', Helvetica, sans-serif;
  background-size: cover;}

  h1{position:absolute;
    padding: 70px 250px;
    text-align: center;
  }
  p{position:absolute;
    padding: 150px 560px;
    text-align: center;
    margin-left: -330px;
  }
</style>
<body>
    <h1>Bienvenido a SoftwareClinic</h1>
</body>
  
  
    
 @endsection
@section('script')
        <script src="{{ URL::asset('assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/jquery.sales_dashboard.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
