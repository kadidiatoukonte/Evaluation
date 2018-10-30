<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>To Do List</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include("config.php");?>

</head>
<body>
  <?php require("links.php"); ?>
  <?php require("header.php"); ?>

  <?php $req = $bdd->prepare('SELECT * FROM tasks WHERE id_lists = :idproject');
  $req->execute(array(
    'idproject' => $_GET['lists']
  ));
  $req = $req->fetchAll();
  foreach ($req as $key => $value) {?>
  <div class="container">
    <h1 class="text-center">List: <?php echo $value['name'] ?></h1>
    <div class="card" style="width: 18rem;">
      <form class="" action="add_lists.php<?php echo $value['id'] ?>&lists=<?php echo $_GET['lists'] ?>" method="post">
        <?php if ($value['checked'] == 0) { ?>
        <div id="const" onclick="ouvrirFermerSpoiler(this);">

           <input class="checkbox0" type="checkbox" name="" value="">
           <?php echo $value['name']; ?>

      </div>
      <?php } elseif ($value['checked'] == 1) { ?>
        <div id="const" onclick="ouvrirFermerSpoiler(this);">

           <input class="checkbox1" type="checkbox" name="" value="" checked>
           <?php echo $value['name']; ?>

      </div>
      <?php } ?>
      </form>
      <form action="delete_list.php?tasks=<?php echo $value['id']; ?>&lists=<?php echo $_GET['lists']?>" method="post">
        <input class="mt-5 btn btn-danger" type="submit" name="Delete" value="Delete">
      </form>
    <?php } ?>
    </div>
    <form  action="add_lists.php?lists=<?php echo $_GET['lists'] ?>&project=<?php echo $_GET['project'] ?>" method="post">
      <input class="mt-2 btn btn-success" type="submit" name="Add" value="Add">
    </form>
  </div>
  <script src="js/main.js"></script>
</body>
</html>
