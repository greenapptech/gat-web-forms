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
				<form id="report_form" class="cutom-from" action="<?php echo base_url();?>index.php/welcome/report_form" method="post">
					<div class="from-header">
						<h1>Assets/Materials incident report form</h1>
						<p>Staffs are required to report any damage, loss or theft owned and operated equipment as soon as possible. An Incident Report Form must be completed and submit within 72 hours of the incident to the Inventory Department.</p>
						<p>Please note that all ministers and/or staff are required to report all actual or suspected damage, loss or theft of any equipment incident immediately.</p>
					</div>
					<div class="from-inner row">
						<div class="col-md-12">
							<div class="table responsive custom-table">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th colspan="2" class="text-center bg-grey"><label>Staff/Personal Information</label></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width: 50%;"><label>Name</label><input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>">
											<span class="text-danger"><?php echo form_error('name'); ?></span></td>
											<td><label>Position/Title</label>
												<select class="form-control" name="title">
													<option value="">Select Position/Title</option>
													<option value="1" <?php echo set_select('title','1');?>>A</option>
													<option value="2" <?php echo set_select('title','2');?>>B</option>
													<option value="3" <?php echo set_select('title','3');?>>C</option>
												</select>
												<!-- <input type="text" name="title" class="form-control" value=""> -->
											<span class="text-danger"><?php echo form_error('title'); ?></span></td>
										</tr>
										<tr>
											<td><label>Department</label>
											<select class="form-control" name="department">
													<option value="">Select Department</option>
													<option value="1" <?php echo set_select('department','1');?>>A</option>
													<option value="2" <?php echo set_select('department','2');?>>B</option>
													<option value="3" <?php echo set_select('department','3');?>>C</option>
												</select>
											<!-- <input type="text" name="department" class="form-control" value=""> -->
											<span class="text-danger"><?php echo form_error('department'); ?></span></td>
											<td><label>Phone</label><input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>">
											<span class="text-danger"><?php echo form_error('phone'); ?></span></td>
										</tr>
										<tr>
											<td colspan="2" class="text-center bg-grey"><label>Incident Information</label></td>
										</tr>
										<tr>
											<td colspan="2">
												<div class="row">
													<div class="col-md-4">
														<div class="form-group row">
															<label class="col-md-6">Incident Date:</label>
															<div class="col-md-6">
																<input type="text" name="inc_date" class="form-control custom-datepicker" value="<?php echo set_value('inc_date'); ?>">
																<span class="text-danger"><?php echo form_error('inc_date'); ?></span>
															</div>
														</div>
													</div>	
													<div class="col-md-4">
														<div class="form-group row">
															<label class="col-md-6">Time of Incident:</label>
															<div class="col-md-6">
																<input type="text" name="time_inc" class="form-control custom-timepicker" value="<?php echo set_value('time_inc'); ?>">
																<span class="text-danger"><?php echo form_error('time_inc'); ?></span>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group row">
															<label class="col-md-6">Type of Incident:</label>
															<div class="col-md-6">
																<select class="form-control" name="type_inc">
																	<option value="">Select Incident</option>
																	<option value="1" <?php echo set_select('type_inc','1');?>>A</option>
																	<option value="2" <?php echo set_select('type_inc','2');?>>B</option>
																	<option value="3" <?php echo set_select('type_inc','3');?>>C</option>
																</select>
																<!-- <input type="text" name="type_inc" class="form-control" value=""> -->
																<span class="text-danger"><?php echo form_error('type_inc'); ?></span>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group row">
															<label class="col-md-6">Reported on:</label>
															<div class="col-md-6">
																<input type="text" name="re_date" class="form-control custom-datepicker" value="<?php echo set_value('re_date'); ?>">
																<span class="text-danger"><?php echo form_error('re_date'); ?></span>
															</div>
														</div>
													</div>	
													<div class="col-md-4">
														<div class="form-group row">
															<label class="col-md-6">Time Reported:</label>
															<div class="col-md-6">
																<input id="" type="text" name="time_re" class="form-control custom-timepicker" value="<?php echo set_value('time_re'); ?>">
																<span class="text-danger"><?php echo form_error('time_re'); ?></span>
															</div>
														</div>
													</div>
													<div class="col-md-4">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td colspan="2"  class="text-center bg-grey"><label>Assets/Materials Information</label></td>
										</tr>
										<tr>
											<td><label>List of item (s) Damaged / Lost / Stolen (Please Specify)</label></td>
											<td><textarea name="list_item" class="form-control" ><?php echo set_value('list_item'); ?></textarea>
											<span class="text-danger"><?php echo form_error('list_item'); ?></span></td>
										</tr>
										<tr>
											<td><label>Item (s) Identification Number(s) / Serial number</label></td>
											<td><textarea type="text" name="item_no" class="form-control" ><?php echo set_value('item_no'); ?></textarea>
											<span class="text-danger"><?php echo form_error('item_no'); ?></span></td>
										</tr>
										<tr>
											<td><label>Item (s) Location at Time of Damage / Loss / Stolen</label></td>
											<td><textarea type="text" name="item_loc" class="form-control"><?php echo set_value('item_loc'); ?></textarea>
											<span class="text-danger"><?php echo form_error('item_loc'); ?></span></td>
										</tr>
										<tr>
											<td><label>How Was the item (s) Damaged / Lost / Stolen? (Detail Description)</label></td>
											<td><textarea type="text" name="item_damaged" class="form-control" ><?php echo set_value('item_damaged'); ?></textarea>
											<span class="text-danger"><?php echo form_error('item_damaged'); ?></span></td>
										</tr>
										<tr>
											<td><label>Estimated cost of repair/replacement</label></td>
											<td><textarea type="text" name="cost_repair" class="form-control" ><?php echo set_value('cost_repair'); ?></textarea>
											<span class="text-danger"><?php echo form_error('cost_repair'); ?></span></td>
										</tr>
										<tr>
											<td><label>Person responsible for assets/materials</label></td>
											<td><textarea type="text" name="parson_assets" class="form-control" ><?php echo set_value('parson_assets'); ?></textarea>
											<span class="text-danger"><?php echo form_error('parson_assets'); ?></span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-12">
							<label>Were the asset (s)/material (s) Damage/ Loss/ Theft reported to the Police ?:</label>
						</div>

						<div class="col-md-12">
							<div class="radio radio-success">
								<input type="radio" name="question" id="yes" <?php echo set_radio('question', 'yes'); ?> value="yes"> 
								<label for="yes"> Yes </label>
							</div>
						
							<div class="radio radio-success">
								<input type="radio" name="question" id="no" <?php echo set_radio('question', 'no'); ?> value="no"> 
								<label for="no"> No </label>
							</div>
							<span class="text-danger"><?php echo form_error('question'); ?></span>
						</div>
						<div class="col-md-12">
							<label>If yes, please provide:</label>
						</div>
						
						<div class="col-md-12">
							<div class="table responsive custom-table">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th colspan="2" class="text-center bg-grey"><label>Police Report Information</label></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width: 50%;"><label>Police Report</label><input type="text" name="police_report" class="form-control" value="<?php echo set_value('police_report'); ?>">
											<span class="text-danger"><?php echo form_error('police_report'); ?></span></td>
											<td><label>Station/City</label><input type="text" name="city" class="form-control" value="<?php echo set_value('city'); ?>">
											<span class="text-danger"><?php echo form_error('city'); ?></span></td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="from-footer row">
						<div class="col-md-12">
							<p>A Police Report (If Theft) and replacement cost invoice must be attached.</p>
							<div class="form-group">
								<button type="button" id="Sevebtn" name="save" class="btn btn-success btn-custom">Save &amp; Next</button>
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

		$("#Sevebtn").click(function(){
			setTimeout(function(){ 
					$('form#report_form').submit();	
				}, 500);

		});



  </script>
</body>
</html>