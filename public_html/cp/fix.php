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
error_reporting(0);
//  global $sqli;

	include ('./session.php');


echo "<h3>Fix DataBase</h3>";


// $sqli->query("ALTER TABLE `NewsTable` ADD `AutoAddID` INT NOT NULL AFTER `TypeLine`;"); //One
// $sqli->query("UPDATE `NewsTable` SET `AutoAddID` = '1' WHERE `id` > 0 "); // two

// 'https://m.skynewsarabia.com/web/images/'
// {height}', '400'
// {width}', '760'

 
	$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `AutoAddID` = 1");
	$numOfQuery = mysqli_num_rows($q);

	echo "Number news is:".$numOfQuery."<br>"; // 119
	
	// $a = 0;
	// while ($row = $q->fetch_array()) {
	// 	$UpdateID = $i['id'] = $row['id'];
	// 	$ImageUpdate = $i['imageUrl'] = $row['imageUrl'];

	// 	// echo $i['id'].'<br>'." ::".$a;
	// 	// echo $a."<br>";



	// 	// $imageurlTest = $ImageUpdate;
	// 	// $imageurlTest = str_replace("{width}","760",$imageurlTest);
	// 	// $imageurlTest = str_replace("{height}","400",$imageurlTest);
	// 	// $imageurlTest = "https://m.skynewsarabia.com/web/images/".$imageurlTest;
	// 	// $sqli->query("UPDATE `NewsTable` SET `imageUrl` = '$imageurlTest' WHERE `id` = $UpdateID;");
	// 	// echo "is't done ID:".$UpdateID."<br>";
	// 	// echo $row['AutoAddID']."<br>";


	// 	$a++;
	// }




		// echo $imageurlTest;





?>