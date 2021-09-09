/**

 ____             _               ____       __  __
|  _ \  ___   ___| |_ ___  _ __  / ___|  ___|  \/  | ___
| | | |/ _ \ / __| __/ _ \| '__| \___ \ / _ \ |\/| |/ _ \
| |_| | (_) | (__| || (_) | |     ___) |  __/ |  | | (_) |
|____/ \___/ \___|\__\___/|_|    |____/ \___|_|  |_|\___/

		                   Semoo@dr.com
2017.05.13
**/

$(document).ready(function(){
	
	// alert('it working :)) ');

    Bars1();
	Bars2();
	BarsEX();

	NewsSliderHomePageSyria();
	NewsSliderHomePageSport();
	NewsSliderHomePageTechnology();


	$("#ADS1").html('<iframe id="iframeTime" height="477" width="100%" style="background:#f8f8f8;border: 1px solid #eee;" src="./prayer.php"></iframe>');
	$("#ADS1").css({
		    'opacity': 'unset',
		    'background-color': 'initial',
		    'padding': '0',
		    'height': '477px',
		    'margin': '0'
	});

	

	$("#ADS2").hide();


// 
 $('[pid]').click(function(event) {
 	$('[pid]').removeClass('select');
 	var idsClicker = $(this).attr('pid');
 	$('[pid="'+idsClicker+'"]').addClass('select');
 	// alert(idsClicker);
 });




	$(".headerColList ul li div[pid='11']").click(function(event) {
		/* Act on the event */
		$("#ListBarPrograming").toggle(400);
	});




 //    var varle = /s=([^&#=]*)/.exec(window.location.search);
	// var sctionName = varle[1];
	// alert(sctionName);
	


$(".headerColList ul li div").click(function(event) {
	$(".headerColList ul li div").removeClass('select');
	$(this).addClass('select');

});




	// Home page slider 
	
	// setInterval(function(){
	// 	sliderStartHomePage();
	// },8000);


 // $(function() {
    
  // });







});
// End ready  .. 



function NewsSliderHomePageSyria(){
	$(".rslides").empty();
	$.post("./json.IO.php",{NewsSliderHomePageSyria:1},function(c){
		$.each(c.NewsSliderHomePageSyria, function (i, va) {

				var id = va.ID;
				var si = i+1;
				var date = va.date;
				var Title = va.Title;
				var Image = va.imageUrl;
				// var Image = 'https://m.skynewsarabia.com/web/images/'+va.imageUrl.replace('{height}', '400').replace('{width}', '760');
				
				 
			// var i = '<data style="" nid="'+id+'" ni="'+si+'" image="'+Image+'" text="'+Title+'"></data>';
			var i = '<li class="homepageslider"> <a href="./?v='+id+'"> <img src="'+Image+'"> <p>'+Title+'</p> </a> </li>';
			$("#rslidesHomePAge").append(i);
			// console.log(i);
		}); // End each ..
		// sliderStartHomePage();
		$(".rslides").responsiveSlides();
	},"json");

	return false;
}




function NewsSliderHomePageSport(){
	$("#HomePageSportNews").empty();
	$.post("./json.IO.php",{NewsSliderHomePageSport:1},function(c){
		$.each(c.NewsSliderHomePageSport, function (i, va) {

				var id = va.ID;
				var date = va.date;
				var Title = va.Title;
				var Image = va.imageUrl;
				// var Image = 'https://m.skynewsarabia.com/web/images/'+va.imageUrl.replace('{height}', '400').replace('{width}', '760');
				
				 
			var i = '<div class="col-md-4"> <div style="text-align: center;"> <a href="./?v='+id+'" style="text-decoration: none; color: #000;"> <img src="'+Image+'" style="width: 100%"> <p>'+Title+'</p> </a> </div> </div>';
			$("#HomePageSportNews").append(i);
			// console.log(i);
		}); // End each ..
	},"json");

	return false;
}




