<?php
$h = file_get_contents("hola.txt");
$jsondata = file_get_contents("hola.json");
$json = json_decode($jsondata);
echo $h;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      Nom: <input type="text" name="nom" value="">
      <br>
      Cognom: <input type="text" name="cognom" value="">
      <br><br>
      <input type="submit" name="submit" value="fet">
    </form>
    <br>
    <br>
    Nom: <?php echo $_POST["nom"] ?>
    <br>
    Cognom: <?php echo $_POST["cognom"] ?>
    <?php
    file_put_contents("hola.json", '{ "nom":"'.$_POST["nom"].'", "cognom": "'.$_POST["cognom"].'" }');
    ?>

    <script type="text/javascript">
      i = <?php  echo $jsondata ?>
    </script>
  </body>
</html>
