<?php
/***

			Config Application :)) "
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

$db_host = "localhost";
$db_username = "Alp_Net";
$db_password = "l9@6-6h8vK,?";
$db_table = "Alp_Net";
date_default_timezone_set('Europe/Istanbul');

// $SQLiteDB = new SQLite3('URLs.db');




@$sqli = new mysqli($db_host, $db_username , $db_password , $db_table);
@mysqli_set_charset($sqli,"utf8");

if(mysqli_connect_error()){ 

	// echo mysqli_connect_error();


			$db_host = "localhost";
			$db_username = "root";
			$db_password = "root";
			$db_table = "So.Net.DB2";

			// $SQLiteDB = new SQLite3('URLs.db');




			$sqli = new mysqli($db_host, $db_username , $db_password , $db_table);
			mysqli_set_charset($sqli,"utf8");

 }



		function en($s){
			$r = openssl_encrypt($s,"AES-128-ECB","Se3/mo!!74@7");
			return $r;
		} 

		function de($s){
			$r = openssl_decrypt($s,"AES-128-ECB","Se3/mo!!74@7");
			return $r;
		} 


		function sIO($ss){ 
			return addslashes(htmlspecialchars(trim($ss))); 
		}






?>