<?php
include 'config.php';
if (!empty($_POST['name']) and !empty($_POST['date']) and !empty($_POST['description']))
{
  $name = htmlspecialchars($_POST['name']);
  $project_date = htmlspecialchars($_POST['date']);
  $description = htmlspecialchars($_POST['description']);
    $reponse = $bdd->prepare("INSERT INTO project (name, project_date, description) VALUES (:name, :project_date, :description)");
    $reponse->execute([
        "name" => $name,
        "project_date" => $project_date,
        "description" => $description
  ]);

  header('Location: index.php');
}
  else {
    echo "erreur : données vides";
  }
?>
