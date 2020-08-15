<?php

if(!(empty($_POST["nombre"])) && !(empty($_POST["apellido"])) && !(empty($_POST["empresa"])) && !(empty($_POST["area"])) && !(empty($_POST["mail"]))){
include 'dbconnection.php';
$conn = OpenCon();
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$empresa=$_POST["empresa"];
$area=$_POST["area"];
$mail=$_POST["mail"];

$sql = "INSERT INTO infoCon(nombre,apellido,empresa,area,mail) VALUES ('$nombre','$apellido','$empresa','$area','$mail')";

if (mysqli_query($conn, $sql)) {
    // $SIPS = "Se te ha añadido con éxito";
    // echo $SIPS;
  } else {
    $SIPS= "Se ha producido un error , intentalo de nuevo";
    echo $SIPS;
  }

  CloseCon($conn);

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NutriWork</title>
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- MY STYLE -->
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- FAVICONS -->
    <link href="assets/ico/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="assets/ico/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="assets/ico/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="assets/ico/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
    <link href="assets/ico/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="assets/ico/icon-hires.png" rel="icon" sizes="192x192" />
    <link href="assets/ico/icon-normal.png" rel="icon" sizes="128x128" />
    <link href="assets/ico/icon.svg" rel="mask-icon" sizes="any" color="#718696">
  </head>
  <body>
    <header>
      <div class="header_logo">
        <img class="img-responsive" src="assets/images/nutriwork-logo.png" alt="">
      </div>
      <img class="plate-one img-responsive" src="assets/images/plate-1.png" alt="">
      <div class="header_text">
        <h2>Alimentate bien </h2>
        <h2><span class="yellow"><span>en tu traba</span>jo</span></h2>
        <h2>con NutriWork</h2>
        <a class="header_link" href="#form">Inscribirme</a>
      </div>
    </header>
    <section class="section_two">
      <div class="">
        <h2>¿Sabías qué?...</h2>
        <p>El <span>42,5%</span> de la alimentación de un adulto promedio se desarrolla en el ambiente de trabajo.</p>
      </div>
      <div class="">
        <img class="target-icon" src="assets/images/target-icon.png" alt="">
        <p>Nuestra meta es <span>mejorar tu salud y calidad de vida</span> mediante una alimentación balanceada.</p>
      </div>
    </section>
    <section class="section_three">
      <h2>¿Cómo funciona NutriWork?</h2>
      <div class="how_container">
        <div class="how_item">
          <img src="assets/images/evaluacion.png" alt="">
          <h4>Evaluación nutricional</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="how_item">
          <img src="assets/images/menu.png" alt="">
          <h4>Elige tu menú diario</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="how_item">
          <img src="assets/images/avance.png" alt="">
          <h4>Comprueba tu avance</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
      </div>
    </section>
    <section class="video_section">
      <img class="img-responsive plate-two" src="assets/images/plate-2.png" alt="">
      <div class="video_container">
        <iframe src="https://www.youtube.com/embed/KtOiXzn4H9I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>
    <section class="form_section">
      <div class="form_text">
        <h2>¡Quiero <br>
          <span class="yellow">inscribirme</span> <br>
          en NutriWork!
        </h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
      </div>
      <div class="form_container">


        <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()"" method="post">
          <input type="text" name="nombre" placeholder="Nombre" value="">
          <input type="text" name="apellido" placeholder="Apellido" value"">
          <select name="empresa">
            <option value="agrosuper">Agrosuper</option>
          </select>
          <input type="text" name="area" placeholder="Área" value="">
          <input type="text" name="mail" placeholder="Mail Corporativo" value="">
          <div class="submit_container">
          <input class="submit" type="submit" value="Inscribirme">
        </div>
        </form>

      </div>
    </section>
    <footer>
      <div class="footer_logos">
        <img class="img-responsive" src="assets/images/logos-footer.png" alt="">
      </div>
      <h3>nutriwork.cl</h3>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/parallax.js"></script>
    <script type="text/javascript">
      // $('header').parallax({imageSrc: 'assets/images/plate-1.png'});
    </script>
    <script type="text/javascript" src="assets/js/myscript.js"></script>
    <script type="text/javascript" src="assets/js/procesar.js"></script>
  </body>
</html>
