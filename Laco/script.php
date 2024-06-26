<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="phpcss.css">
</head>
<body>
  <center>
<div class="back">
<?php

$numero = $_POST['numero'];
  
  echo "<p>Tabuada do $numero</p>";
  for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<p>$numero x $i = $resultado <br></p>";
  }

?>
</div>
  </center>
</body>
</html>
