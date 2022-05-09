<?php
class Persona{
    private string $nome;
    private string $cognome;
    private string $nato;
    private string $aziendaFK;
    private string $id = '';

    function __construct($nome,$cognome,$nato,$aziendaFK,$id = ''){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->nato = $nato;
        $this->aziendaFK = $aziendaFK;
        $this->id = $id;
    }

    function getNome(){
        return $this->nome;
    }
    function getCognome(){
        return $this->cognome;
    }

    function getNato(){
        return $this->nato;
    }

    function getAzienda(){
        return $this->aziendaFK;
    }

    function getId(){
        return $this->id;
    }





}
?>
