<!--@extends('layouts.app')
@section('title','Lista de Docentes')
@section('content')-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



    </head>
    <body class="centrarFondo">
      <div class="divP">
        <div class="panels">
          <div class="panel panel1">

            <p>Ingresar Prenda</p>
            <!--<a <button href="{{route('Prenda.create')}}" type="button" id= 'Eliminar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-danger" style ="margin-left: 20px" >Eliminar</button></a>-->

          </div>
          <div class="panel panel2">
            <p>Ver Prendas</p>

          </div>
          <div class="panel panel3">

            <p>Accion 3</p>
          </div>
          <div class="panel panel4">

            <p>Accion 4</p>
          </div>
          <div class="panel panel5">

            <p>Accion 5</p>
          </div>
        </div>

      </div>




      <script>
      function sleep (time) {
        return new Promise((resolve) => setTimeout(resolve, time));
      }
        const panels=document.querySelectorAll('.panel'); //obtener todos los paneles
        console.log(panels);

        function toggleOpen(p){//inserta la clase .open al panel
          this.classList.toggle('open');
          const cl=this.classList;
          sleep(1000).then(() => {
              if(cl[1]=== 'panel1'){
                window.location.href = '/Prenda/create';
              }

              if(cl[1]=== 'panel2'){
                window.location.href = '/verPrendas';
              }

          })
        }

        panels.forEach(panel => panel.addEventListener('click',toggleOpen));//al hacer click sobre panel llama a la funcion toggleOpen




      </script>
    </body>
</html>
<!--@endsection-->
