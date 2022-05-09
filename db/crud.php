<?php
include __DIR__ . '/query.php';
class Crud{
    private PDO $pdo;
    private Query $query;



    function __construct(PDO $pdo){
        $this->pdo = $pdo;
        $this->query = new Query();
    }

    function updatePersona(Persona $persona){
        $stm = $this->pdo->prepare($this->query::$updatePersona);
        $stm->bindValue(':name',$persona->getNome());
        $stm->bindValue(':surname',$persona->getCognome());
        $stm->bindValue(':nato',$persona->getNato());
        $stm->bindValue(':aziendaIdFK',$persona->getAzienda());
        $stm->bindValue(':personaId',$persona->getId());
        return $stm->execute();
    }

    function insertPersona(Persona $persona){
        $stm = $this->pdo->prepare($this->query::$insertPersona);
        $stm->bindValue(':name',$persona->getNome());
        $stm->bindValue(':surname',$persona->getCognome());
        $stm->bindValue(':nato',$persona->getNato());
        $stm->bindValue(':aziendaIdFK',$persona->getAzienda());
        return $stm->execute();
    }

    function deletePersona($id){
        $stm = $this->pdo->prepare($this->query::$deletePersona);
        $stm->bindValue(':personaId',$id);
        return $stm->execute();
    }

    function getAziende(){
        $res = $this->pdo->query($this->query::$getAziende);
        while($temp = $res->fetch()){
            $result[] = $temp;
        }
        return $result;
    }
    function getPersone(){
        $res = $this->pdo->query($this->query::$getPersone);
        while($temp = $res->fetch()){
            $result[] = $temp;
        }
        return $result;
    }
    function getPersona($id){
        $res = $this->pdo->query($this->query::$getPersona . $id);
        while($temp = $res->fetch()){
            $result[] = $temp;
        }
        return $result[0];
    }
}





?>
