<?php 

	// $rID	
	$rID = sIO($rID);
	$q = $sqli->query("SELECT * FROM `NewsTable` WHERE `id` = '$rID'");
				$FetchRow = $q->fetch_array();
					$i['ID'] = $FetchRow['id'];
					$i['date'] = $FetchRow['date'];
					$i['Title'] = htmlentities($FetchRow['headline']);
					$i['Summary'] = $FetchRow['summary'];
					$i['imageUrl'] = $FetchRow['imageUrl'];
					$i['BodyHTML'] = $FetchRow['BodyHTML'];
					$i['AutoAddID'] = $FetchRow['AutoAddID'];
					
 ?>

<style type="text/css">
	
#FormDiv{

}

formm{
	text-align: center;

}

formm div {
	width: 70%;
	margin: auto;
	background-color: #fdfdfd;
	padding: 2% 2% 2% 4%;
	box-shadow: 0px 0px 1px 0px;
	text-align: left;
}

formm div label{
	float: left;
	margin-left: -2%;
	margin-top: 2%;
}

formm div input{
	width: 100%;
}

formm div textarea{
	width: 100%;
}


formm div select{
	width: 100%;
}





formm div input[type="submit"]{
	width: 40%;
	padding: 2%;
	background-color: #01cb78;
	color:#fff;
	cursor: pointer;
}

</style>

<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.9/adapters/jquery.js"></script>



		<div style="width: 70%; margin: auto; background-color: #fdfdfd; padding: 2% 2% 2% 4%; box-shadow: 0px 0px 1px 0px; text-align: left;">
			<h2>Edit Page .. </h2>
		</div>

<div id="FormDiv">
	<formm>
		



		<div>
			<label>
				Title:
			</label><br>
			<input type="text" value="<?php echo $i['Title']; ?>" placeholder="Enter Title .." name="AddSoftwareName" id="EditPageTitle">
			<input type="hidden" value="<?php echo $i['ID']; ?>" id="EditPageID">
		</div>


		<div>
			<label>
				Summary:
			</label><br>
			<input type="text" value="<?php echo $i['Summary']; ?>" placeholder="Enter Summary .." name="AddSoftwareName" id="EditPageSummary">
		</div>

		
		<div>


			
			<!-- <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script> -->
			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/adapters/jquery.js"></script> -->

			

			<textarea id="EditPageBodyHTML" name="EditPageBodyHTML" placeholder="Enter BodyHTML here .. ">
				<?php echo $i['BodyHTML']; ?>
			</textarea>
		</div>
		

		<div>
			<label>
				Image:
			</label><br>
			<img width="300" height="300" src="<?php echo $i['imageUrl']; ?>"><br>
			<input id="EditPageImage" type="url" value="<?php echo $i['imageUrl']; ?>" placeholder="Enter Image Url ... " name="AddSoftwareURL">
		</div>




		<div style=" text-align: center; ">
			<input onclick="EditData()" type="submit" value="Add" name="">
		</div>



	</formm>
</div>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/adapters/jquery.js"></script> -->
<script type="text/javascript">
	
	$(document).ready(function () {
  			// alert('aa');

  			CKEDITOR.replace( 'EditPageBodyHTML' );
  			// alert(CKEDITOR.instances["editor1"].getData());
	});

	function EditData(){
		// alert(':)');
		var EditPageTitle = $("#EditPageTitle").val();
		var EditPageID = $("#EditPageID").val();
		var EditPageSummary = $("#EditPageSummary").val();
		var EditPageBodyHTML = CKEDITOR.instances['EditPageBodyHTML'].getData();
		var EditPageImage = $("#EditPageImage").val();
		// alert(EditPageTitle.val());
		if( EditPageTitle !== '' && EditPageID !=='' && EditPageSummary !=='' && EditPageBodyHTML !== '' && EditPageImage !==''){

			$.post('./json.php', {EditPageTitle:EditPageTitle,EditPageID:EditPageID,EditPageSummary:EditPageSummary,EditPageBodyHTML:EditPageBodyHTML,EditPageImage:EditPageImage}, function(c) {
					var status = c.EditNewsID['status'];
					if(status =='ok'){
						alert('ok updated');
					}else{
						alert('Error');
					}
			},'json');

			// var desc = CKEDITOR.instances.DSC.getData();
			// var desc = CKEDITOR.instances.editor1.getData();
			// var desc = CKEDITOR.instances['EditPageBodyHTML'].getData();

			// alert(desc)
		}else{
			alert('error');
		}
		return false;
	}

	
</script>


