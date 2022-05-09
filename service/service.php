<?php
include __DIR__ . '/../model/persona.php';
class Service{


    function __construct(){}
    static function templateLoader(string $param){
        return include __DIR__ . '/../template/'.$param.'.html.php';

    }

    static function componentLoader(string $param){
        return include __DIR__ . '/../shared/'.$param.'.component.php';
    }

    static function factoryPersona(array $param){
        isset($param['idAzienda'])? $idAzienda = $param['idAzienda'] : $idAzienda = $param['aziendaIdFK'];
        isset($param['personaId'])? $id = $param['personaId'] : $id = '';
        return new Persona($param['name'],$param['surname'],$param['nato'],$idAzienda,$id );
    }
}




?>
