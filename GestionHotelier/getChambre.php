<?php
    $request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
    $chambreId = $request['dataId'];//define the employee ID
    require '../connection.php';
    require 'chambre.php';


 

    echo json_encode($chambreId);
?>
