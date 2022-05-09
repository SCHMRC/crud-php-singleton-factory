<?php

class Db{
    private static $instance;

    function __construct(){}


    function getInstance(){
        if(empty(self::$instance)):
            try{
                $uri = 'mysql:host=localhost:3306;dbname=TEST';
                $username = 'root';
                $password = 'root';
                self::$instance = new PDO($uri,$username, $password);
                header('Connection: Successful!');
                return self::$instance;
            }catch(PDOException $error){
                header('Error:'. $error->getMessage());
                header('code-error:'. $error->getCode());
            };
        endif;
        return self::$instance;
    }
}


?>
