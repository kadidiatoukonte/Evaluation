<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>To Do List</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include("links.php");?>
  <?php include("config.php");?>

</head>
<body>
  <?php require("header.php"); ?>
  <?php include("post.php"); ?>

  <?php $req = $bdd->prepare('SELECT * FROM tasks WHERE id = :idlists');
  $req->execute(array(
    'idlists' => $_GET['index']
  ));
  $req = $req->fetchAll();
  foreach ($req as $key => $value) {?>
  <div class="container">
    <h1 class="text-center">Task:<?php echo $value['name'] ?></h1>
  <?php } ?>
    <div class="card" style="width: 18rem;">
      <form class="" action="index.php" method="post">
        <input type="checkbox" name="" value="">
      </form>
    </div>
    <form action="index.php" method="post">
      <input class="mt-5 btn btn-danger" type="submit" name="Delete" value="Delete">
    </form>
    <form  action="index.php" method="post">
      <input class="mt-2 btn btn-success" type="submit" name="Add" value="Add">
    </form>
  </div>
</body>
</html>
