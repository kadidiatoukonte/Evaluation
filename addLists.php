<?php
include 'config.php';
 if (!empty($_POST['name']) AND !empty($_POST['date']))
  {
    $name = htmlspecialchars($_POST['name']);
    $dates = htmlspecialchars($_POST['date']);
    $reponse = $bdd->prepare("INSERT INTO tasks (name, dates, id_lists, checked, id_project) VALUES (:name, :dates, :id_lists, :checked, :id_project)");
    $reponse->execute(array(
        "name" => $name,
        "dates" => $dates,
        "id_lists" => $_GET['lists'],
        "checked" => 0,
        "id_project" => $_GET['project']
    ));
    header('Location: lists.php?lists=' . $_GET["lists"] . '&project=' . $_GET["project"] . '');
}
?>
