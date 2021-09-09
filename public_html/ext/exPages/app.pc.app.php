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


$JsonIO = new JsonIO();


	// $sqli->query("INSERT INTO `Application` (`id`, `name`, `icon`, `description`, `url`, `Type`, `timeAdd`, `ip`, `s`) VALUES (1, 'Adober Reader\r\n', 'https://www.mutaz.net/free-programs/prog-img/xW2LHUB.png', 'برنامج لقارائة الكتب الالكترونية.برنامج لقارائة الكتب الالكترونية.برنامج لقارائة الكتب الالكترونية.\r\n', 'https://ia601500.us.archive.org/19/items/AdAPDC18011/Ad_A_P_DC_18_011.iso', 'pc', '1525666512', '192.168.1.1', 1), (2, 'Microsoft Office 2003', 'https://www.mutaz.net/free-programs/prog-img/kyiyE06.png', 'مايكروسوفت اوفيس 2003', 'https://freeprograms.win/?url=MTQ5', 'pc', '1525666510', '::1', 1);");



	

	$q = $sqli->query("SELECT * FROM `Application` WHERE `s` = 1 AND `Type` = 'pc'");
		while ($FetchQuery = $q->fetch_array()) {
			$i['id'] = $FetchQuery['id'];
			$i['name'] = $FetchQuery['name'];
			$i['icon'] = $FetchQuery['icon'];
			$i['description'] = $FetchQuery['description'];
			$i['url'] = $FetchQuery['url'];
			$i['timeAdd'] = $FetchQuery['timeAdd'];
			$i['ip'] = $FetchQuery['ip'];



?>




<div class="row" style="direction: rtl; margin-bottom: 5%;">
		




<?php


		echo '
		<div class="col-md-8" style="background-color: #fff;
				width: 98%;
				margin:auto;
				 border-radius: 4px;
				 padding: 1%;
				 border: 1px solid #d4d4d4;
				 border-left: 5px solid #9c518a;
				 box-shadow: -1px 0px 4px 0px;
		
				 ">
		
					<div style="float: right; text-align: center; margin: 1%;">
						<img style="width: 90px; border-radius: 4px;" src="'.$i['icon'].'">
						
					</div>
		
		
					<div style=" float: left; width: 60%; height: 100%;">
						<table  style=" direction: rtl;width: 100%; text-align: right;  ">
							<tr>
								<td>اسم البرنامج:</td>
								<td>'.$i['name'].'</td>
							</tr>
		
							<tr>
								<td>وصف البرنامج:</td>
								<td>'.$i['description'].'</td>
							</tr>
		
							<tr>
								<td></td>
								<td style="float: left;">
									<a href="./download.php?pc='.$i['id'].'">
										<button style="
										background-color:#9c518a;
										color:#fff; 
										padding: 10%;
										border-radius: 3px;
										margin-left:10px;
										
										cursor: pointer;
									">Download</button>
									</a>
								</td>
							</tr>
						</table>
					</div>

				</div>
				</div>
				
		
		';


	
	} // End while .. 

?>


</div>