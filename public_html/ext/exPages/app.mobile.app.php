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


	// $sqli->query("INSERT INTO `Application` (`id`, `name`, `icon`, `description`, `url`, `Type`, `timeAdd`, `ip`, `s`) VALUES (NULL, 'Facebook App', 'http://www.interreg-danube.eu/uploads/media/approved_project_public/0001/08/7d293788e4cf298d720d4d73c46fb9149e22e666.png', 'تطبيق فيس بوك لتواصل الاجتماعي', 'https://www.apkmirror.com/wp-content/themes/APKMirror/download.php?id=410383', 'mobile', '33', '192.168.0.1', '1'), (NULL, 'YouTube', 'https://www.apkmirror.com/wp-content/themes/APKMirror/ap_resize/ap_resize.php?src=https%3A%2F%2Fwww.apkmirror.com%2Fwp-content%2Fuploads%2F2018%2F05%2F5afcf31aaf21f.png&w=96&h=96&q=100', 'منصة يوتيوب لمشاهدة ومشاركة الفيديوهات', 'https://www.apkmirror.com/apk/google-inc/youtube/youtube-13-18-55-release/youtube-13-18-55-5-android-apk-download/download/', 'mobile', '454', '192.168.1.1', '1');");



	

	$q = $sqli->query("SELECT * FROM `Application` WHERE `s` = 1 AND `Type` = 'mobile'");
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
									<a href="./download.php?mob='.$i['id'].'">
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