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
error_reporting(0);
//  global $sqli;

include('./ext/service/config.app.php');
include('./ext/service/class.api.skynews.php');
include('./ext/service/class.json.io.php');


header('Content-Type: application/json');





// //# for Update :)) 
// $SkyNewsAPI = new SkyNewsAPI();
// $SkynewsUpdateQuery = $sqli->query("SELECT * FROM `lastUpdate`");
// $SkynewsUpdateFetch = $SkynewsUpdateQuery->fetch_array();
// $lastTimeOfUpdate =$SkynewsUpdateFetch['lastTime'] + 7200;
// $TimeNowForUpdate = time();
// if($lastTimeOfUpdate <= $TimeNowForUpdate){
	// $SkyNewsAPI->check();
// }










// # for json in/out Put class :))

	$JsonIO = new JsonIO();




	$bars1 = $_POST['Bars1'];
	if(!empty($bars1)){
		echo $JsonIO->BarsSport();
	}



	$bars2 = $_POST['Bars2'];
	if(!empty($bars2)){
		echo $JsonIO->BarsSyria();
	}



	$BarsEX = $_GET['BarsEX'];
	if(!empty($BarsEX)){
		echo $JsonIO->ExchangeRatesOnline();

	}
	$BarsEX = $_GET['BarsEX2'];
	if(!empty($BarsEX)){
		// echo $JsonIO->ExchangeRatesOnline2();
		echo $JsonIO->CurrenciesView();

	}

	


// [{"name":"dollar","sell_price":"442","buy_price":"444","arrow":"0"}]







	//  Sliders 


	$NewsSliderHomePageSport = $_POST['NewsSliderHomePageSport'];
	if(!empty($NewsSliderHomePageSport)){
		echo $JsonIO->NewsSliderHomePageSport();
	}

	$NewsSliderHomePageSyria = $_POST['NewsSliderHomePageSyria'];
	if(!empty($NewsSliderHomePageSyria)){
		echo $JsonIO->NewsSliderHomePageSyria();
	}

	$NewsSliderHomePageTechnology = $_POST['NewsSliderHomePageTechnology'];
	if(!empty($NewsSliderHomePageTechnology)){
		echo $JsonIO->NewsSliderHomePageTechnology();
	}






	$NewsIDPOST = $_POST['NewsID'];
	if(!empty($NewsIDPOST)){
		echo $JsonIO->NewsID($NewsIDPOST);
	}






// News 


	$NewsSectionSyria = $_POST['NewsSectionSyria'];
	if(!empty($NewsSectionSyria)){
		echo $JsonIO->NewsSectionSyria();
	}


	$NewsSectionSport = $_POST['NewsSectionSpor'];
	if(!empty($NewsSectionSport)){
		echo $JsonIO->NewsSectionSport();
	}


	$NewsSectionTechnology = $_POST['NewsSectionTechnolog'];
	if(!empty($NewsSectionTechnology)){
		echo $JsonIO->NewsSectionTechnology();
	}







// InboxAdd($name=Null,$email=Null,$msg=Null,$company=Null,$numberphone=Null,$webSite=Null,$formType=Null)


		$FormCname = $_POST['FormCname'];
		$FormCemail = $_POST['FormCemail'];
		$FormCmsg = $_POST['FormCmsg'];
		$FormCcompany = $_POST['FormCcompany'];
		$FormCnumberphone = $_POST['FormCnumberphone'];
		$FormCwebSite = $_POST['FormCwebSite'];
		$FormCformType = $_POST['FormCformType'];
			if(!empty($FormCname) || !empty($FormCemail) || !empty($FormCnumberphone)){
				echo $JsonIO->InboxAdd($FormCname,$FormCemail,$FormCmsg,$FormCcompany,$FormCnumberphone,$FormCwebSite,$FormCformType);
				
				$bodyEmail = "الاسم : ".@$FormCname." <br> البريد الالكتروني: ".@$FormCemail." <br> الرسالة: ".@$FormCmsg." <br> الشركة: ".@$FormCcompany." <br> رقم الهاتف: ".@$FormCnumberphone." <br> عنوان الويب: ".@$FormCwebSite." <br> نوع الرسالة: ".@$FormCformType." <br>";

				@mail('contact@futuresham.com', 'Your inbox is rather location || you have new message :)) ',$bodyEmail);
			}








// echo $JsonIO->ApplicationAdd('XCV APP','a.jpg','network app','http://google.com');
	// echo $JsonIO->ApplicationRemove(3);
	// echo $JsonIO->ApplicationSelectID(2);
	// echo $JsonIO->ApplicationSelectAll();




// echo $JsonIO->SoftwareAdd('XCV APP','a.jpg','network app','http://google.com');
	// echo $JsonIO->SoftwareRemove(3);
	// echo $JsonIO->SoftwareSelectID(2);
	// echo $JsonIO->SoftwareSelectAll();




// echo $JsonIO->detailsIP();





// echo $JsonIO->ExchangeRatesOnline();



	// $JsonIO->ExchangeAdd($name,$priceBuy=NULL,$priceSale=NULL);
	// $JsonIO->ExchangeRemove($id);
	// $JsonIO->ExchangeUpdatePrice($id,$buy,$sale);
	// $JsonIO->ExchangeUpdateName($id,$name);
	// $JsonIO->ExchangeSelectID($id);
	// $JsonIO->ExchangeSelectAll();


	







// login :)) 

// echo $JsonIO->login('admin','1231233')['s'];










?>