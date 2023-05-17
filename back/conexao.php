<?php
class Conexao {
    private static $instance;
    
    public static function getConn(){
        
        if (!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=cliente', 'root', '');

        }
        return self::$instance;
    }
}

/*
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cliente";

try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname='. $dbname, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $err) {
    echo "Houve um erro no banco de dados" . $err->getMessage();
    exit;
}

*/