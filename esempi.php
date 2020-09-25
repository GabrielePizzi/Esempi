<html>
  <body>
    <?php
/*
      $day = date("d");
      $m = date("M Y h:m A");

      echo ++$day . $m;
*/
     
      $d = date("d");
      echo "Domani è " .date("D d M Y", mktime(date("h"), date("i"), date("s"), date("m"), date("d")+1, date("Y")));

      /*
       $Da = date("D");
      $m = date("M");
      $Y = date("Y");
      $h = date("h:m");
      $A = date("A");



      $DataK = mktime("$Da", "$day", "$m", "$Y", "$h", "$A");
      echo $DataK;
      /* date(format r, timestamp);
      echo date("d M Y h:m A");
      
      */

      //mktime(ore, minuti, secondi, mese, giorno, anno)
      /*$bertelli = mktime(04, 32, 00, 04, 23, 2002);
      echo $bertelli;
      echo date ("D d M Y H:m A", $bertelli);
      */


    ?>
  </body>
</html>
