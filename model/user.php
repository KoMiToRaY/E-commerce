<?php
class User {
  private $id;
  private $username;
  private $password;
  private $email;
  private $firstname;
  private $lastname;
  private $sex;
  private $adressfirstline;
  private $postalcode;
  private $city;
  private $country;
  private $bdd;

    public function __construct($pdobuilder){
  // Le constructeur reçoit en argument l'identifiant de la connexion
  // et le transfert à l'attribut $db
        $this->bdd = $pdobuilder->get_connection();
    }
    public function login($username, $password){
  // Cette méthode teste l'existence de l'utilisateur en BdD à l'aide de l'objet PDO
  // Si non trouvé, retourne zéro, sinon le pointeur sur l'enregistrement correspondant
      $log = $this->bdd->query('SELECT * FROM user where username ="'.$username.'" AND password = "'.$password.'";');

      if($log){
        return 0;
      }else {
        return $username;
        echo "hello".$username;
      }
    }
}
?>