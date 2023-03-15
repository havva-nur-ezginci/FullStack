<?php
$cookie_name = "user";
$cookie_value = "Havva Nur";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "------cookie.php-------  <br>";
?>
<html>
<body>

<?php
var_dump($_COOKIE);//array(1) { ["user"]=> string(9) "Havva Nur" }

echo "<br>";echo "<br>";

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set! <br>";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];

  echo "<br>"; echo "<br>"; echo "<br>";
}
?>

</body>
</html>