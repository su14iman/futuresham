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

		@$TypePage = $_GET['s'];

			if($TypePage == 1){
				include('./ext/htmlpages/NewsList.html');
			}elseif($TypePage == 2){
				include('./ext/htmlpages/NewsAdd.html');
			}

		@$rIDForEdit = $_GET['e'];
			if(!empty($rIDForEdit)){
				$rID = intval($rIDForEdit);
				include('./ext/htmlpages/NewsEdit.php');
			}



// include('./ext/htmlpages/NewsList.html');
// include('./ext/htmlpages/NewsAdd.html');



include('./ext/pages/footer.php');


?>