<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERGLOBALS</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"enctype="multipart/form-data"><!--action bunun yerine boş da bırakılabilir -->
    <input type="text" name="firstName" placeholder="Ad">
    <input type="submit" value="Gönder">
    <input type="file" name="resim">
    <!-- <button type="submit">Gönder</button> -->
</form>

<a href="index.php?param1=parametre_karsiligi">Anasayfaya Git => $GET</a>
    
<?php  

// Superglobals
/**The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION */

if($_SERVER["REQUEST_METHOD"] == "POST"){
    print_r($_REQUEST);

    $firstname = $_REQUEST['firstName'];// input un name ini yazıyoruz.
    /**Request ile  tüm methodlardan alabiliriz. ama isteğimizin post 
     * olduğunu biliyoruz direk POST un da içinden alabiliriz.
    */
    $firstname = $_POST['firstName'];

    if (empty($firstname)) {
        echo "Name is empty";
      } else {
        echo $firstname;
      }
    
      print_r($_FILES);// resme ait bilgiler gelir.
      /**resim: {
name: "manzara.jpg",
type: "image/jpeg",
tmp_name: "/tmp/phpStWk8O",
error: "0",
size: "29516"
} */
}
else if($_SERVER["REQUEST_METHOD"] == "GET"){
    //print_r($_GET);
    if(isset($_GET['param1'])){//isset : verilen parametre array de var mı?
        echo "<hr>";//düz çizgi
        echo "Paramere : ".$_GET['param1'];

    }
    
}



?>
</body>
</html>