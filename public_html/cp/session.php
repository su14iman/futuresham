
<?php  

/***
 ____             _               ____       __  __
|  _ \  ___   ___| |_ ___  _ __  / ___|  ___|  \/  | ___
| | | |/ _ \ / __| __/ _ \| '__| \___ \ / _ \ |\/| |/ _ \
| |_| | (_) | (__| || (_) | |     ___) |  __/ |  | | (_) |
|____/ \___/ \___|\__\___/|_|    |____/ \___|_|  |_|\___/

		                   Semoo@dr.com

***/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// error_reporting(0);
//  global $sqli;

session_start();

	include('../ext/service/config.app.php');
	include('../ext/service/class.json.io.php');
	include('../ext/service/class.api.skynews.php');
	$JsonIO = new JsonIO();


/**

                 $_SESSION['login_user'] = en($username);
                 $_SESSION['id_login'] = en($OperationsLogin['id']);

**/
 
 $username = de($_SESSION['login_user']);
 $id_login = de($_SESSION['id_login']);
 $myID = de($_SESSION['id_login']);



// Session Check ..
if(!isset($_SESSION['login_user'])){ 
header('Location: index.php');
exit();
 }
// echo "string";

?>

