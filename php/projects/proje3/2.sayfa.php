<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>

<a href="2.sayfa.php?session_clear">Session Clear</a>

<?php 
echo $_SESSION['firstname'];

if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['session_clear'])){
    echo $_SESSION["firstname"]."<br>";
    unset($_SESSION["firstname"]);
    //session_unset();
    //$_SESSION = [];
    echo $_SESSION["firstname"]."<br>";
}

?>
</body>
</html>


