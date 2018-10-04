<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>To Do List</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include("links.php");?>
</head>
<?php include("config.php");?>
<body>
<?php require("header.php"); ?>

  <div class="container">
    <h1 class="text-center">TO DO LIST</h1>
  <?php
  $req = $bdd->prepare('SELECT * FROM project ORDER BY id DESC');
  $req->execute();
  ?>
    <div class="row col-12 p-0 m-0">
  <?php
  foreach ($req as $key => $value) {?>
      <div class="listCard mt-3 border border-dark col-12 col-md-5 mx-auto">
        <a href="project.php?index=<?php echo $value['id']; ?>">
          <div class="col-12 p-0 m-0">
            <p class="cardTitle text-center pt-2 blackText"><?php echo $value['name']; ?></p>
            <p class="cardPrice text-center pb-2 mb-0 mt-2 blackText"><?php echo $value['project_date'];?></p>
            <p class="cardPrice text-center pb-2 mb-0 mt-2 blackText"><?php echo $value['description'];?></p>
          </div>
        </a>
        <form  class="mb-2 text-center" action="delete.php?index=<?php echo $value['id']; ?>" method="post">
          <input class="btn btn-danger" type="submit" name="Delete" value="Delete">
        </form>
      </div>
<?php } ?>
      <form class="col-12 mt-5 text-center" action="forms_index.php" method="post">
        <input class="btn btn-success" type="submit" name="Add" value="Add">
      </form>
    </div>
  </div>
  <?php require('scripts.php') ?>
</body>
</html>
