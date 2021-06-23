<!DOCTYPE html>
<html lang="en">
<body>

<form action="zkouska.php" method="get">
    Zadej Jmeno: <input type="text" name="jmeno">
    <br>
    Zadej Povolani: <input type="text" name='Povolani'>
    <br>
   Zadej zvire v mnoznem cisle <input type="text" name='zvire'>
    <br>
   Zadej Cislo <input type="number" name="cislo">
    <input type="submit">
</form>
<br><br>
<?php $jmeno = $_GET["jmeno"];
      $povolani = $_GET['Povolani'];
      $zvire = $_GET['zvire'];
      $cislo = $_GET["cislo"];

      echo "$jmeno pracoval jako $povolani <br>";
      echo "Rad chodil prcat $zvire <br>";
      echo "A kazdy den vypil $cislo mochitek <br>";


?>


</body>
</html>