<?php
require('config.php');
$takeid = $_GET['tasks'];
$reponse = $bdd->prepare("DELETE FROM tasks WHERE id=$takeid");
$reponse->execute();
header('location: lists.php?lists=' . $_GET["lists"] . '');
?>
