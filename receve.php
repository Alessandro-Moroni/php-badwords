<?php
$parola = $_POST["parola"];
$paragrafo = $_POST["paragrafo"];

$censura = str_replace($parola, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h1>Parola: <?php echo $parola ?></h1>
<h1>Paragrafo: <?php echo $paragrafo ?></h1>
<h1>Testo censurato: <?php echo $censura ?></h1>

<h1>Il paragrafo è lungo: <?php echo strlen($paragrafo)  ?></h1>
<h1>Il testo censurato è lungo: <?php echo strlen($censura)  ?></h1>


</body>
</html>