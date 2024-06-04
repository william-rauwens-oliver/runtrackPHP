<!DOCTYPE html>
<html>
<body>

<form action="" method="get">
  <label for="fname">Prénom:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Nom:</label><br>
  <input type="text" id="lname" name="lname">
  <input type="submit" value="Submit">
</form> 

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombreArguments = count($_GET);
    echo "Le nombre d'arguments GET est : " . $nombreArguments;
}
?>

</body>
</html>