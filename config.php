<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=evaluation;charset=utf8', 'root', 'aoua1993');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

?>
