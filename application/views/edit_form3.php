<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Web Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
</head>
<body>
	<div class="main-wpr">
		<div class="container">
			<div class="form-layout ">
				<form class="cutom-from" id="edit-form3" action="<?php echo base_url();?>index.php/welcome/update_form3" method="post">
					<div class="from-header">
						<h1>Vehicle Log</h1>						
					</div>
					<?php foreach ($rs as $key => $value) { ?>
					<div class="from-inner row">
						<div class="col-md-5 offset-md-1">
							<div class="form-group row">
								<label class="col-md-5">Vehicle Description</label>
								<div class="col-md-7">
									<input type="text" name="vehicle_descrition" class="form-control" value="<?php echo $value['vehicle_descrition'];?>">
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group row">
								<label class="col-md-5">Vehicle Tag</label>
								<div class="col-md-7">
									<input type="text" name="tehicle_tag" class="form-control" value="<?php echo $value['tehicle_tag'];?>">
									<span class="text-danger"><?php echo form_error('tehicle_tag'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-md-5 offset-md-1">
							<div class="form-group row">
								<label class="col-md-5">Department</label>
								<div class="col-md-7">
									<select class="form-control" name="department">
										<option value="">Select Department</option>
										<option value="1" <?php if( $value['department']==1){echo 'selected="selected"';}?> >A</option>
										<option value="2"  <?php if( $value['department']==2){echo 'selected="selected"';}?> >B</option>
										<option value="3" <?php if( $value['department']==3){echo 'selected="selected"';}?> >C</option>
									</select>
									<span class="text-danger"><?php echo form_error('department'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group row">
								<label class="col-md-5">Fuel Type</label>
								<div class="col-md-7">
									<input type="text" name="fuel_type" class="form-control" value="<?php echo $value['fuel_type'];?>">
								</div>
							</div>
						</div>
						<div class="col-md-10 offset-md-1">
							<h4>All Vehicle Must use Business Only</h4>
						</div>
						<div class="col-md-1 p-0">
							<button class="btn btn-success btn-rounded add-row" type="button">Add More +</button>
						</div>
						<div class="col-md-12">
							<div class="table responsive custom-table">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th rowspan="2">Date</th>
											<th colspan="2">Time</th>
											<th colspan="2">Milage</th>
											<th rowspan="2">Destination</th>
											<th rowspan="2">Purpose</th>
											<th rowspan="2">Driver (Print name)</th>
											<th colspan="2">Gasoline</th>
											<th rowspan="2">Weekly check completed</th>

										</tr>
										<tr>
											<th style="width: 60px;">Out</th>
											<th style="width: 60px;">In</th>
											<th style="width: 60px;">Out</th>
											<th style="width: 60px;">In</th>
											<th style="width: 60px;">Gals</th>
											<th style="width: 60px;">Cost</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($trs as $key => $tr) { ?>
										<tr>
											<td><input type="text" name="date[]" class="form-control custom-datepicker" value="<?php echo $tr['date'];?>"></td>
											<td><input type="text" name="time_out[]" class="form-control" value="<?php echo $tr['time_out'];?>"></td>
											<td><input type="text" name="time_in[]" class="form-control" value="<?php echo $tr['time_in'];?>"></td>
											<td><input type="text" name="milage_out[]" class="form-control" value="<?php echo $tr['milage_out'];?>"></td>
											<td><input type="text" name="milage_in[]" class="form-control" value="<?php echo $tr['milage_in'];?>"></td>
											<td><input type="text" name="destination[]" class="form-control" value="<?php echo $tr['destination'];?>"></td>
											<td><textarea name="purpose[]" class="form-control"><?php echo $tr['purpose'];?></textarea></td>
											<td><input type="text" name="driver[]" class="form-control" value="<?php echo $tr['driver'];?>"></td>
											<td><input type="text" name="gasoline_gals[]" class="form-control" value="<?php echo $tr['gasoline_gals'];?>"></td>
											<td><input type="text" name="gasoline_cost[]" class="form-control" value="<?php echo $tr['gasoline_cost'];?>"></td>
											<td><select class="form-control" name="weekly_check[]">
													<option value="">Select</option>
													<option value="1" <?php if( $tr['weekly_check']==1){echo 'selected="selected"';}?>>Yes</option>
													<option value="2" <?php if( $tr['weekly_check']==2){echo 'selected="selected"';}?>>No</option>
											</select></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						
					<div class="from-footer row">
						<div class="col-md-12">
							<p>Weekly Checks Composed of: All lights working; Tres arein good working condition; windshield is undamaged and body work and trim are secure</p>
							<div class="form-group">
								<button type="button" id="vehicleId" name="save" class="btn btn-success btn-custom">Save &amp; Preview</button>
								<a href="<?php echo base_url();?>index.php/welcome/create_pdf1" class="btn btn-success btn-custom">Print 1</a>
								<a href="<?php echo base_url();?>index.php/welcome/create_pdf2" class="btn btn-success btn-custom">Print 2</a>
								<a href="<?php echo base_url();?>index.php/welcome/create_pdf3" class="btn btn-success btn-custom">Print 3</a>
								<a href="<?php echo base_url();?>index.php/welcome/create_pdf_all" class="btn btn-success btn-custom">Print All</a>
							</div>
						</div>
					</div>
					<?php }?>					
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
	<script  type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$( function() {
		   $( ".custom-datepicker" ).datepicker();
		});

		$(document).ready(function() {
			$("#vehicleId").click(function(e){
				setTimeout(function(){ 
					$('form#edit-form3').submit();	
				}, 500);
			});
		});


		$(document).ready(function(){
	        var max_fields = 10; //maximum input boxes allowed
	        var x = 1; //initlal text box count
        
	        $(".add-row").click(function(){  
		        if(x < max_fields){
		        //max input box allowed
		            x++; //text box increment 
		            var markup = '<tr><td><input type="text" name="date[]" class="form-control custom-datepicker" value=""></td><td><input type="text" name="time_out[]" class="form-control" value=""></td><td><input type="text" name="time_in[]" class="form-control" value=""></td><td><input type="text" name="milage_out[]" class="form-control" value=""></td><td><input type="text" name="milage_in[]" class="form-control" value=""></td><td><input type="text" name="destination[]" class="form-control" value=""></td><td><textarea name="purpose[]" class="form-control" ></textarea></td><td><input type="text" name="driver[]" class="form-control" value=""></td><td><input type="text" name="gasoline_gals[]" class="form-control" value=""></td><td><input type="text" name="gasoline_cost[]" class="form-control" value=""></td><td><select class="form-control" name="weekly_check[]"><option value="">Select</option><option value="1">Yes</option>	<option value="2">No</option></tr>';
		            $("table tbody").append(markup);
		             $( ".custom-datepicker" ).datepicker();

	            }
		    });     
	    }); 



  </script>
</body>
</html>