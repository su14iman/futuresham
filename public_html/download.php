<?php 
/***
 ____             _               ____       __  __
|  _ \  ___   ___| |_ ___  _ __  / ___|  ___|  \/  | ___
| | | |/ _ \ / __| __/ _ \| '__| \___ \ / _ \ |\/| |/ _ \
| |_| | (_) | (__| || (_) | |     ___) |  __/ |  | | (_) |
|____/ \___/ \___|\__\___/|_|    |____/ \___|_|  |_|\___/

		                   Semoo@dr.com

***/

//ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
//  global $sqli;
include('./ext/service/config.app.php');

 include("./ext/pages/header.php");


// download.php?pc



// ?f=1
// ?pc=1
// ?mob=1

	@$Firmware = sIO($_GET['f']);
	@$PC = sIO($_GET['pc']);
	@$mobile = sIO($_GET['mob']);

		if(!empty($Firmware)){

				$qF = $sqli->query("SELECT * FROM `software` WHERE `id` = '$Firmware'");
					$fetchQuery = $qF->fetch_array();
					$URL = $fetchQuery['url'];
					// echo $URL;
			echo '<meta http-equiv="refresh" content="3;url='.$URL.'" />';
			echo '<p>انقر <a href="'.$URL.'">هنا</a> لإعادة التحميل ... </p>';
			echo "<br><h3>سوف يتم تحويلك خلال ثواني ... </h3>";


		}elseif (!empty($PC)) {


			$qF = $sqli->query("SELECT * FROM `Application` WHERE `id` = '$PC'");
					$fetchQuery = $qF->fetch_array();
					$URL = $fetchQuery['url'];
					// echo $URL;
			echo '<meta http-equiv="refresh" content="3;url='.$URL.'" />';
			echo '<p>انقر <a href="'.$URL.'">هنا</a> لإعادة التحميل ... </p>';
			echo "<br><h3>سوف يتم تحويلك خلال ثواني ... </h3>";


		}elseif (!empty($mobile)) {


			$qF = $sqli->query("SELECT * FROM `Application` WHERE `id` = '$mobile'");
					$fetchQuery = $qF->fetch_array();
					$URL = $fetchQuery['url'];
					// echo $URL;
			echo '<meta http-equiv="refresh" content="3;url='.$URL.'" />';
			echo '<p>انقر <a href="'.$URL.'">هنا</a> لإعادة التحميل ... </p>';
			echo "<br><h3>سوف يتم تحويلك خلال ثواني ... </h3>";


		}else{
				echo "<h3>هذا البرنامج غير متوفر او قد تم ازلته</h3>";
		}


	// var_dump($_GET);

echo '<div style=" height: 120px; "></div>';

 include("./ext/pages/footer.php");

?>