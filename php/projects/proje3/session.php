<?php 
include "cookie.php";
echo "<hr>";
echo "------session.php-------  <br><br>";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
<form action="" method="POST">
   <input type="text" name="firstName" placeholder="Ad">
   <button type="submit">BUTON</button>
</form>
<a href="2.sayfa.php">2.Sayfaya Git</a>

<?php 
echo "<br>";echo "<br>";
var_dump($_COOKIE);//array(1) { ["user"]=> string(9) "Havva Nur" }

echo "<br>";echo "<br>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $firstname = $_REQUEST['firstName'];
    echo $firstname;
    $_SESSION['firstname'] = $firstname;

}

?>
</body>
</html>