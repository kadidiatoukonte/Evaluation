<?php
require('config.php');
$takeid = $_GET['project'];
$reponse = $bdd->prepare("DELETE FROM project WHERE id=$takeid");
$reponse->execute();
header('location: index.php');
?>
