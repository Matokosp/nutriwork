<?php

if(!(empty($_POST["nombre"])) && !(empty($_POST["apellido"])) && !(empty($_POST["empresa"])) && !(empty($_POST["area"])) && !(empty($_POST["mail"]))){
include 'dbconnection.php';
$conn = OpenCon();
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$empresa=$_POST["empresa"];
$area=$_POST["area"];
$mail=$_POST["mail"];

$sql = "INSERT INTO infoCon(nombre,apellido,empresa,area,mail) VALUES ('$nombre','$apellido','$empresa','$area','$mail','$telefono')";

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
    <div class="wrapper">
      <div class="parallax__group">
        <img class="parallax__layer plate-one img-responsive" src="assets/images/plate-1.png" alt="">
        <div class="header_logo">
          <img class="img-responsive" src="assets/images/nutriwork-logo.png" alt="">
        </div>
        <header>
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
            <p>Según la OCDE el <span>74%</span> de la población adulta en Chile sufren sobrepeso u obesidad.</p>
          </div>
          <div class="">
            <img class="target-icon" src="assets/images/target-icon.png" alt="">
            <p>Nuestra meta es <span>mejorar tu salud y calidad de vida</span> mediante una alimentación balanceada.</p>
          </div>
        </section>
      </div>
      <section class="section_three">
        <h2>¿Cómo funciona NutriWork?</h2>
        <div class="how_container">
          <div class="how_item">
            <img src="assets/images/evaluacion.png" alt="">
            <h4>Evaluación nutricional</h4>
            <p>Profesionales de la salud irán a tu oficina y te realizarán una evaluación nutricional completa, detallando un plan alimenticio mensual.</p>
          </div>
          <div class="how_item">
            <img src="assets/images/menu.png" alt="">
            <h4>Elige tu menú diario</h4>
            <p>Podrás elegir tu menú diario de acuerdo a tu plan alimenticio, recomendaciones nutricionales y la oferta del casino de tu lugar de trabajo.</p>
          </div>
          <div class="how_item">
            <img src="assets/images/avance.png" alt="">
            <h4>Comprueba tu avance</h4>
            <p>Periódicamente estaremos evaluando tu avance y estado nutricional para ajustar tu plan alimenticio de ser necesario.</p>
          </div>
        </div>
      </section>
      <section class="form_section" id="form">
        <div class="form_text">
          <h2>¡Quiero <br>
            <span class="yellow">inscribirme</span> <br>
            en NutriWork!
          </h2>
          <p>Si quieres ser parte del programa NutriWork déjanos tus contactos y nos contactaremos contigo a la brevedad. Recuerda que todos los datos ingresados en el formulario serán utilizados solo para efectos del programa NutriWork.
            <br><br>
          Si quieres mayor información nos puedes contactar directamente en nuestro mail <a class="yellow" href="mailto:contacto@nutriwork.cl">contacto@nutriwork.cl</a></p>
        </div>
        <div class="form_container" id="footer">
          <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()"" method="post">
            <input type="text" name="nombre" placeholder="Nombre" value="">
            <input type="text" name="apellido" placeholder="Apellido" value"">
            <select name="empresa">
              <option value="agrosuper">Agrosuper</option>
            </select>
            <input type="text" name="area" placeholder="Área" value="">
            <input type="text" name="mail" placeholder="Mail Corporativo" value="">
            <input type="text" name="telefono" placeholder="Teléfono" value="">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/parallax.js"></script>
    <script type="text/javascript">
      // $('header').parallax({imageSrc: 'assets/images/plate-1.png'});
    </script>
    <script type="text/javascript" src="assets/js/myscript.js"></script>
    <script type="text/javascript" src="assets/js/procesar.js"></script>
  </body>
</html>
