<?php
include 'config.php';
 if (!empty($_POST['name']) AND !empty($_POST['date']))
  {
    // echo "string";
    $name = htmlspecialchars($_POST['name']);
    $dates = htmlspecialchars($_POST['date']);
    $reponse = $bdd->prepare("INSERT INTO tasks (name, dates, id_lists, checked, id_project) VALUES (:name, :dates, :id_lists, :checked, :id_project)");
    $reponse->execute([
        "name" => $name,
        "dates" => $dates,
        "id_lists" => $_GET['index'],
        "checked" => 0,
        "id_project" => $_GET['index']
    ]);
    header('Location: lists.php?index=' . $_GET["index"] . '');
}
?>
