<?php



$conn = new DB();
$db = new Crud($conn->getInstance());
$service = new Service();
$aziende = $db->getAziende();
$result = $db->getPersone();
$persone = [];
foreach($result as $item):
    array_push($persone, $service->factoryPersona($item));
endforeach;

if(isset($_POST['update'])):
    $result = $db->getPersona($_POST['id']);
    $persona = $service::factoryPersona($result);
endif;





?>
