<?php
//ini dosyası ayarı
ini_set("display_erorrs",1);
ini_set("error_reporting",E_ALL);

//error_reporting(E_ALL);//E_ALL veya -1 de verebiliriz.

include "header.php";

include_once "index.php";

require "footer.php";

//require_once "footer.php";

include "session.php";
?>