<?php
$usuarisdata = file_get_contents("database.json");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div>
      <br>
      Nom: <b id="nom"></b>
      <br>
      Edat: <output id="edat"></output>
      <br>
      Data neixamant: <output id="data"></output>
      <br>
      <br>
      <img id="foto" src="">
    </div>

    <script type="text/javascript">
    hola = <?php echo $usuarisdata ?>;
    nom = "<?php echo $_POST["nom"] ?>";
    contra = "<?php echo "".$_POST["contra"] ?>";

    i = 0;
    id = null;
    while (hola.id.length > i) {
      if(nom == hola.id[i].nom && contra == hola.id[i].contra){
        id = i;
        i = hola.id.length;
      }
      i++;
    }

    document.getElementById("nom").innerHTML = hola.id[id].nom;
    document.getElementById("edat").innerHTML = hola.id[id].edat;
    document.getElementById("data").innerHTML = hola.id[id].data;
    </script>
  </body>
</html>
