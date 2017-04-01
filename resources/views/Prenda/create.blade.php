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
      <div class="divP">
        {!!Form::open(['route'=>'Prenda.store','method'=>'POST','files'=>true])!!}


        <div class="panel panel-default panelMargen">

          <div class="panel-body">

            <div class="col-sm-6" style="margin-top:4%;">
                <div class="form-group col-sm-12">
                    {!!form::label('Marca')!!}
                    {!!form::text('marca',null,['id'=>'marca','class'=>'form-control'])!!}
               </div>
                <div class="form-group col-sm-12">
                    {!!form::label('Talla')!!}
                    {!!form::text('talla',null,['id'=>'talla','class'=>'form-control'])!!}
               </div>
               <div class="form-group col-sm-12">
                   {!!form::label('Color')!!}
                   {!!form::text('color',null,['id'=>'color','class'=>'form-control'])!!}
              </div>
              <div class="form-group col-sm-12">
                {!!form::submit('Ingresar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Ingresar</span>','class'=>'btn btn-success botonMargen '])!!}
             </div>

            </div>

            <div class="col-sm-6" style="margin-top:4%;">

              <div class="form-group col-sm-12">
                  {!!form::label('Imagen')!!}
                  <input type="file" name="image" id="image">
             </div>

             <div class="form-group col-sm-12 imageB">
                <h1>aaa</h1>
            </div>


            </div>

          </div>

        </div>






        {!!Form::close()!!}
      </div>






      </div>
    </body>
</html>
<!--@endsection-->
