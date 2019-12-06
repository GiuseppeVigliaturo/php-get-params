<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-goal</title>
    <link rel="stylesheet" href="style.css">
    <?php
    $password = $_GET["password"];


   ?>
  </head>
  <body>

    <!-- GOAL: Stampare una stringa verde se la
    variabile password passata in GET è
    uguale a "Boolean", altrimenti stampare
    una stringa rossa -->
  <?php
  if ($password == "Boolean") {
    echo "<p class = green>".'Password corretta'."</p>";
  }else {
    echo "<p class = red>".'Password errata'."</p>";
  }

   ?>






  </body>
</html>
