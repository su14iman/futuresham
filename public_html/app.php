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
    include('./ext/service/config.app.php');
    include('./ext/service/class.json.io.php');

    include("./ext/pages/header.php");

    	$TypePageGET = $_GET['v'];
 			
    	if($TypePageGET == 'pc'){
    		include('./ext/exPages/app.pc.app.php');
    		$error = "";
    	}elseif($TypePageGET == 'moblie'){
    		include('./ext/exPages/app.mobile.app.php');
    		$error = "";
    	}else{
    		$error = "
    			<div style='text-align: center; margin-top: 2%; padding-top:2%; height: 292px;'>
    				<h3>There seems to be an error :))</h3>
    			</div>
    		";
    	}


    		echo @$error;
    // include('./ext/exPages/app.pc.app.php');
     // include('./ext/exPages/app.mobile.app.php');
    // echo '<script type="text/javascript" src="./ext/js/app.services.js"></script>';    










    include("./ext/pages/footer.php");
?>