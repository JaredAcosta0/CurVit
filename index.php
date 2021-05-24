<?php 
    
    $nombre = "Jared";
    $apellido = 'Acosta';
    $nombreCompleto = $nombre . $apellido;
    $boolean = false;
    //var_dump($nombre);

    require_once('jobs.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>

     <!--////////////// Datos Personales ////////////////////  -->
    <div class="container">
        <div class="row section">
            <div class="col s3 foto">
                <img src="assets/img/j1.jpg" alt="persona">
            </div>
            <div class="col s7 texto-foto">
                <h4><?php echo $nombreCompleto ?></h4>
                <h5>4rregl0 c0mpu5 a dom1c1l10</h5>
                <ul>
                    <li class="lista">Correo: zgomeza@ifp.mx</li>
                    <li class="lista">Telefono: 55-86-17-59-89</li>
                    <li class="lista">Dirección: Esta por aca en el barrio....</li>
                    <li class="lista">Edad: 16 años</li>
                </ul>
            </div>
        </div>         
    </div>

        <!--////////////// Descripción ////////////////////  -->

    <section class="section">
        <div class="container">
            <h4 class="otra-seccion">Descripción</h4>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </section>

        <!--////////////// Experiencia Laboral ////////////////////  -->

    <section class="section">
        <div class="container">
            <h4 class="otra-seccion">Experiencia Laboral</h4>

            <?php 
                $valor = 0;
                $totalMeses = 0;
                for ($valor=0; $valor < count($jobs); $valor++){
                    Myfunction($jobs[$valor]);
                }
            ?>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <h4 class="otra-seccion">Proyectos</h4>
                <?php 
                    $i = 0;
                    for ($i=0; $i < count($projects); $i++){
                        Myfunction($projects[$i]);
                    }
                ?>
            </div>

            <?php
                $i=0;
                for($i=0; $i<count($proyectos); $i++){
                    proyectos($proyectos[$i]);
                }
            ?>
        </div>
    </section>
</body>
</html>