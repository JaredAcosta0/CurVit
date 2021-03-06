<?php
    require_once 'vendor/autoload.php';

    use Illuminate\Database\Capsule\Manager as Capsule;
    use App\Models\Project;

    $capsule = new Capsule;
    
    $capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => '127.0.0.1:3306',
        'database'  => 'curvit',
        'username'  => 'root',
        'password'  => 'root',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);

    // Make this Capsule instance available globally via static methods... (optional)
    $capsule->setAsGlobal();

    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $capsule->bootEloquent();

    $nombre = "Jared";
    $apellido = 'Acosta';
    $nombreCompleto = $nombre . $apellido;
    $boolean = false;
    //var_dump($nombre);

    include_once 'jobs.php';
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
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul>
                <li><a href="formulario.php">Formulario Proyectos</a></li>
                <li><a href="formularioDos.php">Formulario XP</a></li>
            </ul>
        </nav>
    </section>

     <!--////////////// Datos Personales ////////////////////  -->
    <div class="container">
        <div class="row section">
            <div class="col s3 foto">
                <img src="..." alt="persona">
            </div>
            <div class="col s7 texto-foto">
                <h4><?php echo $nombreCompleto ?></h4>
                <h5>4rregl0 c0mpu5 a dom1c1l10</h5>
                <ul>
                    <li class="lista">Correo: zgomeza@ifp.mx</li>
                    <li class="lista">Telefono: 55-86-17-59-89</li>
                    <li class="lista">Direcci??n: Esta por aca en el barrio....</li>
                    <li class="lista">Edad: 16 a??os</li>
                </ul>
            </div>
        </div>         
    </div>

        <!--////////////// Descripci??n ////////////////////  -->

    <section class="section">
        <div class="container">
            <h4 class="otra-seccion">Descripci??n</h4>
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