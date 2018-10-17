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

  <?php

  $req = $bdd->prepare('SELECT * FROM project WHERE id = :idproject');
  $req->execute(array(
    'idproject' => $_GET['index']
  ));
  $req = $req->fetchAll();
  foreach ($req as $key => $value) {?>
  <div class="container">
    <h1 class="text-center">Project: <?php echo $value['name'] ?></h1>
    <h2 class="text-center">Date: <?php echo $value['project_date'] ?></h2>
    <h2 class="text-center">Description: <?php echo $value['description'] ?></h2>
    <?php } ?>
    <div class="row col-12 m-0 p-0">
      <?php $request = $bdd->prepare('SELECT * FROM lists WHERE id_project = :idproject');
      $request->execute(array(
        'idproject' => $_GET['index']
      ));
      $request = $request->fetchAll();
      foreach ($request as $key => $value) {?>
    <div class="card text-center col-5 mx-auto mt-2" style="width: 18rem;">
      <div class="card-body">
       <h3 class="card-title"><?php echo $value['name'] ?></h3>

       <a href="lists.php?index=<?php echo $value['id'] ?>" class="btn btn-success">More details</a><br>
        <form class="mt-2" action="delete_project.php?index=<?php echo $value['id']; ?>" method="post">
          <input class="btn btn-danger" type="submit" name="Delete" value="Delete">
        </form>
     </div>
    </div>
<?php } ?>
    </div>
    <form class="mt-5 text-center" action="add_project.php?index=<?php echo $value['id']; ?>" method="post">
      <input class="btn btn-success" type="submit" name="Add" value="Add">
    </form>
    <!-- <form class="mt-2 text-center" action="delete_project.php?index=<?php echo $value['id']; ?>" method="post"> -->
      <!-- <input class="btn btn-danger" type="submit" name="Delete" value="Delete">
    </form> -->

  </div>
</body>
</html>
