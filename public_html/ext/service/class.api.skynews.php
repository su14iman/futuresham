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
// 2h = 7200/s



class SkyNewsAPI{



	function __construct(){
		return "I'm Here, let go ;) ";
	}






	/**
		Update Scetion .. 
	 **/
	private function GetLastIDFromNewsDB(){
		global $sqli;
		$query = $sqli->query("SELECT * FROM `NewsTable` ORDER BY `idAPI` DESC");
		$fetchQuery = $query->fetch_array();
		$idAPI = $fetchQuery['idAPI'];
		return (int)$idAPI;
	}



	private function GetLastIDFromNewsAPI(){
		$reqURL = 'https://m.skynewsarabia.com/rest/v2/pushNotification/SNA_APP/latestNews.json';
		$resJson = file_get_contents($reqURL);
		$DeJson = json_decode($resJson);

		@$ArrayJsonDecode = $DeJson->pushMessages;

		// var_dump();
		$lastIDis = $ArrayJsonDecode[0]->id;
		return $lastIDis;
	}


	private function CheckIdOnDataBaseAPI($id){
		global $sqli;
		$querySQL = $sqli->query("SELECT * FROM `NewsTable` WHERE `idAPI` = '".$id."'");
		$RuternRow = mysqli_num_rows($querySQL);
		return $RuternRow;
	}


	private function UpdateLog(){
		global $sqli;
		$timeNow = time();
		$sqli->query("UPDATE `lastUpdate` SET `lastTime` = '".$timeNow."' WHERE `lastUpdate`.`id` = 1;");
	}


	private function update(){
		global $sqli;

		$req[0] = "https://m.skynewsarabia.com/rest/v2/latestnews/7.json?deviceType=TABLET&offset=10&pageSize=10";
		$TypeLine[0] = 'Sport';

		$req[1] = "https://m.skynewsarabia.com/rest/v2/search/tag.json?deviceType=MOBILE&offset=0&pageSize=10&s=%D8%B3%D9%88%D8%B1%D9%8A%D8%A7&sort=DATE&supportsInfographic=true";
		$TypeLine[1] = 'Syria';


		$req[2] = "https://m.skynewsarabia.com/rest/v2//home/latest-stories.json?editorChoice=false&offset=0&pageSize=10&sectionNames=technology";
		$TypeLine[2] = 'Technology';




		// loop For Update .. 
		for ($i = 0; $i <= 2; $i++) {
    		// echo $req[$i]."<br><br>";

				$resJson = file_get_contents($req[$i]);
				$DeJson = json_decode($resJson);
				
				// if here for Type JSON News :(contentItems OR stories )
				@$ArrayJsonDecode = $DeJson->contentItems;
				if(is_null($ArrayJsonDecode)){
					$ArrayJsonDecode = $DeJson->stories;
				}





				foreach ($ArrayJsonDecode as $obj) {
				        $id   = $obj->id;
				 if($this->CheckIdOnDataBaseAPI($id) == 0){

				        
				        
				        // VIDEO , ARTICLE
				        $type = $obj->type;

				        $date = $obj->date;
				        $headline = $obj->headline;
				        $summary = $obj->summary;
				        $imageUrl = $obj->mediaAsset->imageUrl;
				        $imageurlTest = $imageUrl;
						$imageurlTest = str_replace("{width}","760",$imageurlTest);
						$imageurlTest = str_replace("{height}","400",$imageurlTest);
						$imageurlTest = "https://m.skynewsarabia.com/web/images/".$imageurlTest;
				        $TimeNow = time();



				        if($type == 'ARTICLE'){
				        	// echo "Ar";
				       	    // 1 : https://m.skynewsarabia.com/rest/v2/article/?.json
				       	    $reqTwo = 'https://m.skynewsarabia.com/rest/v2/article/'.$id.'.json';
				       	    $resJsonTwo = file_get_contents($reqTwo);
				       	    $DeJsonTwo = json_decode($resJsonTwo);
				       	    
				       	    $BodyHTML = $DeJsonTwo->body;
				       	    $BodyHTML = strip_tags($BodyHTML);

						       	// echo "\n";
						        // echo $type." :: ".$id."\n".$BodyHTML."\n ----- \n";
				       	    $sqli->query("INSERT INTO `NewsTable` (`id`, `idAPI`, `type`, `date`, `headline`, `summary`, `imageUrl`, `BodyHTML`, `videoUrl`, `timeAdd`, `s`, `TypeLine`, `AutoAddID`) VALUES (NULL, '".$id."', '".$type."', '".$date."', '".$headline."', '".$summary."', '".$imageurlTest."', '".$BodyHTML."','', '".$TimeNow."', '1', '".$TypeLine[$i]."','1');");
				       	    // echo "done artcle .. \n";

				        }elseif ($type == 'VIDEO') {
				        	// echo "video";
				        	// 2 : https://m.skynewsarabia.com/rest/v2/video/?.json
				        	

				        	// $reqTwo = 'https://m.skynewsarabia.com/rest/v2/video/'.$id.'.json';
				        	// $resJsonTwo = file_get_contents($reqTwo);
				       	 //    $DeJsonTwo = json_decode($resJsonTwo);
				       	 //    $videoUrlArray = $DeJsonTwo->videoUrl;
				       	    
				       	 //    $videoUrl =  $videoUrlArray[0]->fallbackUrl;



				       	    // $sqli->query("INSERT INTO `NewsTable` (`id`, `idAPI`, `type`, `date`, `headline`, `summary`, `imageUrl`, `BodyHTML`, `videoUrl`, `timeAdd`, `s` , `TypeLine`) VALUES (NULL, '".$id."', '".$type."', '".$date."', '".$headline."', '".$summary."', '".$imageUrl."', '','".$videoUrl."', '".$TimeNow."', '1' , '".$TypeLine[$i]."');");
				       	    // echo "done video .. \n";


				        }

				        



				 }// End if check ..        
				} // End foreach One




		} // End loop .. 
		// save time upate in data base .. 
		$this->UpdateLog();
	} // End function .. 









	public function check(){
		$RowDB = $this->GetLastIDFromNewsDB();
		$RowAPI = $this->GetLastIDFromNewsAPI();
		if($RowDB >= $RowAPI){
			$res = "you have update :)";
			$this->update();
		}else{
			$res = "you not have update :) ";
		}

		return $res;
	}









} // End class :)) 



?>