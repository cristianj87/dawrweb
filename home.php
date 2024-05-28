<!--intenta iniciar la sesión, si no esta iniciada me devuelve a index.html-->
<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "<script>
                alert('¡Inicia sesión!');
                window.location= 'sesion.html'
                </script>";
  
  exit(0);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="formu.css">
    <link rel="stylesheet" href="sliders.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/web.png" sizes="32x32">
    <title>Home</title>
</head>
<body>
    



        <nav>
        <h1>Techtiworld.com</h1>
        <ul>
            <li><a href="home.php">Inicio</a></li>
            <li><a href="contacto.php">Contáctanos</a></li>
            <li><a href="cerrarsesion.php">Salir</a></li>
            
        </ul>
    </nav>

       
    <section class="forms-section">
    <h1 class="section-title">Bienvenido <strong><?php echo $_SESSION['usuario']; ?></strong></h1>
  </section>
    <div id="page">
        <div class="wrapper">
          <div class="before">
            <img class="content-image" src="https://farm2.staticflickr.com/1638/26145024230_06acd55d1b_b.jpg" draggable="false" />
          </div>
          <div class="after">
            <img class="content-image" src="https://farm2.staticflickr.com/1663/25814974803_d4c55ff708_b.jpg" draggable="false" />
          </div>
          <div class="scroller">
            <svg class="scroller__thumb" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
              <polygon points="0 50 37 68 37 32 0 50" style="fill:#fff" />
              <polygon points="100 50 64 32 64 68 100 50" style="fill:#fff" />
            </svg>
          </div>
        </div>
      </div>
      <script src="slide.js"></script>
</body>
</html>