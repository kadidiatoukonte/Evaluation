<?php
require('config.php');
$takeid = $_GET['index'];
$reponse = $bdd->prepare("DELETE FROM lists WHERE id=$takeid");
$reponse->execute();
header('location: project.php');

?>
