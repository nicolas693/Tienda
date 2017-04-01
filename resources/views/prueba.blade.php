<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Prueba</title>
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
</head>
<body>



  <div class="panels">
    <div class="panel panel1">
      <p>Hey</p>
      <p>Let's</p>
      <p>Dance</p>
    </div>
    <div class="panel panel2">
      <p>Give</p>
      <p>Take</p>
      <p>Receive</p>
    </div>
    <div class="panel panel3">
      <p>Experience</p>
      <p>It</p>
      <p>Today</p>
    </div>
    <div class="panel panel4">
      <p>Give</p>
      <p>All</p>
      <p>You can</p>
    </div>
    <div class="panel panel5">
      <p>Life</p>
      <p>In</p>
      <p>Motion</p>
    </div>
  </div>

  <script>
  function sleep (time) {
    return new Promise((resolve) => setTimeout(resolve, time));
  }
    const panels=document.querySelectorAll('.panel'); //obtener todos los paneles

    function toggleOpen(){//inserta la clase .open al panel
      this.classList.toggle('open');
      sleep(1000).then(() => {
        window.location.href = "route('Prenda.create')";
      })
    }

    panels.forEach(panel => panel.addEventListener('click',toggleOpen));//al hacer click sobre panel llama a la funcion toggleOpen




  </script>



</body>
</html>
