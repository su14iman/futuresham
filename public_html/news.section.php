<?php 
/***
 ____             _               ____       __  __
|  _ \  ___   ___| |_ ___  _ __  / ___|  ___|  \/  | ___
| | | |/ _ \ / __| __/ _ \| '__| \___ \ / _ \ |\/| |/ _ \
| |_| | (_) | (__| || (_) | |     ___) |  __/ |  | | (_) |
|____/ \___/ \___|\__\___/|_|    |____/ \___|_|  |_|\___/

		                   Semoo@dr.com

***/

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
//  global $sqli;
	include('./ext/service/config.app.php');
	include('./ext/service/class.json.io.php');

    include("./ext/pages/header.php");


 


    include('./ext/exPages/htmlpages/news.section.html');
	echo '<script type="text/javascript" src="./ext/js/app.news.section.js"></script>';    












    include("./ext/pages/footer.php");
?>