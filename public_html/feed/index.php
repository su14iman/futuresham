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
	include("../ext/service/config.app.php");
 	header("Content-Type: application/xml; charset=utf-8");
 	// header("Content-Type: text/xml; charset=utf-8");



 	// $rssfeed = '<?xml version="1.0" encoding="utf-8">';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>RSS feed</title>';
    $rssfeed .= '<link>http://futuresham.com/</link>';
    $rssfeed .= '<description>Future Sham RSS feed</description>';
    $rssfeed .= '<language>ar-sa</language>';
    $rssfeed .= '<copyright>Copyright (C) 2018 futuresham.com</copyright>';


    	$qu = $sqli->query("SELECT * FROM `NewsTable` WHERE `s` = 1 order by `id` desc");
    		while ($row = $qu->fetch_array()) {
    			$rssfeed .= '<item>';
		        $rssfeed .= '<title>'.$row["headline"].'</title>';
		        $rssfeed .= '<description>'.$row["BodyHTML"].'</description>';
		        $rssfeed .= '<link>http://futuresham.com/?v='.$row["id"].'</link>';
		        $rssfeed .= '<pubDate>'.$row["date"].'</pubDate>';
		        $rssfeed .= '</item>';	
    		}







    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
 
    echo $rssfeed;
?>
