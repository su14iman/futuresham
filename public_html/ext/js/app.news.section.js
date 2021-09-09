$(document).ready(function(){


   var varle = /s=([^&#=]*)/.exec(window.location.search);
	var sctionName = varle[1];


	window.HostRequest = "";
	if(sctionName == 'Sport'){
		// alert('1')
		NewsSectionSliderDataGet1();
		NewsSectionNavDataGet1();
		$(".headerColList ul li div").removeClass('select');
		$('.headerColList ul li div[pid="10"]').addClass('select');
		

	}else if(sctionName == 'Syria'){
		// alert(2);
		NewsSectionSliderDataGet2();
		NewsSectionNavDataGet2();
		$(".headerColList ul li div").removeClass('select');
		$('.headerColList ul li div[pid="9"]').addClass('select');
		

	}else if(sctionName == 'Technology'){
		// alert(3);
		NewsSectionSliderDataGet3();
		NewsSectionNavDataGet3();
		$(".headerColList ul li div").removeClass('select');
		$('.headerColList ul li div[pid="5"]').addClass('select');
		

	}else{
		alert(':)');
		window.location.replace("/");
	}





	// News Section slider 
	
	// setInterval(function(){
	// 	sliderStartNewsSection();
	// },8000);


 // $(function() {
 	// $(".homepageslider").remove();
  //   $(".rslides2").responsiveSlides();

  // });






});

// End ready  .. 








function NewsSectionSliderDataGet1(){
	$(".rslides2").empty();
	$.post("./json.IO.php",{NewsSectionSpor:1},function(c){
		$.each(c.NewsSectionSpor, function (i, va) {
			
			if(i >= 0 && i<3){
		
				var id = va.ID;
				var si = i+1;
				var date = va.date;
				var Title = va.Title;
				var Image = va.imageUrl;
				// var Image = 'https://m.skynewsarabia.com/web/images/'+va.imageUrl.replace('{height}', '400').replace('{width}', '760');
				
				 
			var i = '<li> <a href="./?v='+id+'"> <img src="'+Image+'"> <p>'+Title+'</p> </a> </li>';
			$(".rslides2").append(i);
				// console.log(id);
			} // End if for (i)
		}); // End each ..
		// sliderStartNewsSection();
		$(".homepageslider").remove();
		$(".rslides2").responsiveSlides();
	},"json");

	return false;
}


function NewsSectionSliderDataGet2(){
	$(".rslides2").empty();
	$.post("./json.IO.php",{NewsSectionSyria:1},function(c){
		$.each(c.NewsSectionSyria, function (i, va) {
			
			if(i >= 0 && i<3){
		
				var id = va.ID;
				var si = i+1;
				var date = va.date;
				var Title = va.Title;
				var Image = va.imageUrl;
				// var Image = 'https://m.skynewsarabia.com/web/images/'+va.imageUrl.replace('{height}', '400').replace('{width}', '760');
				
				 
			var i = '<li> <a href="./?v='+id+'"> <img src="'+Image+'"> <p>'+Title+'</p> </a> </li>';
			$(".rslides2").append(i);
				// console.log(id);
			} // End if for (i)
		}); // End each ..
		// sliderStartNewsSection();
		$(".homepageslider").remove();
		$(".rslides2").responsiveSlides();
	},"json");

	return false;
}


function NewsSectionSliderDataGet3(){
	$(".rslides2").empty();
	$.post("./json.IO.php",{NewsSectionTechnolog:1},function(c){
		$.each(c.NewsSectionTechnolog, function (i, va) {
			
			if(i >= 0 && i<3){
		
				var id = va.ID;
				var si = i+1;
				var date = va.date;
				var Title = va.Title;
				var Image = va.imageUrl;
				// var Image = 'https://m.skynewsarabia.com/web/images/'+va.imageUrl.replace('{height}', '400').replace('{width}', '760');
				
				 
			var i = '<li> <a href="./?v='+id+'"> <img src="'+Image+'"> <p>'+Title+'</p> </a> </li>';
			$(".rslides2").append(i);
				// console.log(id);
			} // End if for (i)
		}); // End each ..
		// sliderStartNewsSection();
		$(".homepageslider").remove();
		$(".rslides2").responsiveSlides();
	},"json");

	return false;
}




function NewsSectionNavDataGet1(){
	$("#SectionNewsItems").empty();
	$.post("./json.IO.php",{NewsSectionSpor:1},function(c){
		$.each(c.NewsSectionSpor, function (i, va) {
			if(i>2 && i<=5){
				var id = va.ID;
				var date = va.date;
				var Title = va.Title;
				var Image = va.imageUrl;
				// var Image = 'https://m.skynewsarabia.com/web/images/'+va.imageUrl.replace('{height}', '400').replace('{width}', '760');
				
				 
				var i = '<div class="col-md-4"> <div style="text-align: center;"> <a href="./?v='+id+'" style="text-decoration: none; color: #000;"> <img src="'+Image+'" style="width: 100%"> <p>'+Title+'</p> </a> </div> </div>';
				$("#SectionNewsItems").append(i);
				// console.log(i);
			}
		}); // End each ..
	},"json");

	return false;
}



function NewsSectionNavDataGet2(){
	$("#SectionNewsItems").empty();
	$.post("./json.IO.php",{NewsSectionSyria:1},function(c){
		$.each(c.NewsSectionSyria, function (i, va) {
			if(i>2 && i<=5){
				var id = va.ID;
				var date = va.date;
				var Title = va.Title;
				var Image = va.imageUrl;
				// var Image = 'https://m.skynewsarabia.com/web/images/'+va.imageUrl.replace('{height}', '400').replace('{width}', '760');
				
				 
				var i = '<div class="col-md-4"> <div style="text-align: center;"> <a href="./?v='+id+'" style="text-decoration: none; color: #000;"> <img src="'+Image+'" style="width: 100%"> <p>'+Title+'</p> </a> </div> </div>';
				$("#SectionNewsItems").append(i);
				// console.log(i);
			}
		}); // End each ..
	},"json");

	return false;
}



function NewsSectionNavDataGet3(){
	$("#SectionNewsItems").empty();
	$.post("./json.IO.php",{NewsSectionTechnolog:1},function(c){
		$.each(c.NewsSectionTechnolog, function (i, va) {
			if(i>2 && i<=5){
				var id = va.ID;
				var date = va.date;
				var Title = va.Title;
				var Image = va.imageUrl;
				// var Image = 'https://m.skynewsarabia.com/web/images/'+va.imageUrl.replace('{height}', '400').replace('{width}', '760');
				
				 
				var i = '<div class="col-md-4"> <div style="text-align: center;"> <a href="./?v='+id+'" style="text-decoration: none; color: #000;"> <img src="'+Image+'" style="width: 100%"> <p>'+Title+'</p> </a> </div> </div>';
				$("#SectionNewsItems").append(i);
				// console.log(i);
			}
		}); // End each ..
	},"json");

	return false;
}





		function sliderStartNewsSection(){
			var nii = $("#SliderSectionNews").attr("ni");
				// console.log(nii);
				$("#SliderSectionNewsImageView").attr('src','');
				$("#SliderSectionNewsTitleView").text('');
				$("#SliderSectionNews a").attr("href",'');

				var slector = "#dataSliderSectionNews data[ni='"+nii+"']";
					var id = AttrGetValue(slector,'nid');
							switch (nii) {
							    case "1":
								    $("#SliderSectionNews").attr("ni",2);
								    var image = $("#dataSliderSectionNews data[ni='1']").attr('image');
								    $("#SliderSectionNewsImageView").attr('src',image);
								    var text = $("#dataSliderSectionNews data[ni='1']").attr('text');
								    $("#SliderSectionNewsTitleView").text(text);
								    var ids = $("#dataSliderSectionNews data[ni='1']").attr('nid');
								    $("#SliderSectionNews a").attr("href","./?v="+ids);
								    // $("#SliderSectionNewsImageView").animate({"width": '50%'});
									// $("#SliderSectionNewsImageView").animate({"width": '100%'});
									$("#SliderHomePageImageView").toggle("slide");
									$("#SliderHomePageImageView").toggle("slide");
									break;
							    


							    case "2":
							        $("#SliderSectionNews").attr("ni",3);
							        var image = $("#dataSliderSectionNews data[ni='2']").attr('image');
								    $("#SliderSectionNewsImageView").attr('src',image);
								    var text = $("#dataSliderSectionNews data[ni='2']").attr('text');
								    $("#SliderSectionNewsTitleView").text(text);
								    var ids = $("#dataSliderSectionNews data[ni='2']").attr('nid');
								    $("#SliderSectionNews a").attr("href","./?v="+ids);
								    // $("#SliderSectionNewsImageView").animate({"width": '50%'});
									// $("#SliderSectionNewsImageView").animate({"width": '100%'});
									$("#SliderHomePageImageView").toggle("slide");
									$("#SliderHomePageImageView").toggle("slide");
							        break; 
							   

							    case "3":
								    $("#SliderSectionNews").attr("ni",1);
								    var image = $("#dataSliderSectionNews data[ni='3']").attr('image');
								    $("#SliderSectionNewsImageView").attr('src',image);
								    var text = $("#dataSliderSectionNews data[ni='3']").attr('text');
								    $("#SliderSectionNewsTitleView").text(text);
								    var ids = $("#dataSliderSectionNews data[ni='3']").attr('nid');
								    $("#SliderSectionNews a").attr("href","./?v="+ids);
								    // $("#SliderSectionNewsImageView").animate({"width": '50%'});
									// $("#SliderSectionNewsImageView").animate({"width": '100%'});
									$("#SliderHomePageImageView").toggle("slide");
									$("#SliderHomePageImageView").toggle("slide");
								    break;
								

								case undefined:
									$("#SliderSectionNews").attr("ni",2);
									var image = $("#dataSliderSectionNews data[ni='1']").attr('image');
								    $("#SliderSectionNewsImageView").attr('src',image);
								    var text = $("#dataSliderSectionNews data[ni='1']").attr('text');
								    $("#SliderSectionNewsTitleView").text(text);
								    var ids = $("#dataSliderSectionNews data[ni='1']").attr('nid');
								    $("#SliderSectionNews a").attr("href","./?v="+ids);
									// $("#SliderSectionNewsImageView").animate({"width": '50%'});
									// $("#SliderSectionNewsImageView").animate({"width": '100%'});
									$("#SliderHomePageImageView").toggle("slide");
									$("#SliderHomePageImageView").toggle("slide");
								    break;

							}

		}
		// end function :\\ 


