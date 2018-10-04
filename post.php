<?php include 'config.php'; ?>
<?php
// if (isset($_POST['Delete'])) {
// $Delete = $_POST['Delete'];
// $id = $_POST['id'];
// if(!empty($Delete)){
//   $reponse = $bdd->prepare('DELETE FROM project WHERE id = :id');
//   $reponse->execute([
//     "id" => $id
//   ]);
// }
// // header('Location: index.php');
// } and isset($_POST['date']) and isset($_POST['description'])
 // and !empty($date) and !empty($description)
 // , date, description
 // , :date, :description
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

// else{
//    echo "Erreur";
//   }
?>
