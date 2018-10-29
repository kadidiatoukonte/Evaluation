<?php
include 'config.php';
 if (!empty($_POST['name']))
  {
    echo "string";
    $name = htmlspecialchars($_POST['name']);
    $dates = htmlspecialchars($_POST['date']);
    $reponse = $bdd->prepare("INSERT INTO lists (name, id_project) VALUES (:name, :id_project)");
    $reponse->execute([
        "name" => $name,
        "id_project" => $_GET['project']
    ]);
    header('Location: project.php?project=' . $_GET["project"] . '');
}
?>
