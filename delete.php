<?php
require('config.php');
$takeid = $_GET['index'];
$reponse = $bdd->prepare("DELETE FROM project WHERE id=$takeid");
$reponse->execute();
header('location: index.php');

?>
