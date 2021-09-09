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


class JsonIO{
	
	function __construct(){
		return "I'm Here ;) ";
	}


		// inbox : to email - to inbox

		/** 
				News :)) 
		**/





	


		// id news 
		// news slider : Technology 3 - sport 3 - syria 6 

		// news section : Technology 6 -> ?  - Sport 6 - syria 6 / (row of news to section)



// Bars
		public function BarsSyria(){
			global $sqli;
			$query = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Syria' AND `s` = 1 AND `type`= 'ARTICLE'  AND (`AutoAddID` = 1 OR `AutoAddID` = 2) ORDER BY `id` DESC LIMIT 0,10");
			// AND `AutoAddID` = 1 OR `AutoAddID` = 2
			// SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Syria' AND `s` = 1 AND `type`= 'ARTICLE' AND (`AutoAddID` = 1 OR `AutoAddID` = 2)  ORDER BY `id` DESC LIMIT 0,10
				while ($FetchRow = $query->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					// $i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					// $i['summary'] = $FetchRow['summary'];
					// $i['imageUrl'] = $FetchRow['imageUrl'];
					// $i['BodyHTML'] = $FetchRow['BodyHTML'];
					// $i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;

				}
			return json_encode(array('BarsSyria' =>$r));
		}


		public function BarsSport(){
			global $sqli;
			$query = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Sport' AND `s` = 1 AND `type`= 'ARTICLE'  AND (`AutoAddID` = 1 OR `AutoAddID` = 2) ORDER BY `id` DESC LIMIT 0,10");
			// AND `AutoAddID` = 1 OR `AutoAddID` = 2
				while ($FetchRow = $query->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					// $i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					// $i['summary'] = $FetchRow['summary'];
					// $i['imageUrl'] = $FetchRow['imageUrl'];
					// $i['BodyHTML'] = $FetchRow['BodyHTML'];
					// $i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;

				}
			return json_encode(array('BarsSport' =>$r));
		}






// News Slider :: HomePage

		public function NewsSliderHomePageSyria(){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Syria' AND `s` = 1 AND `type`= 'ARTICLE'   AND (`AutoAddID` = 1 OR `AutoAddID` = 2) ORDER BY `id` DESC LIMIT 0,6");
			// AND `AutoAddID` = 1 OR `AutoAddID` = 2
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return json_encode(array('NewsSliderHomePageSyria' =>$r));

		}



		public function NewsSliderHomePageSport(){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Sport' AND `s` = 1 AND `type`= 'ARTICLE'  AND (`AutoAddID` = 1 OR `AutoAddID` = 2) ORDER BY `id` DESC LIMIT 0,3");
			// AND `AutoAddID` = 1 OR `AutoAddID` = 2
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return json_encode(array('NewsSliderHomePageSport' =>$r));

		}



