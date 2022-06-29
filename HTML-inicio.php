<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Jeta de Agua</title>
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/font-awesome/css/fontawesome.min.css">
<script src="https://kit.fontawesome.com/ae476a70d2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
<!-- MENU DE NAVEGACION -->
        <nav class="topnav">
            <div class="Logo">
                <a href="#"><img src="img/Logo.png" alt="logo"></a>
            </div>
            <div class="menu">
                <ul class="item">
                    <li class="elemento"><a href="#">Inicio</a></li>
                    <li class="elemento"><a href="#">Video</a></li>
                    <li class="elemento"><a href="#">Fotografía</a></li>
                    <li class="elemento"><a href="#">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
 <!-- Slideshow container -->
 <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <video src="img/Video/Video3.mp4" autoplay muted loop></video>
      <div class="text">Futbol Sin Censura</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <video src="img/Video/Video2.mp4" autoplay muted loop></video>
      <div class="text">Hogar de la Esperanza</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <video src="img/Video/Video1.mp4" autoplay muted loop></video>
      <div class="text">Altamira</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">4 / 3</div>
        <video src="img/Video/Video4.mp4" autoplay muted loop></video>
        <div class="text">La Estefana</div>
      </div>

  
    <!-- Next and previous buttons
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
  </div>
  <br>
  
  <!-- COLUMNAS -->
<section class="Servicios">
  <div class="row">
    <div class="column">
      <i class="fa-solid fa-video"></i>
        <h1 class="column-title">Video</h1>
        <p class="column-text">Producimos videos de alta calidad para que su empresa y evento tengan el mejor recuerdo. Desde audio, iluminación y tomas áeras, todo al servicio del cliente</p>
        <li class="btn">
          <a href="#">Ver más</a>
        </li>
    </div>
    <div class="column">
      <i class="fa-solid fa-camera-retro"></i>
        <h1 class="column-title">Foto</h1>
        <p class="column-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos maxime optio eaque incidunt assumenda tenetur aliquid reprehenderit praesentium aut omnis?</p>
        <li class="btn">
          <a href="#">Ver más</a>
        </li>
    </div>
    <div class="column">
      <i class="fa-solid fa-camera-retro"></i>
        <h1 class="column-title">Drone</h1>
        <p class="column-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos maxime optio eaque incidunt assumenda tenetur aliquid reprehenderit praesentium aut omnis?</p>
        <li class="btn">
          <a href="#">Ver más</a>
        </li>
    </div>  
  </div>
    
</section>

<!-- SECCION Contacto -->
<section class="contacto">
  <div class="contact-row">
<div class="contact-column left">
      <h3 class="form-sub">Hablemos</h3>
      <h2 class="form-titulo">Contactanos</h2>
      
    <form action="action_page.php">           
        <label for="fname">First Name</label>
        <input type="text" id="fname" placeholder="Your Name">

        <label for="fname">Last Name</label>
        <input type="text" id="lname" placeholder="Last Name">

        <label for="fname">City</label>
        <select id="city" name="City" placeholder="City">
          <option value="San José">San José</option>
          <option value="Alajuela">Alajuela</option>
          <option value="Cartago">Cartago</option>
        </select>  

        <label for="subject">Subject</label>
        <textarea id="subject" name="Subject" placeholder="Write something.." style="height: 200px" ></textarea>
      
        <input type="submit" value="Submit">
      </form>
</div>

<div class="contact-column middle">
      <img src="img/playa1.jpg" alt="" class="img-contact">
</div>

<div class="contact-column right">
      <div class="info-columna">
        <i class="fa-brands fa-whatsapp-square"></i>
        <h1>Teléfono</h1>
        <p>2276-5551</p></div>
      <div class="info-columna">
        <i class="fa-solid fa-envelope"></i>
        <h1>Email</h1>
        <p>info@jetadeagua.com</p></div>
      <div class="info-columna">
        <i class="fa-solid fa-location-dot"></i>
        <h1>Dirección</h1>
        <p>Tirrases, Curridabat. <br> San José. Costa Rica </p></div>
        
  </div>
  </div>

</section>




    
</section>

<script src="java/js-jetadeagua.js"></script>
</body>
</html>

