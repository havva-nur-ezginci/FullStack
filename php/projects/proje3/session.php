<?php
// Start the session
session_start();
?>
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
   <input type="submit" value="Gönder">
</form>

<a href="getSessionVariable.php">getSessionVariable Sayfasına Git</a>
<?php 
echo "<br>";echo "<br>";
var_dump($_COOKIE);//array(1) { ["user"]=> string(9) "Havva Nur" }

echo "<br>";echo "<br>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $firstname = $_REQUEST['firstName'];
    echo "POST gerçekleşti name: ".$firstname;
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    $_SESSION['firstname'] = $firstname;
}

?>
</body>
</html>