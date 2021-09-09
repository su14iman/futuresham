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



include("./ext/pages/hedaer.php");

		@$AppID = sIO($_GET['id']);

		$q = $sqli->query("SELECT * FROM `Application` WHERE s = 1 AND `id` = '$AppID'");
		$FetchQuery = $q->fetch_array();
		$i['id'] = $FetchQuery['id'];
		$i['name'] = $FetchQuery['name'];
		$i['icon'] = $FetchQuery['icon'];
		$i['description'] = $FetchQuery['description'];
		$i['url'] = $FetchQuery['url'];
		$i['timeAdd'] = $FetchQuery['timeAdd'];
		$i['ip'] = $FetchQuery['ip'];


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
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	
	<label>#ID:</label><br>
	<input value="<?php echo $AppID; ?>" type="text" name="id" disabled><br>
	<input value="<?php echo $i['id']; ?>" type="hidden" name="AppEDITid">


	<label>#Name:</label><br>
	<input value="<?php echo $i['name']; ?>" type="text" name="AppEDITname"><br>

	<label>#Image:</label><br>
	<img src="<?php echo $i['icon']; ?>" width="185" height="185"><br>
	<input value="<?php echo $i['icon']; ?>" placeholder="http://ex.com/ex.jpg" type="text" name="AppEDITicon"><br>

	<label>#Description:</label><br>
	<input value="<?php echo $i['description']; ?>" type="text" name="AppEDITdescription"><br>

	<label>#Link:</label><br>
	<input value="<?php echo $i['url']; ?>" placeholder="http://ex.com/ex.exe" type="url" name="AppEDITurl"><br>

		<br>
	<button type="submit">Save changes</button>
</form>





<?php

// @var_dump($_POST);

		@$AppEditPostDataID = sIO($_POST['AppEDITid']);
		@$AppEditPostDataName = $_POST['AppEDITname'];
		@$AppEditPostDataIcon = $_POST['AppEDITicon'];
		@$AppEditPostDataDesc = $_POST['AppEDITdescription'];
		@$AppEditPostDataURL = $_POST['AppEDITurl'];

		if(!empty($AppEditPostDataID) && !empty($AppEditPostDataName) && !empty($AppEditPostDataIcon) && !empty($AppEditPostDataDesc) && !empty($AppEditPostDataURL)){
			$sqli->query("UPDATE `Application` SET `name` = '".$AppEditPostDataName."', `icon` = '".$AppEditPostDataIcon."', `description` = '".$AppEditPostDataDesc."', `url` = '".$AppEditPostDataURL."' WHERE `Application`.`id` = '".$AppEditPostDataID."';");
			echo '<h2>Modified successfully</h2>
			<meta http-equiv="refresh" content="0; url=./appedit.php?id='.$AppEditPostDataID.'" />

			';
		}







	// UPDATE `Application` SET `name` = 'Microsoft Office 20033', `icon` = 'https://www.mutaz.net/free-programs/prog-img/kyiyE06.png3', `description` = 'مايكروسوفت اوفيس 20033', `url` = 'https://freeprograms.win/?url=MTQ53' WHERE `Application`.`id` = 2;


include('./ext/pages/footer.php');


?>