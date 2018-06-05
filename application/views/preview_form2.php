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
				<form id="report_form" class="cutom-from" action="" method="post">
					<div class="from-header">
						<h1>Assets/Materials incident report form</h1>
						<p>Staffs are required to report any damage, loss or theft owned and operated equipment as soon as possible. An Incident Report Form must be completed and submit within 72 hours of the incident to the Inventory Department.</p>
						<p>Please note that all ministers and/or staff are required to report all actual or suspected damage, loss or theft of any equipment incident immediately.</p>
					</div>
					<div class="from-inner row">
						<div class="col-md-12">
							<div class="table responsive custom-table">
								<?php foreach ($data as $key => $value) { ?>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th colspan="2" class="text-center bg-grey"><label>Staff/Personal Information</label></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width: 50%;"><label>Name</label><input type="text" name="name" class="form-control" value="<?php echo $value['name']; ?>" readonly>
											<td><label>Position/Title</label>
												<!-- <input type="text" name="title" class="form-control" value="<?php echo $value['title']; ?>"> -->
												<select class="form-control" name="title" readonly disabled>
													<option value="">Select Position/Title</option>
													<option value="1" <?php if( $value['title']==1){echo 'selected="selected"';}?>>A</option>
													<option value="2" <?php if( $value['title']==2){echo 'selected="selected"';}?>>B</option>
													<option value="3" <?php if( $value['title']==3){echo 'selected="selected"';}?>>C</option>
												</select>
											<span class="text-danger"><?php echo form_error('title'); ?></span></td>
										</tr>
										<tr>
											<td><label>Department</label>
												<select class="form-control" name="department" readonly disabled>
													<option value="">Select Department</option>
													<option value="1" <?php if( $value['department']==1){echo 'selected="selected"';}?>>A</option>
													<option value="2" <?php if( $value['department']==2){echo 'selected="selected"';}?>>B</option>
													<option value="3" <?php if( $value['department']==3){echo 'selected="selected"';}?>>C</option>
												</select>
												<!-- <input type="text" name="department" class="form-control" value="<?php echo $value['department']; ?>"> -->
											<td><label>Phone</label><input type="text" name="phone" class="form-control" value="<?php echo $value['phone']; ?>" readonly>
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
																<input type="text" name="inc_date" class="form-control" value="<?php echo $value['inc_date']; ?>" readonly>
															</div>
														</div>
													</div>	
													<div class="col-md-4">
														<div class="form-group row">
															<label class="col-md-6">Time of Incident:</label>
															<div class="col-md-6">
																<input type="text" name="time_inc" class="form-control" value="<?php echo $value['time_inc']; ?>" readonly>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group row">
															<label class="col-md-6">Type of Incident:</label>
															<div class="col-md-6">
																<select class="form-control" name="type_inc" readonly disabled>
																	<option value="">Select Incident</option>
																	<option value="1" <?php if( $value['type_inc']==1){echo 'selected="selected"';}?>>A</option>
																	<option value="2" <?php if( $value['type_inc']==2){echo 'selected="selected"';}?>>B</option>
																	<option value="3" <?php if( $value['type_inc']==3){echo 'selected="selected"';}?>>C</option>
																</select>
																<!-- <input type="text" name="type_inc" class="form-control" value="<?php echo $value['type_inc']; ?>"> -->
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group row">
															<label class="col-md-6">Reported on:</label>
															<div class="col-md-6">
																<input type="text" name="re_date" class="form-control" value="<?php echo $value['re_date']; ?>" readonly>
															</div>
														</div>
													</div>	
													<div class="col-md-4">
														<div class="form-group row">
															<label class="col-md-6">Time Reported:</label>
															<div class="col-md-6">
																<input type="text" name="time_re" class="form-control" value="<?php echo $value['time_re']; ?>" readonly>
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
											<td><textarea name="list_item" class="form-control" readonly ><?php echo $value['list_item']; ?></textarea>
										</tr>
										<tr>
											<td><label>Item (s) Identification Number(s) / Serial number</label></td>
											<td><textarea name="item_no" class="form-control" readonly><?php echo $value['item_no']; ?></textarea>
										</tr>
										<tr>
											<td><label>Item (s) Location at Time of Damage / Loss / Stolen</label></td>
											<td><textarea name="item_loc" class="form-control" readonly><?php echo $value['item_loc']; ?></textarea>
										</tr>
										<tr>
											<td><label>How Was the item (s) Damaged / Lost / Stolen? (Detail Description)</label></td>
											<td><textarea name="item_damaged" class="form-control" readonly><?php echo $value['item_damaged']; ?></textarea>
										</tr>
										<tr>
											<td><label>Estimated cost of repair/replacement</label></td>
											<td><textarea name="cost_repair" class="form-control" readonly><?php echo $value['cost_repair']; ?></textarea>
										</tr>
										<tr>
											<td><label>Person responsible for assets/materials</label></td>
											<td><textarea name="parson_assets" class="form-control" readonly><?php echo $value['parson_assets']; ?></textarea>
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
								<input type="radio" name="question" id="yes" <?php if($value['question']=='yes'){ echo "checked=checked";}  ?> value="yes" disabled > 
								<label for="yes"> Yes </label>
							</div>
						
							<div class="radio radio-success">
								<input type="radio" name="question" id="no" <?php if($value['question']=='no'){ echo "checked=checked";}  ?> value="no" disabled > 
								<label for="no"> No </label>
							</div>
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
											<td style="width: 50%;"><label>Police Report</label><input type="text" name="police_report" class="form-control" value="<?php echo $value['police_report']; ?>" readonly>
											<span class="text-danger"><?php echo form_error('police_report'); ?></span></td>
											<td><label>Station/City</label><input type="text" name="city" class="form-control" value="<?php echo $value['city']; ?>" readonly>
										</tr>
										
									</tbody>
								</table>
								<?php }?>
							</div>
						</div>
					</div>
					<div class="from-footer row">
						<div class="col-md-12">
							<p>A Police Report (If Theft) and replacement cost invoice must be attached.</p>
							<div class="form-group">
								<a href="<?php echo base_url();?>index.php/welcome/preview_page1" class="btn btn-success btn-custom">Preview</a>
								<a href="<?php echo base_url();?>index.php/welcome/preview_page3" class="btn btn-success btn-custom">Next</a>
								<a href="<?php echo base_url();?>index.php/welcome/edit_form2" class="btn btn-success btn-custom">Edit Form2</a>
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
	<script type="text/javascript">
		$( function() {
		    $( ".custom-datepicker" ).datepicker();
		});

		$("#Sevebtn").click(function(){
			setTimeout(function(){ 
					$('form#report_form').submit();	
				}, 500);
		});



  </script>
</body>
</html>