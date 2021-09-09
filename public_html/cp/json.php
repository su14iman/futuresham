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

	include ('./session.php');
	header('Content-Type: application/json');
	$SkyNewsAPI = new SkyNewsAPI();
	



//# for Update :)) 
@$Update = $_GET['Update'];
if($Update == 'Update'){
	$SkynewsUpdateQuery = $sqli->query("SELECT * FROM `lastUpdate`");
	$SkynewsUpdateFetch = $SkynewsUpdateQuery->fetch_array();
	$lastTimeOfUpdate =$SkynewsUpdateFetch['lastTime'] + 7200;
	$TimeNowForUpdate = time();
	if($lastTimeOfUpdate <= $TimeNowForUpdate){
		$SkyNewsAPI->check();
		echo "update";
	}else{
		echo "data base is updated .. ";
	}	
}




	@$CurEditUSDC = $_POST['CurEditUSDC'];
	@$CurEditTRYC = $_POST['CurEditTRYC'];
	if(!empty($CurEditUSDC) && !empty($CurEditTRYC)){
		echo $JsonIO->CurrenciesEdit($CurEditUSDC,$CurEditTRYC);
	}


	@$SoftwareSelectAll = $_POST['SoftwareSelectAll'];
	if (!empty($SoftwareSelectAll)) {
		echo $JsonIO->SoftwareSelectAll();
	}
	


	@$SoftwareRemove = sIO($_POST['SoftwareRemove']);
	if (!empty($SoftwareRemove)) {
		echo $JsonIO->SoftwareRemove($SoftwareRemove);
	}

	
	@$AddSoftwareName = $_POST['AddSoftwareName'];
	@$AddSoftwareDescription = $_POST['AddSoftwareDescription'];
	@$AddSoftwareURL = $_POST['AddSoftwareURL'];
	if (!empty($AddSoftwareName) && !empty($AddSoftwareDescription) && !empty($AddSoftwareURL)) {
		echo $JsonIO->SoftwareAdd($AddSoftwareName,$AddSoftwareDescription,$AddSoftwareURL);
	}
	

	@$ChangePasswordCurrent = $_POST['ChangePasswordCurrent'];
	@$ChangePasswordNew = $_POST['ChangePasswordNew'];
	if(!empty($ChangePasswordCurrent) && !empty($ChangePasswordNew)){
		echo $JsonIO->ChangePassword($myID,$ChangePasswordCurrent,$ChangePasswordNew);
	}










	// News Section .. 
	@$SeleactAllNewsDBR = $_POST['SeleactAllNewsDB'];
	if (!empty($SeleactAllNewsDBR)) {
		echo $JsonIO->SeleactAllNewsDB();
	}


	// News Section Auto .. 
	@$SeleactAllNewsAutoDB = $_POST['SeleactAllNewsAutoDB'];
	if (!empty($SeleactAllNewsAutoDB)) {
		echo $JsonIO->SeleactAllNewsAutoDB();
	}


	// News Section  Manually.. 
	@$SeleactAllNewsManuallyDB = $_POST['SeleactAllNewsManuallyDB'];
	if (!empty($SeleactAllNewsManuallyDB)) {
		echo $JsonIO->SeleactAllNewsManuallyDB();
	}



	// News Section  Manually.. 
	@$DeleteNewsID = $_POST['DeleteNewsID'];
	if (!empty($DeleteNewsID)) {
		$DeleteNewsID = sIO($DeleteNewsID);
		echo $JsonIO->DeleteNews($DeleteNewsID);
	}





// EditNewsID($id,$Title,$summary,$BodyHTML,$image)


@$NewsEditPageTitle = $_POST["EditPageTitle"];
@$NewsEditPageID = $_POST["EditPageID"];
@$NewsEditPageSummary = $_POST["EditPageSummary"];
@$NewsEditPageBodyHTML = strip_tags($_POST["EditPageBodyHTML"]);
@$NewsEditPageImage = $_POST["EditPageImage"];

	if(!empty($NewsEditPageTitle) &&!empty($NewsEditPageID) &&!empty($NewsEditPageSummary) &&!empty($NewsEditPageBodyHTML) &&!empty($NewsEditPageImage)){
		echo $JsonIO->EditNewsID($NewsEditPageID,$NewsEditPageTitle,$NewsEditPageSummary,$NewsEditPageBodyHTML,$NewsEditPageImage);
		// status,ok,EditNewsID
	}





@$AddNewTitle = $_POST["AddNewTitle"];
@$AddNewSummary = $_POST["AddNewSummary"];
@$AddNewBodyHTML = strip_tags($_POST["AddNewBodyHTML"]);
@$AddNewImage = $_POST["AddNewImage"];
@$AddNewType = $_POST["AddNewType"];
	if(!empty($AddNewTitle) && !empty($AddNewSummary) && !empty($AddNewBodyHTML) && !empty($AddNewImage) && !empty($AddNewType)){
		echo $JsonIO->AddNewsManually($AddNewTitle,$AddNewSummary,$AddNewImage,$AddNewBodyHTML,$AddNewType);
		// status,ok,AddNewsManually
	}







// echo $JsonIO->BarsSyria();

// htmlentities


//  ** strip_tags()


// AddSoftwareName
// AddSoftwareDescription
// AddSoftwareURL








?>