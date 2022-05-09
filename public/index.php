<?php
include __DIR__ . '/../asset/envirnoment.php';
include __DIR__ . '/../service/service.php';
include __DIR__ . '/../db/db.php';
include __DIR__ . '/../db/crud.php';



$conn = new DB();
$db = new Crud($conn->getInstance());
$request = $_SERVER['REQUEST_METHOD'];
$service = new Service();
$service::componentLoader('header');
$service::componentLoader('menu');
switch($request){
    case 'GET':{
        $uri = $_SERVER['REQUEST_URI'];
        switch($uri){
            case '/temp04/public/':{$service::templateLoader('home');}break;
            case '/temp04/public/index.php':{$service::templateLoader('home');}break;
            case '/temp04/public/index.php/first':{$service::templateLoader('first');}break;
        }
    }break;
    case 'POST':{
        if(isset($_POST['insertPersona'])):
                $persona = $service::factoryPersona($_POST);
                if($db->insertPersona($persona)==true):
                    $service::templateLoader('home');
                endif;
        endif;
        if(isset($_POST['updatePersona'])):
            $persona = $service::factoryPersona($_POST);
            if($db->updatePersona($persona)==true):
                $service::templateLoader('home');
            endif;
        endif;
        if(isset($_POST['update'])):
            $service::templateLoader('home');

        endif;
        if(isset($_POST['delete'])):
            $id = $_POST['id'];
            if($db->deletePersona($id)==true):
                $service::templateLoader('home');
            endif;
        endif;
    }break;
}


$service::componentLoader('footer');
?>
