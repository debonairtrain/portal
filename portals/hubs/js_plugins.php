<script src="js/jquery.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- bootsrap -->
<script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>


<!-- <script src="tab_content/js/tabcontent.js"></script> -->
<!-- <script src="bootstrap-3.3.4/js/username_available.js"></script>
<script src="js/email_available.js"></script> -->
<script src="js/functions.js"></script>
<script src="js/customjs.js"></script>

<!--<script src="../js/jquery-1.10.2.js"></script>  call the ajax files -->




<!-- call DataTables -->
<script type="text/javascript" charset="utf8" src="DataTables-1.10.4/media/js/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf8" src="DataTables-1.10.4/js/dataTables.responsive.js"></script> <!-- making the Table responsive -->
<script type="text/javascript" charset="utf8" src="bootstrap-datatables/js/dataTables.bootstrap.js"></script><!-- making the tables having styles -->





<!-- ########################### call all the jquery ui themes and js files ###########################################-->
<!-- <link rel="stylesheet" href="ui/jquery-ui-1.10.4/themes/base/jquery.ui.all.css">

<script src="ui/jquery-ui-1.10.4/js/jquery-1.10.2.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.core.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.widget.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.mouse.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.button.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.draggable.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.position.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.dialog.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.datepicker.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.slider.js"></script>
<script src="ui/jquery-ui-1.10.4/js/jquery.ui.autocomplete.js"></script> -->

<script>

/********************* date picker *******************/
/*$(function() {
	$( "#datepicker1" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});

	$( "#datepicker2" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});

	$( "#datepicker3" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});

	$( "#datepicker4" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});


});*/
/******************************* date picker ends ************************/
	$(document).ready( function (){

		//when nce cert 1 is selected
		$('#cert1').change(function(){
			$nce1 = $('#cert1').val();

			//when 2 (nce)
			if ($nce1 === '2') {
				//alert($nce1);
				$('#cert1_hide').addClass('hidden');
				$('#cert1_nce').removeClass('hidden');
			}else{
				$('#cert1_hide').removeClass('hidden');
				$('#cert1_nce').addClass('hidden');
			}

		});

		//when nce cert 2 is selected
		$('#cert2').change(function(){
			$nce2 = $('#cert2').val();
			//alert($nce2);
			//when 2 (nce)
			if ($nce2 === '2') {
				//alert($nce2);
				$('#cert2_hide').addClass('hidden');
				$('#cert2_nce').removeClass('hidden');
			}else{
				$('#cert2_hide').removeClass('hidden');
				$('#cert2_nce').addClass('hidden');
			}

		});
		//when nce cert 3 is selected
		$('#cert3').change(function(){
			$nce2 = $('#cert3').val();
			//alert($nce2);
			//when 2 (nce)
			if ($nce2 === '2') {
				//alert($nce2);
				$('#cert3_hide').addClass('hidden');
				$('#cert3_nce').removeClass('hidden');
			}else{
				$('#cert3_hide').removeClass('hidden');
				$('#cert3_nce').addClass('hidden');
			}

		});

		//when entry mode is selected
		$('#paymenttype').change(function(){
			var p_type = $('#paymenttype option:selected').val()
			//for payment type
			if (p_type === 'BANK_BRANCH' || p_type === '' ){

		        $('#yes_btn').addClass('hidden');
		        $('#rrr_info').addClass('hidden');

		    }else{
		      	$('#yes_btn').removeClass('hidden');
		      	$('#rrr_info').removeClass('hidden');
		    }


		});

	/*	//when suggested course is selected
		$('#sug_courses').change(function(){


			var cs = $('#sug_courses option:selected').val();

			//alert(cs);
			if (cs === '' ){

		        $('#change_cs').addClass('hidden');


		    }else{
		      	$('#change_cs').removeClass('hidden');

		    }


		});
*/

	});




</script>
