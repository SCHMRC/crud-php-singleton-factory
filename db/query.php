<?php

class Query{
    static public $insertPersona = 'INSERT INTO Persona(name,surname,nato,aziendaIdFK) VALUES(:name,:surname,:nato,:aziendaIdFK)';
    static public $getPersona = 'SELECT personaId,name,surname,nato,aziendaIdFK FROM persona WHERE personaId = ';
    static public $updatePersona = 'UPDATE Persona SET name = :name, surname = :surname, nato = :nato, aziendaIdFK = :aziendaIdFK WHERE personaId = :personaId';
    static public $delete = 'DELETE FROM Pesrona WHERE ...';
    static public $getAziende = 'SELECT idAzienda, nome FROM azienda';
    static public $getPersone = 'SELECT personaId,name,surname,nato,aziendaIdFK FROM persona';
    static public $deletePersona = 'DELETE FROM Persona WHERE personaId = :personaId';


    function __construct(){}


}


?>
