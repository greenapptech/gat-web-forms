<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Web Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="<?php echo base_url();?>assets/css/jquery.signaturepad.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
</head>
<body>
	<div class="main-wpr">
		<div class="container">
			<div class="form-layout ">
				<form class="cutom-from" id="web-form" action="<?php echo base_url();?>index.php/welcome/control_form" method="post">
					<div class="from-header">
						<h1>Inter-Assets/Materials Agreement Control From</h1>
						<p>Submit Completed Form to:The Inventory Management Coordinator</p>
					</div>
					<div class="from-inner row">
						<div class="col-md-5 offset-md-1">
							<div class="radio radio-success ">
								<input type="radio" name="transfer_type" id="temp_transfer" <?php echo set_radio('transfer_type', '1'); ?>  value="1"> 
								<label for="temp_transfer"> Temporary move/transfer </label>
							</div>
						</div>
						<div class="col-md-5">
							<div class="radio radio-success">
								<input type="radio" name="transfer_type" id="per_transfer" <?php echo set_radio('transfer_type', '2'); ?> value="2"> 
								<label for="per_transfer"> Permanent move/transfer </label>
							</div>
						<span id="err1" class="text-danger"><?php echo form_error('transfer_type'); ?></span>
						</div>

						<div class="col-md-10 offset-md-1">
							<div class="form-group row">
								<label class="col-md-6">Department/Ministry releasing assets/materials: </label>
								<div class="col-md-6">
									<select id="releasing_assets" class="form-control" name="releasing_assets">
										<option value="">Select Department</option>
										<option value="a" <?php echo set_select('releasing_assets','a');?> >A</option>
										<option value="b" <?php echo set_select('releasing_assets','b');?>>B</option>
										<option value="c" <?php echo set_select('releasing_assets','c');?>>C</option>
									</select>
									<span id="err2" class="text-danger"><?php echo form_error('releasing_assets'); ?></span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-6">Department/Ministry requesting assets/materials: </label>
								<div class="col-md-6">
									<select id="requesting_assets" class="form-control" name="requesting_assets">
										<option value="">Select Department</option>
										<option value="a" <?php echo set_select('requesting_assets','a');?>>A</option>
										<option value="b" <?php echo set_select('requesting_assets','b');?>>B</option>
										<option value="c" <?php echo set_select('requesting_assets','c');?>>C</option>
									</select>
									<span id="err3" class="text-danger"><?php echo form_error('requesting_assets'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-md-5 offset-md-1">
							<div class="form-group row">
								<label class="col-md-5">Check Out Date:</label>
								<div class="col-md-7">
									<input id="check_out_Date" type="text" name="check_out_Date" class="form-control custom-datepicker" value="<?php echo set_value('check_out_Date'); ?>">
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group row">
								<label class="col-md-5">Return Date:</label>
								<div class="col-md-7">
									<input type="text" name="return_date" class="form-control custom-datepicker" value="<?php echo set_value('return_date'); ?>">
								</div>
							</div>
						</div>
						<div class="col-md-1 p-0">
							<button class="btn btn-success btn-rounded add-row" type="button">Add More +</button>
						</div>
						<div class="col-md-12">
							<div class="table responsive custom-table">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width: 300px;">Item(s) Detail Description - (Model)</th>
											<th>Serial #</th>
											<th>TG Tag #</th>
											<th>From</th>
											<th>To</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr >
											<td ><textarea name="model[]" class="form-control"><?php echo set_value('model[0]'); ?></textarea>
											</td>
											<td><textarea name="serial[]" class="form-control"><?php echo set_value('serial[0]'); ?></textarea></td>
											<td><textarea name="tg_tag[]" class="form-control"><?php echo set_value('tg_tag[0]'); ?></textarea></td>
											<td><input type="text" name="from[]" class="form-control custom-datepicker" value="<?php echo set_value('from[0]'); ?>"></td>
											<td><input type="text" name="to[]" class="form-control custom-datepicker" value="<?php echo set_value('to[0]'); ?>"></td>
											<td><input type="text" name="Price[]" class="form-control" value="<?php echo set_value('Price[0]'); ?>"></td>
										</tr>
										<tr>
											<td><textarea name="model[]" class="form-control"><?php echo set_value('model[1]'); ?></textarea></td>
											<td><textarea name="serial[]" class="form-control"><?php echo set_value('serial[1]'); ?></textarea></td>
											<td><textarea name="tg_tag[]" class="form-control"><?php echo set_value('tg_tag[1]'); ?></textarea></td>
											<td><input type="text" name="from[]" class="form-control  custom-datepicker" value="<?php echo set_value('from[1]'); ?>"></td>
											<td><input type="text" name="to[]" class="form-control custom-datepicker" value="<?php echo set_value('to[1]'); ?>"></td>
											<td><input type="text" name="Price[]" class="form-control" value="<?php echo set_value('Price[1]'); ?>"></td>
										</tr>
										<tr>
											<td><textarea name="model[]" class="form-control"><?php echo set_value('model[2]'); ?></textarea></td>
											<td><textarea name="serial[]" class="form-control"><?php echo set_value('serial[2]'); ?></textarea></td>
											<td><textarea name="tg_tag[]" class="form-control"><?php echo set_value('tg_tag[2]'); ?></textarea></td>
											<td><input type="text" name="from[]" class="form-control custom-datepicker" value="<?php echo set_value('from[2]'); ?>"></td>
											<td><input type="text" name="to[]" class="form-control custom-datepicker" value="<?php echo set_value('to[2]'); ?>"></td>
											<td><input type="text" name="Price[]" class="form-control" value="<?php echo set_value('Price[2]'); ?>"></td>
										</tr>
										<tr>
											<td><textarea name="model[]" class="form-control"><?php echo set_value('model[3]'); ?></textarea></td>
											<td><textarea name="serial[]" class="form-control"><?php echo set_value('serial[3]'); ?></textarea></td>
											<td><textarea name="tg_tag[]" class="form-control"><?php echo set_value('tg_tag[3]'); ?></textarea></td>
											<td><input type="text" name="from[]" class="form-control custom-datepicker" value="<?php echo set_value('from[3]'); ?>"></td>
											<td><input type="text" name="to[]" class="form-control custom-datepicker" value="<?php echo set_value('to[3]'); ?>"></td>
											<td><input type="text" name="Price[]" class="form-control" value="<?php echo set_value('Price[3]'); ?>"></td>
										</tr>
										<tr>
											<td><textarea name="model[]" class="form-control"><?php echo set_value('model[4]'); ?></textarea></td>
											<td><textarea name="serial[]" class="form-control"><?php echo set_value('serial[4]'); ?></textarea></td>
											<td><textarea name="tg_tag[]" class="form-control"><?php echo set_value('tg_tag[4]'); ?></textarea></td>
											<td><input type="text" name="from[]" class="form-control custom-datepicker" value="<?php echo set_value('from[4]'); ?>"></td>
											<td><input type="text" name="to[]" class="form-control custom-datepicker" value="<?php echo set_value('to[4]'); ?>"></td>
											<td><input type="text" name="Price[]" class="form-control" value="<?php echo set_value('Price[4]'); ?>"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-12">
							<p>By signing this form, I assume all responsibility for the use and handling of the assets /equipment(s) listed above. Costs associate to repair or replace the assets /equipment(s) due to damage beyond normal use, misplaced or stolen will be incurred by the borrower. I also acknowledge that tl1e assets/equipment(s) has loaned to me in good condition with any notes or exceptions stated in the comments sections below and will be used for the sole purpose of MINISTRY use only.</p>
						</div>
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-md-3">Purpose of transfer/loaner: </label>
								<div class="col-md-9">
									<input id="loaner" type="text" name="loaner" class="form-control" value="<?php echo set_value('loaner'); ?>">
									<span id="err4" class="text-danger"><?php echo form_error('loaner'); ?></span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3">Comments: </label>
								<div class="col-md-9">
									<input type="text" name="comment" class="form-control" value="<?php echo set_value('comment'); ?>">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<label>Request made by:</label>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-md-6">Ministry Leader/IS Name</label>
								<div class="col-md-6">
									<input type="text" name="is_name" class="form-control" value="<?php echo set_value('is_name'); ?>">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-md-3">Signature:</label>
								<div class="col-md-9">
									<div id="signArea" >
										<div class="sig sigWrapper">
											<div class="typed"></div>
											<canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
										</div>
										<p class="clearButton"><a href="#clear">Clear</a></p>
									</div>
									<input type="hidden" id="sign" name="sign" class="form-control" value="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-md-6">Senior Pastor/Designee Name</label>
								<div class="col-md-6">
									<input type="text" name="designee_name" class="form-control" value="<?php echo set_value('designee_name'); ?>">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-md-3">Signature:</label>
								<div class="col-md-9">
									<div id="signArea1" >
										<div class="sig sigWrapper">
											<div class="typed"></div>
											<canvas class="sign-pad" id="sign-pad1" width="300" height="100"></canvas>
										</div>	
										<p class="clearButton"><a href="#clear">Clear</a></p>									
									</div>
									<input type="hidden" id="sign1" name="sign1" class="form-control" value="">
								</div>
							</div>
						</div>
					</div>
					<div class="from-footer row">
						<div class="col-md-12">
							<p>*** Must be signed by either Ministy Leader or Inventory Specialist ***</p>
							<div class="form-group">
								<button id="btnSaveSign" type="button" onclick="validation_form1()"  name="save" class="btn btn-success btn-custom">Save &amp; Next</button>
							</div>
						</div>
					</div>					
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
	<script  type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/numeric-1.2.6.min.js"></script> 
	<script src="<?php echo base_url();?>assets/js/bezier.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.signaturepad.js"></script> 
	<script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
	<script src="<?php echo base_url();?>assets/js/json2.min.js"></script>
	
	<script>
		$( function() {
			$( ".custom-datepicker" ).datepicker();
		});


		$(document).ready(function() {
			$('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
			$('#signArea1').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
		});


			
			$("#btnSaveSign").click(function(e){
				
				html2canvas([document.getElementById('sign-pad')], {
					onrendered: function (canvas) {
						var canvas_img_data = canvas.toDataURL('image/png');
						var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
						$('#sign').val(img_data);
					}
				});
				html2canvas([document.getElementById('sign-pad1')], {
					onrendered: function (canvas) {
						var canvas_img_data1 = canvas.toDataURL('image/png');
						var img_data1 = canvas_img_data1.replace(/^data:image\/(png|jpg);base64,/, "");
						$('#sign1').val(img_data1);
					}
				});
				setTimeout(function(){ 
					$('form#web-form').submit();	
				}, 500);
			});


		$(document).ready(function(){
	        var max_fields = 10; //maximum input boxes allowed
	        var x = 1; //initlal text box count
	        
	        $(".add-row").click(function(){  
	        if(x < max_fields)
	        {
	        //max input box allowed
	            x++; //text box increment 
	            var markup = '<tr ><td><textarea name="model[]" class="form-control"></textarea></td><td><textarea name="serial[]" class="form-control"></textarea></td><td><textarea name="tg_tag[]" class="form-control"></textarea></td><td><input type="text" name="from[]" class="form-control custom-datepicker" value=""></td><td><input type="text" name="to[]" class="form-control custom-datepicker" value=""></td><td><input type="text" name="Price[]" class="form-control" value=""></td></tr>';
	            $("table tbody").append(markup);
	            $( ".custom-datepicker" ).datepicker();
	            }
	        });     
	    }); 


	    // function validation_form1(){
	    	
		   // 	var transfer_type = $('input[name=transfer_type]:checked').val()
		   // 	var releasing_assets = $('#releasing_assets').val();
		   // 	var requesting_assets = $('#requesting_assets').val();
		   // 	var loaner = $('#loaner').val();
		   // 	if(!transfer_type){
		   // 		$("#err1").html("<p class='btn-warning'> Move/Transfer type is Required!</p>");
		   // 	}
		   // 	if(releasing_assets == ''){
		   // 		$("#err2").html("<p class='btn-warning'>Department/Ministry Releasing assets/materials required!</p>");
		   // 	}
		   // 	if(requesting_assets == ''){
		   // 		$("#err3").html("<p class='btn-warning'> Department/Ministry requesting assets/materials Required!</p>");
		   // 	}
		   // 	if (loaner =='') {
		   // 		$("#err4").html("<p class='btn-warning'> Purpose of transfer/loaner Required!</p>");
		   // 	}
     //    }



	</script>

	



</body>
</html>