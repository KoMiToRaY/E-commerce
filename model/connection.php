<?php
class Connection{
  private $host;
  private $dbname;
  private $username;
  private $password;

    public function __construct(){
  // les identifiants de connexion sont stockées ici comme attributs de la classe connection
        $this->host = "mysql:dbname = connexionPdo; host = 127.0.0.1";
        $this->dbname = "connexionPdo";
        $this->username = "root";
        $this->password = "";
    }
    public function get_connection(){
  // cette fonction établie une connexion à la BDD à l'aide de l'objet PDO
  // elle retourne l'identifant de la connexion (pointeur)

        try
        {
            $bdd = new PDO($this->host, $this->username, $this->password);
            echo "Succes";
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
       return $bdd;
    }
}
?>