function NewsSliderHomePageTechnology(){
	$("#HomePageTechnologyNews").empty();
	$.post("./json.IO.php",{NewsSliderHomePageTechnology:1},function(c){
		$.each(c.NewsSliderHomePageTechnology, function (i, va) {

				var id = va.ID;
				var date = va.date;
				var Title = va.Title;
				var Image = va.imageUrl;
				// var Image = 'https://m.skynewsarabia.com/web/images/'+va.imageUrl.replace('{height}', '400').replace('{width}', '760');
				var summary = va.summary;
				 
			var i = '<div style=" text-align: center; background: #fff; padding: 2%; border-radius: 15px; box-shadow: 1px 1px 3px 0px; margin-bottom: 3%; margin-top: 1%; "> <a style="text-decoration: none; color: #000;" href="./?v='+id+'"> <div>'+Title+'</div> <div style=" text-align: right; margin: 2% 1% 2% 1%; ">'+summary+'</div> <div style=" text-align: left; font-size: 0.7rem; ">'+date+'</div> </a> </div>';
			$("#HomePageTechnologyNews").append(i);
			// console.log(i);
		}); // End each ..
	},"json");

	return false;
}










		function sliderStartHomePage(){
			var nii = $("#SliderHomePage").attr("ni");
				// console.log(nii);
				$("#SliderHomePageImageView").attr('src','');
				$("#SliderHomePageTitleView").text('');
				$("#SliderHomePage a").attr("href",'');

				var slector = "#dataSliderHomePage data[ni='"+nii+"']";
					var id = AttrGetValue(slector,'nid');
							switch (nii) {
							    case "1":
								    $("#SliderHomePage").attr("ni",2);
								    var image = $("#dataSliderHomePage data[ni='1']").attr('image');
								    $("#SliderHomePageImageView").attr('src',image);
								    var text = $("#dataSliderHomePage data[ni='1']").attr('text');
								    $("#SliderHomePageTitleView").text(text);
								    var ids = $("#dataSliderHomePage data[ni='1']").attr('nid');
								    $("#SliderHomePage a").attr("href","./?v="+ids);
								    // $("#SliderHomePageImageView").animate({"width": '0%'});
									// $("#SliderHomePageImageView").animate({"width": '100%'});
									$("#SliderHomePageImageView").toggle("slide");
									$("#SliderHomePageImageView").toggle("slide");
									break;
							    


							    case "2":
							        $("#SliderHomePage").attr("ni",3);
							        var image = $("#dataSliderHomePage data[ni='2']").attr('image');
								    $("#SliderHomePageImageView").attr('src',image);
								    var text = $("#dataSliderHomePage data[ni='2']").attr('text');
								    $("#SliderHomePageTitleView").text(text);
								    var ids = $("#dataSliderHomePage data[ni='2']").attr('nid');
								    $("#SliderHomePage a").attr("href","./?v="+ids);
								    // $("#SliderHomePageImageView").animate({"width": '0%'});
									// $("#SliderHomePageImageView").animate({"width": '100%'});
									$("#SliderHomePageImageView").toggle("slide");
									$("#SliderHomePageImageView").toggle("slide");
							        break; 
							   

							    case "3":
								    $("#SliderHomePage").attr("ni",1);
								    var image = $("#dataSliderHomePage data[ni='3']").attr('image');
								    $("#SliderHomePageImageView").attr('src',image);
								    var text = $("#dataSliderHomePage data[ni='3']").attr('text');
								    $("#SliderHomePageTitleView").text(text);
								    var ids = $("#dataSliderHomePage data[ni='3']").attr('nid');
								    $("#SliderHomePage a").attr("href","./?v="+ids);
								    // $("#SliderHomePageImageView").animate({"width": '0%'});
									// $("#SliderHomePageImageView").animate({"width": '100%'});
									$("#SliderHomePageImageView").toggle("slide");
									$("#SliderHomePageImageView").toggle("slide");
								    break;
								

								case undefined:
									$("#SliderHomePage").attr("ni",2);
									var image = $("#dataSliderHomePage data[ni='1']").attr('image');
								    $("#SliderHomePageImageView").attr('src',image);
								    var text = $("#dataSliderHomePage data[ni='1']").attr('text');
								    $("#SliderHomePageTitleView").text(text);
								    var ids = $("#dataSliderHomePage data[ni='1']").attr('nid');
								    $("#SliderHomePage a").attr("href","./?v="+ids);
									
									// $("#SliderHomePageImageView").animate({"width": '0%'});
									// $("#SliderHomePageImageView").animate({"width": '100%'});
									$("#SliderHomePageImageView").toggle("slide");
									$("#SliderHomePageImageView").toggle("slide");

								    break;

							}

		}
		// end function :\\ 

	

		function AttrGetValue(select,attr){
			var se = $(select).attr(attr);
			return se;
		}



