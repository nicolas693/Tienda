<!--@extends('layouts.app')
@section('title','Lista de Docentes')
@section('content')-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ asset('css/custom1.css') }}" rel="stylesheet" type="text/css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



    </head>
    <body class="centrarFondo">
      <div class="divP " >
        <div class="panel panel-default panelMargen" style="overflow:scroll;">
          <div class="panel-heading">

          </div>
          <div class="panel-body">
            <table class="table stripe compact">
              <thead>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Talla</th>
                <th>Color</th>
                <th>Fotos</th>
              </thead>
              <tbody>
                @foreach($prendas as $prenda)
                <tr>
                  <td>{{$prenda->tipo}}</td>
                  <td>{{$prenda->marca}}</td>
                  <td>{{$prenda->talla}}</td>
                  <td>{{$prenda->color}}</td>
                  <td><a href="#" class="btn btn-success" role="button">Link Button</a></td>
                  <td>
                        <?php $key = array_search($prenda->Prenda_id, $imagenes);?>
                         <img src="{{URL::asset('/uploads/'.$key)}}" alt="profile Pic" height="200" width="200">
                        <div class="col-md-6 col-md-offset-3">
                            <img src="{{ URL::to('/') }}.'/uploads/'.$key" alt="" class="img-responsive">
                        </div>



                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>

        </div>

      </div>
      </div>
    </body>
</html>
<!--@endsection-->
