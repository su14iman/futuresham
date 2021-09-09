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


	$page = file_get_contents("http://prayertimes.today/embed/?city=222&azan=true&time=true&intro=true&next-prayer=true&remove-link=true&width=100%&lang=ar&color=9c518a");

		// <a rel="dofollow" href="http://prayertimes.today/turkey-tr/antep-222.html" target="_blank" class="tw-main-title"> مواقيت الصلاة في عنتاب </a>


		$HTMLOld = '<a rel="dofollow" href="http://prayertimes.today/turkey-tr/antep-222.html" target="_blank" class="tw-main-title"> مواقيت الصلاة في عنتاب </a>';
		$HTMLNew ='<a rel="dofollow" class="tw-main-title"> مواقيت الصلاة في عنتاب </a>';
	$page = str_replace($HTMLOld,$HTMLNew,$page);

	echo $page;
	// var_dump($page);

?>


