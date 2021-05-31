<?

use App\Models\{Job,Project,proprojects};

$jobs = Job::all();

$projects = Project::all();

/*$job1 = new Job('PHP DEVELEPERS','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into');
$job1->visible = true;
$job1->meses = 25;

$job2 = new Job('JAVASCRIPT DEVELEPERS','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into');
$job2->visible = true;
$job2->meses = 20;

$job3 = new Job('ARDUINO DEVELEPERS','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into');
$job3->visible = true;
$job3->meses = 18;

$job4 = new Job('SQL DEVELOPERS','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into');
$job4->visible = true;
$job4->meses = 20;


//$project1  = new Project ('Mi proyecto 1', 'Esta es una descripción muy corta del proyecto 1');
//$project1->meses = 18;

$projects = [
    $project1
];*/

$pr1 = new proprojects();
$pr1 -> setProject('Proyecto X');
$pr1 -> description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book';
$pr1 -> img = 'html-5.jpg';

$pr2 = new proprojects();
$pr2 -> setProject('Proyecto XI');
$pr2 -> description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book';
$pr2 -> img = 'php.png';

$pr3 = new proprojects();
$pr3 -> setProject('Proyecto XII');
$pr3 -> description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book';
$pr3 -> img = 'c.png';

$proyectos = [
    $pr1,
    $pr2,
    $pr3
];

    function Myfunction($dato){
        //var_dump($dato); $jobs[$valor]
        echo '<ul class="lista-titulo">';
        echo '<li class="tamaño">' .$dato->title. '</li>';
        echo '</ul>';
        echo '<p class="lista-titulo">' .$dato->description. '</p>';
        echo '<div>';
        echo '<h6 class="lista-titulo">Conocimientos</h6>';
        echo '<ul class="lista-titulo">';
        echo '<li class="lista-titulo">Lorem Ipsum is simply dummy text of the printing and typesettin</li>';
        echo '<li class="lista-titulo">Lorem Ipsum is simply dummy text of the printing and typesettin</li>';
        echo '<li class="lista-titulo">Lorem Ipsum is simply dummy text of the printing and typesettin</li>';
        echo '<li class="lista-titulo">Lorem Ipsum is simply dummy text of the printing and typesettin</li>';
        echo '</ul>';
        echo '<h6 class="lista-titulo">' .'Experiencia: ' .$dato->getConversion(). '</h6>';
        echo '</div>';
    }

    function proyectos($data){
        echo '<div class="row">';
        echo    '<h5>'. $data -> getProject() .'</h5>';
        echo        '<div class="col s2 foto">';
        echo            '<img src="assets/img/'. $data->img .'" alt="persona">';
        echo        '</div>';
        echo        '<div class="col s6 texto-foto">';
        echo        '<p>'. $data->description .'</p>';
        echo       '</div>';   
        echo  '</div>';
    }