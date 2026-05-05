<?php
# Links do redirect
@define("URL_DATABASE", "http://localhost/comunidade-devjr/comunidade-devjunior/database/db.php");
@define("URL_BASE", "http://localhost/comunidade-devjr/comunidade-devjunior/");
@define("URL_REGISTER", URL_BASE . "register.php");
@define("URL_LOGIN", URL_BASE . "login.php");
@define("URL_LOGOUT", URL_BASE ."logout.php");
@define("PROJECT_NAME", "#Comunidade DevJunior");

# Database configuration
@define('DB_HOST', 'localhost');
@define('DB_NAME', 'comunidade_devjr');
@define('DB_ROOT','root');
@define('DB_PASS','');

try{
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_ROOT, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } 
    catch (PDOException $e) {
        echo "". $e->getMessage();
}
        
?>