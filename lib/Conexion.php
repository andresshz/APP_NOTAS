<?php


class DATABASE{

    private string $host;
    private string $dbname;
    private string $user;
    private string $password;

    function __construct() {
       $this->host = 'localhost';
       $this->dbname = 'app_notas';
       $this->user = 'root';
       $this->password = '';
    }


    public function conection(){
    try{
    $conection = "mysql:host={$this->host};dbname={$this->dbname}";
    $options = [
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_EMULATE_PREPARES => false
    ];
    $pdo = new PDO($conection,$this->user,$this->password,$options);
    return $pdo;
    }catch(PDOException $e){
       throw $e;
    }

    }

}