		public function NewsSliderHomePageTechnology(){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Technology' AND `s` = 1 AND `type`= 'ARTICLE'  AND (`AutoAddID` = 1 OR `AutoAddID` = 2) ORDER BY `id` DESC LIMIT 0,4");
			// AND `AutoAddID` = 1 OR `AutoAddID` = 2
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['summary'] = $FetchRow['summary'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return json_encode(array('NewsSliderHomePageTechnology' =>$r));

		}





// News section .. 



		public function NewsSectionSyria(){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Syria' AND `s` = 1 AND `type`= 'ARTICLE'  AND (`AutoAddID` = 1 OR `AutoAddID` = 2) ORDER BY `id` DESC LIMIT 0,6");
			// AND `AutoAddID` = 1 OR `AutoAddID` = 2
			$q2 = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Syria' AND `s` = 1 AND `type`= 'ARTICLE' AND (`AutoAddID` = 1 OR `AutoAddID` = 2)");
				$rows = mysqli_num_rows($q2);
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return json_encode(array('NewsSectionSyria' =>$r,'NewsSectionSyriaRows'=>$rows));

		}



		public function NewsSectionSport(){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Sport' AND `s` = 1 AND `type`= 'ARTICLE'  AND (`AutoAddID` = 1 OR `AutoAddID` = 2) ORDER BY `id` DESC LIMIT 0,6");
			// AND `AutoAddID` = 1 OR `AutoAddID` = 2
			$q2 = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Sport' AND `s` = 1 AND `type`= 'ARTICLE'");
				$rows = mysqli_num_rows($q2);
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return json_encode(array('NewsSectionSpor' =>$r,'NewsSectionSport'=>$rows));

		}



		public function NewsSectionTechnology(){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Technology' AND `s` = 1 AND`type`= 'ARTICLE'  AND (`AutoAddID` = 1 OR `AutoAddID` = 2) ORDER BY `id` DESC LIMIT 0,6");
			// AND `AutoAddID` = 1 OR `AutoAddID` = 2
			$q2 = $sqli->query("SELECT * FROM `NewsTable` WHERE `TypeLine` = 'Technology' AND `s` = 1 AND `type`= 'ARTICLE'");
				$rows = mysqli_num_rows($q2);
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return json_encode(array('NewsSectionTechnolog' =>$r,'NewsSectionTechnology'=>$rows));

		}







// news ID :)

		public function NewsID($id){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `id` = '$id'");
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['Summary'] = $FetchRow['summary'];
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['BodyHTML'] = $FetchRow['BodyHTML'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return json_encode(array('NewsID' =>$r,'NewsRowsID'=>$rows));

		}


		public function PHPNewsID($id){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE  `s` = '1' AND `id` = '$id'");
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['Summary'] = $FetchRow['summary'];
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['BodyHTML'] = $FetchRow['BodyHTML'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return array('NewsID' =>$r,'NewsRowsID'=>$rows);

		}





		public function AddNewsManually($headline,$summary,$imageurl,$BodyHTML,$typeLine){
			global $sqli;
			$Type = "ARTICLE";
			$idAPI = 0;
			$TimeNow = time();
			$date = date("Y-m-d h:i:a",$TimeNow);
			


			@$sqli->query("INSERT INTO `NewsTable` (`id`, `idAPI`, `type`, `date`, `headline`, `summary`, `imageUrl`, `BodyHTML`, `videoUrl`, `timeAdd`, `s`, `TypeLine`, `AutoAddID`) VALUES (NULL, '0', '".$Type."', '".$date."', '".$headline."', '".$summary."', '".$imageurl."', '".$BodyHTML."','', '".$TimeNow."', '1', '".$typeLine."','2');");
			$r['status'] = "ok";
			return json_encode(array('AddNewsManually'=>$r));
		}




		public function SeleactAllNewsDB(){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `s` = 1 ORDER BY `id` DESC");
			$q2 = $sqli->query("SELECT * FROM `NewsTable`");
				$rows = mysqli_num_rows($q2);
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['Summary'] = $FetchRow['summary'];
					$i['BodyHTML'] = $FetchRow['BodyHTML'];
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['timeAdd'] = $FetchRow['timeAdd'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$i['TypeLine'] = $FetchRow['TypeLine'];
					$r[] = $i;
				}
			return json_encode(array('SeleactAllNewsDB' =>$r,'SeleactAllNewsRowsDB'=>$rows));

		}






		public function SeleactAllNewsManuallyDB(){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `s` = 1 AND `AutoAddID` = '2'  ORDER BY `id` DESC");
			$q2 = $sqli->query("SELECT * FROM `NewsTable` WHERE `AutoAddID` = 2");
				$rows = mysqli_num_rows($q2);
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['Summary'] = $FetchRow['summary'];
					$i['BodyHTML'] = $FetchRow['BodyHTML'];
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['timeAdd'] = $FetchRow['timeAdd'];
					$i['TypeLine'] = $FetchRow['TypeLine'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return json_encode(array('SeleactAllNewsManuallyDB' =>$r,'SeleactAllNewsRowDB'=>$rows));

		}



		public function SeleactAllNewsAutoDB(){
			global $sqli;
			$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `s` = 1 AND `AutoAddID` = 1  ORDER BY `id` DESC");
			$q2 = $sqli->query("SELECT * FROM `NewsTable` WHERE `AutoAddID` = 1");
				$rows = mysqli_num_rows($q2);
				while ($FetchRow = $q->fetch_array()) {
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['Summary'] = $FetchRow['summary'];
					$i['BodyHTML'] = $FetchRow['BodyHTML'];
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['timeAdd'] = $FetchRow['timeAdd'];
					$i['TypeLine'] = $FetchRow['TypeLine'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					$r[] = $i;
				}
			return json_encode(array('SeleactAllNewsAutoDB' =>$r,'SeleactAllNewsAutoRowsDB'=>$rows));

		}




		public function EditNewsID($id,$Title,$summary,$BodyHTML,$image){
			global $sqli;
			$id = sIO($id);
			$Title = sIO($Title);
			$summary = sIO($summary);
			$BodyHTML = sIO($BodyHTML);

				$sqli->query("UPDATE `NewsTable` SET `headline` = '$Title', `summary` = '$summary', `imageUrl` = '$image', `BodyHTML` = '$BodyHTML' WHERE `id` = '$id';");
			$r['status'] = "ok";
			return json_encode(array('EditNewsID'=>$r));
		}


		public function DeleteNews($id){
			global $sqli;
			$sqli->query("UPDATE `NewsTable` SET `s` = '0' WHERE `id` = '$id';");
			$r['status'] = "ok";
			return json_encode(array('DeleteNews'=>$r));
		}


		/** 
				End News :)) 
		**/











	// Application
	public function ApplicationAdd($name,$icon,$description,$url,$Type){
		global $sqli;
		$timeNow = time();
		$clinetIP = $_SERVER['REMOTE_ADDR'];

		$sqli->query("INSERT INTO `Application` (`id`, `name`, `icon`, `description`, `url`,`Type`, `timeAdd`, `ip`, `s`) VALUES (NULL, '$name', '$icon', '$description', '$url', '$Type', '$timeNow', '$clinetIP', '1');");
		$i['status'] = 'ok';
		return json_encode(array('ApplicationAdd' =>$i));

	}


	public function ApplicationRemove($id){
		global $sqli;
		$sqli->query("UPDATE `Application` SET `s` = '0' WHERE `Application`.`id` = '$id'");
		$i['status'] = 'ok';
		return json_encode(array('ApplicationRemove' =>$i));
	}


	public function ApplicationSelectID($id){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `Application` WHERE s = 1 AND `id` = '$id'");
		$FetchQuery = $q->fetch_array();
		$i['name'] = $FetchQuery['name'];
		$i['icon'] = $FetchQuery['icon'];
		$i['description'] = $FetchQuery['description'];
		$i['url'] = $FetchQuery['url'];
		$i['timeAdd'] = $FetchQuery['timeAdd'];
		$i['ip'] = $FetchQuery['ip'];
		return json_encode(array('ApplicationSelectID' =>$i));
	}




	public function ApplicationSelectAllJson(){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `Application` WHERE s = 1");

		while ($FetchQuery = $q->fetch_array()) {
			$i['name'] = $FetchQuery['name'];
			$i['icon'] = $FetchQuery['icon'];
			$i['description'] = $FetchQuery['description'];
			$i['url'] = $FetchQuery['url'];
			$i['timeAdd'] = $FetchQuery['timeAdd'];
			$i['ip'] = $FetchQuery['ip'];
			$r[] = $i;
		}
		
		return json_encode(array('ApplicationSelectAll' =>$r));
	}



	public function ApplicationSelectAll(){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `Application` WHERE s = 1");

		while ($FetchQuery = $q->fetch_array()) {
			$i['name'] = $FetchQuery['name'];
			$i['icon'] = $FetchQuery['icon'];
			$i['description'] = $FetchQuery['description'];
			$i['url'] = $FetchQuery['url'];
			$i['timeAdd'] = $FetchQuery['timeAdd'];
			$i['ip'] = $FetchQuery['ip'];
			$r[] = $i;
		}
		
		return array('ApplicationSelectAll' =>$r);
	}














	// Software
	public function SoftwareAdd($name,$description,$url){
		global $sqli;
		$timeNow = time();
		$clinetIP = $_SERVER['REMOTE_ADDR'];

		$sqli->query("INSERT INTO `software` (`id`, `name`, `icon`, `description`, `url`, `timeAdd`, `ip`, `s`) VALUES (NULL, '$name','.', '$description', '$url', '$timeNow', '$clinetIP', '1');");
		$i['status'] = 'ok';
		return json_encode(array('SoftwareAdd' =>$i));

	}


	public function SoftwareRemove($id){
		global $sqli;
		$sqli->query("UPDATE `software` SET `s` = '0' WHERE `software`.`id` = '$id'");
		$i['status'] = 'ok';
		return json_encode(array('SoftwareRemove' =>$i));
	}


	public function SoftwareSelectID($id){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `software` WHERE s = 1 AND `id` = '$id'");
		$FetchQuery = $q->fetch_array();
		$i['name'] = $FetchQuery['name'];
		$i['icon'] = $FetchQuery['icon'];
		$i['description'] = $FetchQuery['description'];
		$i['url'] = $FetchQuery['url'];
		$i['timeAdd'] = $FetchQuery['timeAdd'];
		$i['ip'] = $FetchQuery['ip'];
		return json_encode(array('SoftwareSelectID' =>$i));
	}




	public function SoftwareSelectAll(){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `software` WHERE s = 1");

		while ($FetchQuery = $q->fetch_array()) {
			$i['ID'] = $FetchQuery['id'];
			$i['name'] = $FetchQuery['name'];
			$i['icon'] = $FetchQuery['icon'];
			$i['description'] = $FetchQuery['description'];
			$i['url'] = $FetchQuery['url'];
			$timee = date("Y-m-d h:i:a",intval($FetchQuery["timeAdd"]));
			$i['timeAdd'] = $timee;

			$i['ip'] = $FetchQuery['ip'];
			$r[] = $i;
		}
		
		return json_encode(array('SoftwareSelectAll' =>$r));
	}








//  IP 


	public function detailsIP(){
		$ip = file_get_contents('https://api.ipify.org');
		$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
		// isp - country - city - timezone - ->$query['city']
		$i['ip'] = $ip;
		$i['isp'] = $query['isp'];
		$i['country'] = $query['country'];
		$i['city'] = $query['city'];
		$i['timezone'] = $query['timezone'];
		return json_encode(array('detailsIP' =>$i));
	}









// Exchange .. 

	public function ExchangeRatesOnline(){
			$reqqw = "https://www.kuveytturk.com.tr/FinancePortal/Exchange/GetAll";
		$ch = curl_init();
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,0);
				curl_setopt($ch, CURLOPT_URL, $reqqw);
				$response = curl_exec($ch);
				curl_close($ch);
	}


	public function ExchangeRatesOnline2(){
			$reqqw = "https://sp-today.com/ticker-news/aleppo_cur.json";
		$ch = curl_init();
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,0);
				curl_setopt($ch, CURLOPT_URL, $reqqw);
				$response = curl_exec($ch);
				curl_close($ch);
	}





	public function ExchangeAdd($name,$priceBuy=NULL,$priceSale=NULL){
		global $sqli;
		$timeNow = time();
			$sqli->query("INSERT INTO `ExchangeRates` (`id`, `name`, `priceBuy`, `priceSale`, `time`, `s`) VALUES (NULL, '$name', '$priceBuy', '$priceSale', '$timeNow', '1');");
		$i['status'] = 'ok';
		return json_encode(array('ExchangeAdd' =>$i));
	}


	public function ExchangeRemove($id){
		global $sqli;
		$sqli->query("UPDATE `ExchangeRates` SET `s` = '0' WHERE `ExchangeRates`.`id` = '$id'");
		$i['status'] = 'ok';
		return json_encode(array('ExchangeRemove' =>$i));
	}


	public function ExchangeUpdatePrice($id,$buy,$sale){
		global $sqli;
		$sqli->query("UPDATE `ExchangeRates` SET `priceBuy` = '$buy', `priceSale` = '$sale' WHERE `ExchangeRates`.`id` = '$id'");
		$i['status'] = 'ok';
		return json_encode(array('ExchangeUpdatePrice' =>$i));
	}




	public function ExchangeUpdateName($id,$name){
		global $sqli;
		$sqli->query("UPDATE `ExchangeRates` SET `name` = '$name' WHERE `ExchangeRates`.`id` = '$id'");
		$i['status'] = 'ok';
		return json_encode(array('ExchangeUpdateName' =>$i));
	}



	public function ExchangeSelectID($id){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `ExchangeRates` WHERE s = 1 AND `id` = '$id'");
		$FetchQuery = $q->fetch_array();
		$i['id'] = $FetchQuery['id'];
		$i['name'] = $FetchQuery['name'];
		$i['priceBuy'] = $FetchQuery['priceBuy'];
		$i['priceSale'] = $FetchQuery['priceSale'];
		$i['time'] = $FetchQuery['time'];

		return json_encode(array('ExchangeSelectID' =>$i));
	}




	public function ExchangeSelectAll(){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `ExchangeRates` WHERE s = 1");

		while ($FetchQuery = $q->fetch_array()) {
			$i['id'] = $FetchQuery['id'];
			$i['name'] = $FetchQuery['name'];
			$i['priceBuy'] = $FetchQuery['priceBuy'];
			$i['priceSale'] = $FetchQuery['priceSale'];
			$i['time'] = $FetchQuery['time'];
			$r[] = $i;
		}
		
		return json_encode(array('ExchangeSelectAll' =>$r));
	}




	






	// login


	public function login($user,$pass){
				global $sqli;	
			 if(!empty($user) && !empty($pass)){
		 $passHash = "#Dr.".md5(md5($pass)).".SAi";
		 $q = $sqli->query("SELECT * FROM `administrator` WHERE username='$user' AND password='$passHash' ");
		 $UserArray = $q->fetch_array();
		
		 $num = mysqli_num_rows($q);
			 	if($num != 0){
			 		$idUser = $UserArray['id'];
			 		

			 		
			 		$login['s'] ='ok';
			 		$login['id'] = $idUser;
			 	}else{
			 		// $login['s'] = $passHash;
			 		$login['s'] ='Password or username erro Or Your Account is disPlay !!';
			 		$login['id'] = '';
			 	} // End if .. 
			 
			 }else{
			 		$login['s'] ='Null';
			 		$login['id'] = '';
			 } // End if empty .. 
			 	return $login;
	} // End function .. 



	public function ChangePassword($myID,$old,$new){
		global $sqli;
		$newHash = "#Dr.".md5(md5($new)).".SAi";
		$oldHash = "#Dr.".md5(md5($old)).".SAi";
		$q1 = $sqli->query("SELECT * FROM `administrator` WHERE `password` = '$oldHash' AND `id` = '$myID';");
		$row = mysqli_num_rows($q1);
			if($row != 0){
				$sqli->query("UPDATE `administrator` SET `password` = '$newHash' WHERE `id` = '$myID';");
				$res['status'] = 'ok';
			}else{
				$res['status'] = 'error';
				// $res['row']= $row;
			}
		return json_encode(array('ChangePassword'=>$res));
	}















	// Inbox 

// Add - remove - seleat all - select id

	public function InboxAdd($name=Null,$email=Null,$msg=Null,$company=Null,$numberphone=Null,$webSite=Null,$formType=Null){
		global $sqli;
		$timeNow = time();
		$clinetIP = $_SERVER['REMOTE_ADDR'];

		$sqli->query("INSERT INTO `inbox` (`id`, `type`, `name`, `email`, `msg`, `company`, `numberphone`, `ip`,`website`, `time`, `s`) VALUES (NULL, '$formType','$name', '$email', '$msg', '$company', '$numberphone','$clinetIP','$webSite', '$timeNow', '1');");
		$i['status'] = 'ok';
		return json_encode(array('InboxAdd' =>$i));

	}

	public function InboxRemove($id){
		global $sqli;
		$sqli->query("UPDATE `inbox` SET `s` = '0' WHERE `inbox`.`id` = '$id'");
		$i['status'] = 'ok';
		return json_encode(array('InboxRemove' =>$i));

	}




	public function InboxSelectAll(){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `inbox` ORDER BY `id` DESC");
		while ($row = $q->fetch_array()) {
			$i['id'] = $row['id'];
			$i['name'] = $row['name'];
			$i['email'] = $row['email'];
			$i['msg'] = $row['msg'];
			$i['company'] = $row['company'];
			$i['numberphone'] = $row['numberphone'];
			$i['ip'] = $row['ip'];
			$i['time'] = $row['time'];
			$r[] = $i;
		}
		return json_encode(array('InboxSelectAll' =>$r));
	}



	public function InboxSelectID($id){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `inbox` WHERE `id` = '$id' ");
			$row = $q->fetch_array();
			$i['id'] = $row['id'];
			$i['name'] = $row['name'];
			$i['email'] = $row['email'];
			$i['msg'] = $row['msg'];
			$i['company'] = $row['company'];
			$i['numberphone'] = $row['numberphone'];
			$i['ip'] = $row['ip'];
			$i['time'] = $row['time'];
			
		return json_encode(array('InboxRemove' =>$i));
	}








	public function CurrenciesEdit($USDC,$TRYC){
		global $sqli;
		$q = $sqli->query("UPDATE `Currencies` SET `usdspy` = '$USDC', `tryspy` = '$TRYC' WHERE `id` = 1;");
			$i['Status']='ok';
			return array('CurrenciesEdit' =>$i);
	}

	public function CurrenciesView(){
		global $sqli;
		$q = $sqli->query("SELECT * FROM `Currencies`");
		// [{"name":"dollar","sell_price":"442","buy_price":"444","arrow":"0"}]
			while ($row = $q->fetch_array()) {
				$i['usdspy'] = $row['usdspy'];
				$i['tryspy'] = $row['tryspy'];
				$r[] = $i;
			}
		return json_encode(array('CurrenciesView'=>$r));
	}






} // End class .. 


?>