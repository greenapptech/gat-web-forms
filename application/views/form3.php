<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Web Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
</head>
<body>
	<div class="main-wpr">
		<div class="container">
			<div class="form-layout ">
				<form class="cutom-from" id="vehicle-form" action="<?php echo base_url();?>index.php/welcome/vehicle_form" method="post">
					<div class="from-header">
						<h1>Vehicle Log</h1>						
					</div>
					<div class="from-inner row">
						<div class="col-md-5 offset-md-1">
							<div class="form-group row">
								<label class="col-md-5">Vehicle Description</label>
								<div class="col-md-7">
									<input type="text" name="vehicle_descrition" class="form-control" value="<?php echo set_value('vehicle_descrition'); ?>">
									<span class="text-danger"><?php echo form_error('vehicle_descrition'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group row">
								<label class="col-md-5">Vehicle Tag</label>
								<div class="col-md-7">
									<input type="text" name="tehicle_tag" class="form-control" value="<?php echo set_value('tehicle_tag'); ?>">
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
										<option value="1" <?php echo set_select('department','1');?>>A</option>
										<option value="2" <?php echo set_select('department','2');?>>B</option>
										<option value="3" <?php echo set_select('department','3');?>>C</option>
									</select>
									<span class="text-danger"><?php echo form_error('department'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group row">
								<label class="col-md-5">Fuel Type</label>
								<div class="col-md-7">
									<input type="text" name="fuel_type" class="form-control" value="<?php echo set_value('fuel_type'); ?>">
									<span class="text-danger"><?php echo form_error('fuel_type'); ?></span>
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
										<tr>
											<td><input type="text" name="date[]" class="form-control custom-datepicker" value="<?php echo set_value('date[0]'); ?>"></td>
											<td><input type="text" name="time_out[]" class="form-control custom-timepicker" value="<?php echo set_value('time_out[0]'); ?>"></td>
											<td><input type="text" name="time_in[]" class="form-control custom-timepicker" value="<?php echo set_value('time_in[0]'); ?>"></td> 
											<td><input type="text" name="milage_out[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_out[0]'); ?>"></td>
											<td><input type="text" name="milage_in[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_in[0]'); ?>"></td>
											<td><input type="text" name="destination[]" class="form-control" value="<?php echo set_value('destination[0]'); ?>"></td>
											<td><textarea name="purpose[]" class="form-control"><?php echo set_value('purpose[0]'); ?></textarea></td>
											<td><input type="text" name="driver[]" class="form-control" value="<?php echo set_value('driver[0]'); ?>"><span class="text-danger"><?php echo form_error('driver[0]'); ?></span></td>
											<td><input type="text" name="gasoline_gals[]" class="form-control" value="<?php echo set_value('gasoline_gals[0]'); ?>"></td>
											<td><input type="text" name="gasoline_cost[]" class="form-control" value="<?php echo set_value('gasoline_cost[0]'); ?>"></td>
											<td><select class="form-control" name="weekly_check[]">
													<option value="">Select</option>
													<option value="1" <?php echo set_select('weekly_check[0]','1');?>>Yes</option>
													<option value="2" <?php echo set_select('weekly_check[0]','2');?>>No</option>
											</select></td>
										</tr>
										<tr>
											<td><input type="text" name="date[]" class="form-control custom-datepicker" value="<?php echo set_value('date[1]'); ?>"></td>
											<td><input type="text" name="time_out[]" class="form-control custom-timepicker" value="<?php echo set_value('time_out[1]'); ?>"></td>
											<td><input type="text" name="time_in[]" class="form-control custom-timepicker" value="<?php echo set_value('time_in[1]'); ?>"></td>
											<td><input type="text" name="milage_out[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_out[1]'); ?>"></td>
											<td><input type="text" name="milage_in[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_in[1]'); ?>"></td>
											<td><input type="text" name="destination[]" class="form-control" value="<?php echo set_value('destination[1]'); ?>"></td>
											<td><textarea name="purpose[]" class="form-control"><?php echo set_value('purpose[1]'); ?></textarea></td>
											<td><input type="text" name="driver[]" class="form-control" value="<?php echo set_value('driver[1]'); ?>"><span class="text-danger"><?php echo form_error('driver[1]'); ?></span></td>
											<td><input type="text" name="gasoline_gals[]" class="form-control" value="<?php echo set_value('gasoline_gals[1]'); ?>"></td>
											<td><input type="text" name="gasoline_cost[]" class="form-control" value="<?php echo set_value('gasoline_cost[1]'); ?>"></td>
											<td><select class="form-control" name="weekly_check[]">
													<option value="">Select</option><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
													<option value="1" <?php echo set_select('weekly_check[1]','1');?>>Yes</option>
													<option value="2" <?php echo set_select('weekly_check[1]','2');?>>No</option>
											</select></td>
										</tr>
										<tr>
											<td><input type="text" name="date[]" class="form-control custom-datepicker" value="<?php echo set_value('date[2]'); ?>"></td>
											<td><input type="text" name="time_out[]" class="form-control custom-timepicker" value="<?php echo set_value('time_out[2]'); ?>"></td>
											<td><input type="text" name="time_in[]" class="form-control custom-timepicker" value="<?php echo set_value('time_in[2]'); ?>"></td>
											<td><input type="text" name="milage_out[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_out[2]'); ?>"></td>
											<td><input type="text" name="milage_in[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_in[2]'); ?>"></td>
											<td><input type="text" name="destination[]" class="form-control" value="<?php echo set_value('destination[2]'); ?>"></td>
											<td><textarea name="purpose[]" class="form-control"><?php echo set_value('purpose[2]'); ?></textarea></td>
											<td><input type="text" name="driver[]" class="form-control" value="<?php echo set_value('driver[2]'); ?>"><span class="text-danger"><?php echo form_error('driver[2]'); ?></span></td>
											<td><input type="text" name="gasoline_gals[]" class="form-control" value="<?php echo set_value('gasoline_gals[2]'); ?>"></td>
											<td><input type="text" name="gasoline_cost[]" class="form-control" value="<?php echo set_value('gasoline_cost[2]'); ?>"></td>
											<td><select class="form-control" name="weekly_check[]">
													<option value="">Select</option>
													<option value="1" <?php echo set_select('weekly_check[2]','1');?>>Yes</option>
													<option value="2" <?php echo set_select('weekly_check[2]','2');?>>No</option>
											</select></td>
										</tr>
										<tr>
											<td><input type="text" name="date[]" class="form-control custom-datepicker" value="<?php echo set_value('date[3]'); ?>"></td>
											<td><input type="text" name="time_out[]" class="form-control custom-timepicker" value="<?php echo set_value('time_out[3]'); ?>"></td>
											<td><input type="text" name="time_in[]" class="form-control custom-timepicker" value="<?php echo set_value('time_in[3]'); ?>"></td>
											<td><input type="text" name="milage_out[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_out[3]'); ?>"></td>
											<td><input type="text" name="milage_in[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_in[3]'); ?>"></td>
											<td><input type="text" name="destination[]" class="form-control" value="<?php echo set_value('destination[3]'); ?>"></td>
											<td><textarea name="purpose[]" class="form-control"><?php echo set_value('purpose[3]'); ?></textarea></td>
											<td><input type="text" name="driver[]" class="form-control" value="<?php echo set_value('driver[3]'); ?>"><span class="text-danger"><?php echo form_error('driver[3]'); ?></span></td>
											<td><input type="text" name="gasoline_gals[]" class="form-control" value="<?php echo set_value('gasoline_gals[3]'); ?>"></td>
											<td><input type="text" name="gasoline_cost[]" class="form-control" value="<?php echo set_value('gasoline_cost[3]'); ?>"></td>
											<td><select class="form-control" name="weekly_check[]">
													<option value="">Select</option>
													<option value="1" <?php echo set_select('weekly_check[3]','1');?>>Yes</option>
													<option value="2" <?php echo set_select('weekly_check[3]','2');?>>No</option>
											</select></td>
										</tr>
										<tr>
											<td><input type="text" name="date[]" class="form-control custom-datepicker" value="<?php echo set_value('date[4]'); ?>"></td>
											<td><input type="text" name="time_out[]" class="form-control custom-timepicker" value="<?php echo set_value('time_out[4]'); ?>"></td>
											<td><input type="text" name="time_in[]" class="form-control custom-timepicker" value="<?php echo set_value('time_in[4]'); ?>"></td>
											<td><input type="text" name="milage_out[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_out[4]'); ?>"></td>
											<td><input type="text" name="milage_in[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_in[4]'); ?>"></td>
											<td><input type="text" name="destination[]" class="form-control" value="<?php echo set_value('destination[4]'); ?>"></td>
											<td><textarea name="purpose[]" class="form-control"><?php echo set_value('purpose[4]'); ?></textarea></td>
											<td><input type="text" name="driver[]" class="form-control" value="<?php echo set_value('driver[4]'); ?>"><span class="text-danger"><?php echo form_error('driver[4]'); ?></span></td>
											<td><input type="text" name="gasoline_gals[]" class="form-control" value="<?php echo set_value('gasoline_gals[4]'); ?>"></td>
											<td><input type="text" name="gasoline_cost[]" class="form-control" value="<?php echo set_value('gasoline_cost[4]'); ?>"></td>
											<td><select class="form-control" name="weekly_check[]">
													<option value="">Select</option>
													<option value="1" <?php echo set_select('weekly_check[4]','1');?>>Yes</option>
													<option value="2" <?php echo set_select('weekly_check[4]','2');?>>No</option>
											</select></td>
										</tr>
										<tr>
											<td><input type="text" name="date[]" class="form-control custom-datepicker" value="<?php echo set_value('date[5]'); ?>"></td>
											<td><input type="text" name="time_out[]" class="form-control custom-timepicker" value="<?php echo set_value('time_out[5]'); ?>"></td>
											<td><input type="text" name="time_in[]" class="form-control custom-timepicker" value="<?php echo set_value('time_in[5]'); ?>"></td>
											<td><input type="text" name="milage_out[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_out[5]'); ?>"></td>
											<td><input type="text" name="milage_in[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_in[5]'); ?>"></td>
											<td><input type="text" name="destination[]" class="form-control" value="<?php echo set_value('destination[5]'); ?>"></td>
											<td><textarea name="purpose[]" class="form-control"><?php echo set_value('purpose[5]'); ?></textarea></td>
											<td><input type="text" name="driver[]" class="form-control" value="<?php echo set_value('driver[5]'); ?>"><span class="text-danger"><?php echo form_error('driver[5]'); ?></span></td>
											<td><input type="text" name="gasoline_gals[]" class="form-control" value="<?php echo set_value('gasoline_gals[5]'); ?>"></td>
											<td><input type="text" name="gasoline_cost[]" class="form-control" value="<?php echo set_value('gasoline_cost[5]'); ?>"></td>
											<td><select class="form-control" name="weekly_check[]">
													<option value="">Select</option>
													<option value="1" <?php echo set_select('weekly_check[5]','1');?>>Yes</option>
													<option value="2" <?php echo set_select('weekly_check[5]','2');?>>No</option>
											</select></td>
										</tr>
										<tr>
											<td><input type="text" name="date[]" class="form-control custom-datepicker" value="<?php echo set_value('date[6]'); ?>"></td>
											<td><input type="text" name="time_out[]" class="form-control custom-timepicker" value="<?php echo set_value('time_out[6]'); ?>"></td>
											<td><input type="text" name="time_in[]" class="form-control custom-timepicker" value="<?php echo set_value('time_in[6]'); ?>"></td>
											<td><input type="text" name="milage_out[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_out[6]'); ?>"></td>
											<td><input type="text" name="milage_in[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_in[6]'); ?>"></td>
											<td><input type="text" name="destination[]" class="form-control custom-timepicker" value="<?php echo set_value('destination[6]'); ?>"></td>
											<td><textarea name="purpose[]" class="form-control"><?php echo set_value('purpose[6]'); ?></textarea></td>
											<td><input type="text" name="driver[]" class="form-control" value="<?php echo set_value('driver[6]'); ?>"><span class="text-danger"><?php echo form_error('driver[6]'); ?></span></td>
											<td><input type="text" name="gasoline_gals[]" class="form-control" value="<?php echo set_value('gasoline_gals[6]'); ?>"></td>
											<td><input type="text" name="gasoline_cost[]" class="form-control" value="<?php echo set_value('gasoline_cost[6]'); ?>"></td>
											<td><select class="form-control" name="weekly_check[]">
													<option value="">Select</option>
													<option value="1" <?php echo set_select('weekly_check[6]','1');?>>Yes</option>
													<option value="2" <?php echo set_select('weekly_check[6]','2');?>>No</option>
											</select></td>
										</tr>
										<tr>
											<td><input type="text" name="date[]" class="form-control custom-datepicker" value="<?php echo set_value('date[7]'); ?>"></td>
											<td><input type="text" name="time_out[]" class="form-control custom-timepicker" value="<?php echo set_value('time_out[7]'); ?>"></td>
											<td><input type="text" name="time_in[]" class="form-control custom-timepicker" value="<?php echo set_value('time_in[7]'); ?>"></td>
											<td><input type="text" name="milage_out[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_out[7]'); ?>"></td>
											<td><input type="text" name="milage_in[]" class="form-control custom-timepicker" value="<?php echo set_value('milage_in[7]'); ?>"></td>
											<td><input type="text" name="destination[]" class="form-control custom-timepicker" value="<?php echo set_value('destination[7]'); ?>"></td>
											<td><textarea name="purpose[]" class="form-control"><?php echo set_value('purpose[7]'); ?></textarea></td>
											<td><input type="text" name="driver[]" class="form-control" value="<?php echo set_value('driver[7]'); ?>"><span class="text-danger"><?php echo form_error('driver[7]'); ?></span></td>
											<td><input type="text" name="gasoline_gals[]" class="form-control" value="<?php echo set_value('gasoline_gals[7]'); ?>"></td>
											<td><input type="text" name="gasoline_cost[]" class="form-control" value="<?php echo set_value('gasoline_cost[7]'); ?>"></td>
											<td><select class="form-control" name="weekly_check[]">
													<option value="">Select</option>
													<option value="1" <?php echo set_select('weekly_check[7]','1');?>>Yes</option>
													<option value="2" <?php echo set_select('weekly_check[7]','2');?>>No</option>
											</select></td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
						
					<div class="from-footer row">
						<div class="col-md-12">
							<p>Weekly Checks Composed of: All lights working; Tres arein good working condition; windshield is undamaged and body work and trim are secure</p>
							<div class="form-group">
								<button type="button" id="vehicleId" name="save" class="btn btn-success btn-custom">Save &amp; Submit</button>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<script type="text/javascript">
		$( function() {
		   $( ".custom-datepicker" ).datepicker();
		});

		$( function() {
		    $('.custom-timepicker').timepicker({
		    	interval: 5
		    });
		});


		$(document).ready(function() {
			$("#vehicleId").click(function(e){
				setTimeout(function(){ 
					$('form#vehicle-form').submit();	
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
		            var markup = '<tr><td><input type="text" name="date[]" class="form-control custom-datepicker" value=""></td><td><input type="text" name="time_out[]" class="form-control custom-timepicker" value=""></td><td><input type="text" name="time_in[]" class="form-control custom-timepicker" value=""></td><td><input type="text" name="milage_out[]" class="form-control custom-timepicker" value=""></td><td><input type="text" name="milage_in[]" class="form-control custom-timepicker" value=""></td><td><input type="text" name="destination[]" class="form-control" value=""></td><td><textarea name="purpose[]" class="form-control"></textarea></td><td><input type="text" name="driver[]" class="form-control" value=""></td><td><input type="text" name="gasoline_gals[]" class="form-control" value=""></td><td><input type="text" name="gasoline_cost[]" class="form-control" value=""></td><td><select class="form-control" name="weekly_check[]"><option value="">Select</option><option value="1">Yes</option><option value="2">No</option></tr>';
		            $("table tbody").append(markup);
		            $( ".custom-datepicker" ).datepicker();
		            $('.custom-timepicker').timepicker({
	    				interval: 5
		    		});
	            }
		    });     
	    }); 


  </script>
</body>
</html>