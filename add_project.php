<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>To Do List</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body style="background: #ce8991; text-align: center">
  <h1 style="text-align: center">ADD LIST</h1>
<form class="" action="addProject.php?project=<?php echo $_GET['project']; ?>" method="post">
  <input type="text" placeholder="Name" name="name" value=""><br>
  <input type="submit" name="" value="Envoyer">
</form>
</body>
</html>
