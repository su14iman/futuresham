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



include("./ext/pages/hedaer.php");


@$TypeGet = $_GET['id'];
	if($TypeGet == 1){
		$ty = "pc";
	}elseif($TypeGet ==2){
		$ty="mobile";
	}


?>



<style type="text/css">
	
	form{
		width: 60%;
		margin:auto;
		text-align: center;
	}

	form input{
		width: 100%;
	}
	form label{
		text-align: left;
		margin-top: 1%;
		float: left;
	}
</style>
<form method="post" action="add.php">
	

	<input value="<?php echo $ty; ?>" type="hidden" name="AppADDType">
	<label>#Name:</label><br>
	<input  type="text" name="AppADDname"><br>

	<label>#Image:</label><br>
	<input  placeholder="http://ex.com/ex.jpg" type="text" name="AppADDicon"><br>

	<label>#Description:</label><br>
	<input  type="text" name="AppADDdescription"><br>

	<label>#Link:</label><br>
	<input  placeholder="http://ex.com/ex.exe" type="url" name="AppADDurl"><br>

		<br>
	<button type="submit">Save changes</button>
</form>





<?php

// @var_dump($_POST);






		@$AppADDname = $_POST['AppADDname'];
		@$AppADDicon = $_POST['AppADDicon'];
		@$AppADDdescription = $_POST['AppADDdescription'];
		@$AppADDur = $_POST['AppADDurl'];
		@$AppADDType = $_POST['AppADDType'];

		if(!empty($AppADDname) && !empty($AppADDicon) && !empty($AppADDdescription) && !empty($AppADDur)){
			$timeNow = time();
			$clinetIP = $_SERVER['REMOTE_ADDR'];
			$sqli->query("INSERT INTO `Application` (`id`, `name`, `icon`, `description`, `url`,`Type`, `timeAdd`, `ip`, `s`) VALUES (NULL, '$AppADDname', '$AppADDicon', '$AppADDdescription', '$AppADDur', '$AppADDType', '$timeNow', '$clinetIP', '1');");
		}

// echo $tt;







	// UPDATE `Application` SET `name` = 'Microsoft Office 20033', `icon` = 'https://www.mutaz.net/free-programs/prog-img/kyiyE06.png3', `description` = 'مايكروسوفت اوفيس 20033', `url` = 'https://freeprograms.win/?url=MTQ53' WHERE `Application`.`id` = 2;


include('./ext/pages/footer.php');


?>