function menuKey(){
	// alert("it's working :)) ");
	$('html, body').animate({
        scrollTop: $(".headerColList ul").offset().top
    }, 2000);
    
	$(".headerColList ul").css({
		margin: '2% 0% 0% 0%'
	});

	$(".headerColList ul li").css({
		width: '100%'});
	// $(".headerColList ul").css({
	// 	margin: '-1%'});
	$("#headerList").show('400');
	$("#menuKey").attr({
		onclick: 'menuKeyExit()'});

	return true;

}


function menuKeyExit(){

	$(".headerColList ul li").css({
		width: ''});
	$(".headerColList ul").css({
		margin: ''});
	$("#headerList").hide('slow');	
	$("#menuKey").attr({
		onclick: 'menuKey()'});
	return false;
}




function scrollUp(){
	$('html, body').animate({
        scrollTop: $(".headerr").offset().top
    }, 1000);
    return false;
}









// XHQ
function Bars1(){
	// alert(':)');
	$('#Bars1Scroll span').empty();
	$.post("./json.IO.php",{Bars1:1},function(c){ 	
			$.each(c.BarsSport, function (i, va) {
				var id = va.ID;
				var Title = va.Title;
				
				// alert(Title);
		var i ='&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160; <a id="u32301-2" style="text-decoration: none;color: #000000;" href="./?v='+id+'">'+Title+' </a>        ';
			$('#Bars1Scroll span').append(i);		 
			}); // End each .. 
		},'json');	
	return false;
}




function Bars2(){
	// alert(':)');
	$('#Bars2Scroll span').empty();
	$.post("./json.IO.php",{Bars2:1},function(c){ 	
			$.each(c.BarsSyria, function (i, va) {
				var id =va.ID;
				var Title = va.Title;
				
				// alert(Title);
		var i ='&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160; <a id="u32301-2" style="text-decoration: none;color: #000000;" href="./?v='+id+'">'+Title+' </a>        ';
			$('#Bars2Scroll span').append(i);		 
			}); // End each .. 
		},'json');	
	return false;
}

function BarsEX(){
	$.get("./json.IO.php",{BarsEX:1},function(c){
			// console.log(c);

		var USDTRY = c[1].SellRate;
		var EURTRY = c[2].SellRate;
		var ALT = c[3].SellRate;


		// $('.DivCurrencyUSD').text(USDTRY);
		$('.DivCurrencyUSD').append(USDTRY);
		$('.DivCurrencyEUR').append(EURTRY);
		$('.DivCurrencyALT').append(ALT);
		
	},"json");

		$.get("./json.IO.php",{BarsEX2:1},function(c){
				// sell_price
				var SYPUSD = c['CurrenciesView'][0].usdspy;
				var SYPTRY = c['CurrenciesView'][0].tryspy;
				// console.log();
				$('.DivCurrencyTRYSYP').append(SYPTRY);
				$('.DivCurrencyUSDSYP').append(SYPUSD);
		},"json");
	return false;
}











