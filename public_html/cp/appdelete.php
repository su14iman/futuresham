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
include ('./session.php');


// echo "Hi : ".$username."<br/>".$id_login."<br/>".$_SESSION["login_user"]."<br/>".$_SESSION["id_login"];
// echo "<br/> <a href='logout'>logout</a>";



include("./ext/pages/hedaer.php");


	@$idApp = sIO($_GET['id']);

	$JsonIO->ApplicationRemove($idApp);

		echo '<script type="text/javascript">window.close();</script>';



?>

