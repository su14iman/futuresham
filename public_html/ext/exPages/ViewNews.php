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

// echo $IDNews; 

@$newsID = intval(sIO($IDNews));
$JsonIO = new JsonIO();
$NewsItem = $JsonIO->PHPNewsID($newsID)['NewsID'][0];

// $Image = "https://m.skynewsarabia.com/web/images/".$NewsItem['imageUrl'];
// $Image = str_replace('{height}','400',$Image);
// $Image = str_replace('{width}','760',$Image);
$Image = $NewsItem['imageUrl'];
// Summary
if($NewsItem == NULL){
	$errorNull = 1;
}


// ?v=

?>


<div class="row" style="direction: rtl; text-align: center; margin-bottom: 2%;">
	<div class="col-md-8">









			

		<div id="itemNewsView" style="margin: 0% 1% 1% 1%; padding: 1%;">
			



			<a href="#" style="text-decoration: none; color: #000;">
				<div class="imageView" style="text-align: center;">
					<img id="itemNewsImageView" src="<?php echo $Image;  ?>" style="">
					<!-- width: 90%; height: 360px -->




				</div>

				<div class="DescView">
					<div class="row">


						<div class="col-sm-12 TitleView" style="text-align: right; padding-left: 10%;padding-right: 10%; margin-top: 4%; ">
							<p id="itemNewsTitleView" style="font-size: 1.5rem">
								<?php echo $NewsItem['Title']; ?>
							</p> 
						</div>
					</div>
				</div>
			</a>





		</div>









	</div>











	<div class="col-md-4">
		
		<div id="ADS1" style="width: 100%; height: 300px; background-color: #7F7F7F; color:#fff; padding: 15%; margin: 1%; border-color: #000000; opacity: 0.15;"> مساحة اعلانية</div>

		<div id="ADS2" style="width: 100%; height: 200px; background-color: #7F7F7F; color:#fff; padding: 15%; margin: 1%; border-color: #000000; opacity: 0.15;"> مساحة اعلانية</div>
	</div>
</div>
<!-- end row -->





<div class="row">
	<div class="col-md-12" style="text-align: right; direction: rtl; margin-bottom: 2%;">
		<p id="itemNewsTextView" style="    line-height: 2;">
			<?php echo $NewsItem['Summary'] ?>
		</p>

		<p id="itemNewsTextView" style="    line-height: 2;">
			<?php echo strip_tags($NewsItem['BodyHTML']); ?>
		</p>
	</div>
</div>

<?php

if($errorNull ==1){
ob_get_clean();
		echo '
		<div class="row" style="
    padding-top:  2%;
    margin-bottom:  10%;
    margin-top: 2%;
">
	<div class="col-md-12" style="text-align: center;direction: rtl;margin-bottom: 2%;">
        <h3>هذا الخبر غير متوفر او قد تم ازلته</h3>


	</div>
</div>
	';
}

?>





