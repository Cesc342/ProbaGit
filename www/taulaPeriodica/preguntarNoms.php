<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="corr">

    </div>
    <div id="err">

    </div>
    <br>
    <div>
      <h3 id="nota"></h3>
    </div>
    <script type="text/javascript">
      json = <?php echo file_get_contents("taulaPeriodica.json"); ?>
      j = {
        "corr": 0,
        "err":0
      };

      function calcularNota(x) {
        n = "";
        if(x*10 >= 9){
          n = "AE";
        }else if(x*10 < 5){
          n = "NA";
        }else if(x*10 >= 7){
          n = "AN";
        }else{
          n = "AS";
        }
        return n;
      }

      function ran(x) {
        return Math.floor(Math.random() * x);
      }

      max = prompt("Quantes vols estudiar? (Algunes es repetiran)");
      i=0;
      while(max > i){
        x = ran(json.columna.length);
        y = ran(json.columna[x].length);
        if(prompt(json.columna[x][y].nom) == json.columna[x][y].signe){
          alert("Correcta");
          j.corr++;
        }else{
          alert("Error");
          j.err++;
        }
        i++;
      }
      console.log("Hola");
      document.getElementById("corr").innerHTML = "Correctes: " + j.corr;
      document.getElementById("err").innerHTML = "Errors: " + j.err;
      document.getElementById("nota").innerHTML = "NOTA: "+ (Math.floor(j.corr/max * 4 * 100)/100) + " " + calcularNota(j.corr/max);
      console.log("Adeu");
    </script>
  </body>
</html>
