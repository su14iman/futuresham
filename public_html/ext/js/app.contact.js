$(document).ready(function(){


 var varle = /s=([^&#=]*)/.exec(window.location.search);
	var sctionName = varle[1];


	window.HostRequest = "";
	if(sctionName == 'Ads'){
		// alert('1')
		$(".headerColList ul li div").removeClass('select');
		$('.headerColList ul li div[pid="4"]').addClass('select');
		$('#FormCformType').val('Ads');

	}else if(sctionName == 'us'){
		// alert(2);
		$(".headerColList ul li div").removeClass('select');
		$('.headerColList ul li div[pid="3"]').addClass('select');
		$("#FormCwebsiteDiv").hide();
		$('#FormCformType').val('us');

	}else{
		alert(':)');
		window.location.replace("/");
	}




// $("#FormSubmit").click(function(event) {
//     $.post( './json.IO.php', $('#AppContactWidth').serialize(), function(data) {
//          // ... do something with response from server
//          alert(':(');
//        },'json');
//     // $('#AppContactWidth').submit(function(){
//     // 	alert('done :) ');
//     // 	// return false;
//     // });
// });


$('#AppContactWidth').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url : $(this).attr('action'),
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                // $("#form_output").html(data);
              	$('#FormCname').val('');
              	$('#FormCemail').val('');
              	$('#FormCmsg').val('');
              	$('#FormCcompany').val('');
              	$('#FormCnumberphone').val('');
              	$('#FormCwebSite').val('');
              	alert('لقد تم استلام طلبك بنجاح، سنقوم برد على رسالتك باسرع وقت ممكن .. ');
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });

// FormCname
// FormCemail
// FormCmsg
// FormCcompany
// FormCnumberphone
// FormCwebSite
// FormCformType


// status
// ok
// InboxAdd







});
// End ready function .. 