


<?php







// chargement de la page choisie ou du home par défaut dans la variable $content, qui elle-même sera appellée dans le default.php, required plus bas



ob_start();

if(isset($_GET['p'])){

$p = htmlspecialchars($_GET['p']);

}else{

$p = 'home';

}

require '../pages/'.$p.'.php';

$content = ob_get_clean();


require '../pages/default.php';


?>
