<?php
require('config.php');
$takeid = $_GET['lists'];
$reponse = $bdd->prepare("DELETE FROM lists WHERE id=$takeid");
$reponse->execute();
header('Location: project.php?project=' . $_GET["project"] . '');
?>
