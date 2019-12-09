<?php
$usuarisdata = file_get_contents("database.json");
$usuaris = json_decode($usuarisdata,true);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="crearUsuari.php" method="post">
      Nom: <input type="text" name="nom" value="">
      <br>
      Edat: <input type="number" min="5" max="100" name="edat" value="">
      <br>
      Data que vas neixer: <input type="date" name="data" value="">
      <br>
      Contrasenya: <input type="password" name="contra" value="">
      <br>
      <input type="submit" name="submit" value="Crear Conta">
    </form>
    <br>

    <script type="text/javascript">
      hey = <?php echo $usuarisdata ?>
    </script>

    <?php
    echo $_POST["nom"]."<br>";
    echo $_POST["edat"]."<br>";
    echo $_POST["data"]."<br>";
    echo $_POST["contra"]."<br>";

    $usuari = array('nom' => $_POST["nom"], "contra" => $_POST["contra"], "edat" => $_POST["edat"], "data" => $_POST["data"]);
    array_push($usuaris["id"],$usuari);

    if(!($_POST["nom"]==null||$_POST["contra"]==null)){
      file_put_contents("database.json",json_encode($usuaris));
    }
    ?>

  </body>
</html>
