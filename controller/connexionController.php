<?php
include './model/connection.php';
include './model/user.php';
include './view/defaut.php';
class connexionController {

    public function __construct(){
      $this->pdobuilder = new Connection();
      $this->user = new User($this->pdobuilder);
    }

    public function login(){
      $page = "login";
      require("./view/defaut.php");
    }

    public function doLogin(){
      if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $res = $this->user->login($username, $password);

        if($res === 0){
        $error = "Wrong Login or password";
        $page = "login";
        } else{
            $_SESSION["user"] = $res[0];
            header('Location: index.php');
        }
      }
    }

/*  function __construct(){
    $this->connexion();
  }

  function connexion(){

    $co = new Connection();

    $user = new User($co);
    $user->login('toto', 'azerty');
    var_dump($user);
  }*/
}
?>