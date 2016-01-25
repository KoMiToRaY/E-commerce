<?php
include './controller/connexionController.php';
session_start();

if(isset($_GET) && isset($_GET["ctrl"]) && isset($_GET["action"])){
    $ctrl = $_GET["ctrl"];
    $action = $_GET["action"];
}
else{
    $ctrl = "connexion";
    $action = "home";
}

$ctrl = $ctrl."Controller";
$controller = new $ctrl();
/*$controller->$action();*/

?>

<?php
/*include './controller/connexionController.php';

$controller = new connexionController();*/
?>