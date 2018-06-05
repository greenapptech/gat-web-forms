<?php
 $pdf  = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Webform');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAuthor('Author');
// $pdf->SetDisplayMode('real', 'default');
$pdf->SetFont('helvetica','I');

$pdf->AddPage();

$html ='<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Web Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>';
foreach ($data as  $value) { 
	$html .='<table style="font-family: "Arial", sans-serif; margin: 0 auto; padding: 0;font-size: 14px; font-weight: 400; border:1px solid #ddd; width: 100%; max-width: 600px; background: #fff;">
		<tr>			
			<td style=" padding: 10px;">
				<table style="width: 100%;">
					<tr>
						<td colspan="2">
							<h1 style="font-size: 20px; font-weight: 600; text-transform: uppercase;  line-height: 1.5; letter-spacing: 1px; text-align: center;">Inter-Assets/Materials Agreement Control From</h1>
							<p style="font-size: 16px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">Submit Completed Form to:The Inventory Management Coordinator</p>
						</td>
					</tr>
					<tr>
						<td style="text-align: center; width: 50%;">';
						if($value['transfer_type']== '1'){
							$html.='<img src="'.base_url().'assets/task.png" alt="" >';
						}else{
							$html.='<img src="'.base_url().'assets/blank-circle.png" alt="" >';
						}
							$html.='<label style="display: inline-block; margin-bottom: 0; font-weight: 500;"> Temporary move/transfer </label>
						</td>
						<td style="text-align: center;">';
						if($value['transfer_type']== '2'){
							$html.='<img src="'.base_url().'assets/task.png" alt="" >';
						}else{
							$html.='<img src="'.base_url().'assets/blank-circle.png" alt="" >';
						}
							$html.='<label style="display: inline-block; margin-bottom: 0; font-weight: 500;"> Permanent move/transfer </label>
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Department/Ministry releasing assets/materials: </label>
						</td>
						<td style="text-align: left;">';
						if ($value['releasing_assets']== 'a') {	
							$html .='<p>A</p>';
						}
						if ($value['releasing_assets']== 'b') {
							$html .='<p>B</p>';
						}
						if ($value['releasing_assets']== 'c') {
							$html .='<p>C</p>';
						}
						$html .='</td>
					</tr>
					<tr>
						<td style="text-align: left;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Department/Ministry requesting assets/materials: </label>
						</td>
						<td style="text-align: left;">';
						if ($value['requesting_assets']== 'a') {
							$html .='<p>A</p>';
						}
						if ($value['requesting_assets']== 'b') {
							$html .='<p>B</p>';
						} 
						if ($value['requesting_assets']== 'c') {
							$html .='<p>C</p>';
						}  
						$html .='</td>
					</tr>';
			
					$html .='<tr>
						<td style="text-align: left;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Check Out Date:</label>
									<p style=" border: none;border-radius: 0;  border-bottom: 1px solid #434343;  padding: 0; font-size: 14px;">'.$value['check_out_Date'].'</p>
						</td>
						<td style="text-align: left;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Return Date:</label>
							<p style=" border: none;border-radius: 0;  border-bottom: 1px solid #434343;  padding: 0; font-size: 14px;">'.$value['check_out_Date'].'</p>
						
						</td>
					</tr>
				</table>
				<table style=" border:1px solid #ddd; border-collapse: collapse; margin-top:10px; width:100%;">
					<thead>
						<tr>
							<th style="width: 240px; font-size: 13px;font-weight: 600;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">Item(s) Detail Description - (Model)</th>
							<th style="width: 80px; font-size: 13px;font-weight: 600;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">Serial #</th>
							<th style="width: 100px; font-size: 13px;font-weight: 600;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">TG Tag #</th>
							<th style="width: 90px; font-size: 13px;font-weight: 600;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">From</th>
							<th style="width: 90px; font-size: 13px;font-weight: 600;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">To</th>
							<th style="width: 100px; font-size: 13px;font-weight: 600;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">Price </th>
						</tr>
					</thead>
					<tbody>';
					foreach($tab as $td) {

						$html .='<tr>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$td['model'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$td['serial'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$td['tg_tag'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$td['from'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$td['to'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$td['Price'].'</td>
						</tr>';
						}										
					$html .='</tbody>
				</table>
				<table style="width: 100%; margin-top: 20px;">
					<tr>
						<td colspan="2">
							<p style="font-size: 13px;font-weight: 500;text-align: left;line-height: 1.3;    letter-spacing: 0.5px;">By signing this form, I assume all responsibility for the use and handling of the assets /equipment(s) listed above. Costs associate to repair or replace the assets /equipment(s) due to damage beyond normal use, misplaced or stolen will be incurred by the borrower. I also acknowledge that tl1e assets/equipment(s) has loaned to me in good condition with any notes or exceptions stated in the comments sections below and will be used for the sole purpose of MINISTRY use only.</p>
						</td>
					</tr>
					<tr>
						<td style="text-align: left; width: 30%;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Purpose of transfer/loaner:</label>
						</td>
						<td style="text-align: left;">
							<p style=" border: none;border-radius: 0; width: 100%; border-bottom: 1px solid #434343;  padding: 0; font-size: 14px;">'.$value['loaner'].'</p>
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Comments:</label>
						</td>
						<td style="text-align: left;">
						<p style=" border: none;border-radius: 0; width: 100%; border-bottom: 1px solid #434343;  padding: 0; font-size: 14px;">'.$value['comment'].'</p>
						</td>
					</tr>
				</table>
				<table style="width: 100%; margin-top: 20px;">
					<tr>
						<td colspan="2">
							<p style="font-size: 13px;font-weight: 600;text-align: left;line-height: 1.3;    letter-spacing: 0.5px;">Request made by:</p>
						</td>
					</tr>
					<tr>
						<td style="text-align: left; width: 60%;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Ministry Leader/IS Name</label>
							<p style=" border: none;border-radius: 0;  border-bottom: 1px solid #434343;  padding: 0; font-size: 14px;">'.$value['is_name'].'</p>
						</td>
						<td style="text-align: left;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Signature</label>
							<img src="'.base_url().$value['is_signature'].'" alt="" style="width: 150px; width: 75px;">
							
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Senior Pastor/Designee Name</label>
							<p style=" border: none;border-radius: 0;  border-bottom: 1px solid #434343;  padding: 0; font-size: 14px;">'.$value['designee_name'].'</p>
						</td>
						<td style="text-align: left;">
							<label style="display: inline-block; margin-bottom: 0; padding: 5px 15px 5px 0;    font-weight: 500;">Signature</label>
							<img src="'.base_url().$value['desi_signature'].'" alt="" style="width: 150px; width: 75px;">
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<p style="font-size: 13px;font-weight: 600;text-align: center;line-height: 1.3;    letter-spacing: 0.5px; margin-top: 20px;">*** Must be signed by either Ministy Leader or Inventory Specialist ***</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>';
}
	
	
$html .='</body>
</html>';

$pdf->writeHTML($html, true, false, true, false, '');
// $pdf->Output('webform.pdf', 'I');


$pdf->lastPage();



$pdf->AddPage();

$html = '<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Web Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>';
foreach ($data1 as $key => $value) {
	$html .='<table style="font-family: helvetica, sans-serif; margin: 0 auto; padding: 0;font-size: 14px; font-weight: 400; border:1px solid #ddd; width: 100%; max-width: 700px; background: #fff;">
		<tr>			
			<td style="padding: 10px;">
				<table style="width: 100%;">
					<tr>
						<td colspan="2">
							<h1 style="font-size: 20px; font-weight: 600; text-transform: uppercase;  line-height: 1.5; letter-spacing: 1px; text-align: center;">Assets/Materials incident report form</h1>
							<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">Staffs are required to report any damage, loss or theft owned and operated equipment as soon as possible. An Incident Report Form must be completed and submit within 72 hours of the incident to the Inventory Department.</p>
							<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">Please note that all ministers and/or staff are required to report all actual or suspected damage, loss or theft of any equipment incident immediately.</p>
						</td>
					</tr>
				</table>
				<table style=" border:1px solid #ddd; border-collapse: collapse; margin-top:10px; width:100%;">
					<thead>
						<tr>
							<th colspan="2" style="text-align: center; background: #ededed;"><label style="margin-bottom: 0; font-weight: 600;">Staff/Personal Information</label></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%; padding: 5px 5px;  border:1px solid #ddd;">
								<label style="margin-bottom: 0; font-weight: 500;">Name</label>
								<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['name'].' </p>
							</td>
							<td style="padding: 5px 5px;  border:1px solid #ddd;">
								<label style="margin-bottom: 0; font-weight: 500;">Position/Title</label>';
							if($value['title']=='1'){
								$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">A</p>';
							}
							if($value['title']=='2'){
								$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">B</p>';
							}
							if($value['title']=='3'){
								$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">C</p>';
							}
							$html.='</td>
						</tr>
						<tr>
							<td style="padding: 5px 5px;  border:1px solid #ddd;">
								<label style="margin-bottom: 0; font-weight: 500;">Department</label>';
							if($value['department']=='1'){	
								$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">A</p>';
							}
							if($value['department']=='2'){	
								$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">B</p>';
							}
							if($value['department']=='3'){	
								$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">C</p>';
							}
							$html.='</td>
							<td style="padding: 5px 5px;  border:1px solid #ddd;">
								<label style="margin-bottom: 0; font-weight: 500;">Phone</label>
								<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['phone'].'</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center; background: #ededed;"><label style="margin-bottom: 0; font-weight: 600;">Incident Information</label></td>
						</tr>
						<tr>
							<td colspan="2" style="padding: 5px 5px;  border:1px solid #ddd;">
								<div style="width: 200px; display: inline-block;">
									<label style="margin-bottom: 0; font-weight: 500;">Incident Date:</label>
									<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['inc_date'].'</p>
								</div>
								<div style="width: 200px; display: inline-block;">
									<label style="margin-bottom: 0; font-weight: 500;">Time of Incident:</label>
									<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['time_inc'].'</p>
								</div>
								<div style="width: 200px; display: inline-block;">
									<label style="margin-bottom: 0; font-weight: 500;">Type of Incident:</label>';
								if($value['type_inc']=='1'){
									$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">A</p>';
								}
								if($value['type_inc']=='2'){
									$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">B</p>';
								}
								if($value['type_inc']=='3'){
									$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">C</p>';
								}
								$html.='</div>
								<div style="width: 200px; display: inline-block;">
									<label style="margin-bottom: 0; font-weight: 500;">Reported on:</label>
									<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['re_date'].'</p>
								</div>
								<div style="width: 200px; display: inline-block;">
									<label style="margin-bottom: 0; font-weight: 500;">Time Reported:</label>
									<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['time_re'].'</p>
								</div>	
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center; background: #ededed;"><label style="margin-bottom: 0; font-weight: 600;">Assets/Materials Information</label></td>
						</tr>
						<tr>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><label>List of item (s) Damaged / Lost / Stolen (Please Specify)</label></td>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['list_item'].'</p></td>
						</tr>
						<tr>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><label>Item (s) Identification Number(s) / Serial number</label></td>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['item_no'].'</p></td>
						</tr>
						<tr>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><label>Item (s) Location at Time of Damage / Loss / Stolen</label></td>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['item_damaged'].'</p></td>
						</tr>
						<tr>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><label>How Was the item (s) Damaged / Lost / Stolen? (Detail Description)</label></td>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['item_loc'].'</p></td>
						</tr>
						<tr>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><label>Estimated cost of repair/replacement</label></td>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['cost_repair'].'</p></td>
						</tr>
						<tr>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><label>Person responsible for assets/materials</label></td>
							<td style="padding: 5px 5px;  border:1px solid #ddd;"><p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['parson_assets'].'</p></td>
						</tr>
					</tbody>
				</table>
				<table style="width: 100%; margin-top: 20px;">
					<tr>
						<td>
							<label>Were the asset (s)/material (s) Damage/ Loss/ Theft reported to the Police ?:</label>
						</td>
					</tr>
					<tr>
						<td>';
						if($value['question']=='yes'){
							$html.='<img src="'.base_url().'assets/task.png" alt="" >';
						}else{
							$html.='<img src="'.base_url().'assets/blank-circle.png" alt="" >';
						}
							$html.='<label style="display: inline-block; margin-bottom: 0; font-weight: 500;"> Yes </label>
						</td>
					</tr>
					<tr>
						<td>';
						if($value['question']=='no'){
							$html.='<img src="'.base_url().'assets/task.png" alt="" >';
						}else{
							$html.='<img src="'.base_url().'assets/blank-circle.png" alt="" >';
						}  
							$html.='<label style="display: inline-block; margin-bottom: 0; font-weight: 500;"> No</label>
						</td>
					</tr>
					<tr>
						<td>
							<label>If yes, please provide:</label>
						</td>
					</tr>
					<tr>
						<th colspan="2" style="text-align: center; background: #ededed;padding: 5px 5px;  border:1px solid #ddd;"><label style="margin-bottom: 0; font-weight: 600;">Police Report Information</label></th>
					</tr>
					<tr>
					<td style="width: 50%; padding: 5px 5px;  border:1px solid #ddd;">
						<label style="margin-bottom: 0; font-weight: 500;">Police Report</label>
						<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['police_report'].'</p>
					</td>
					<td style="padding: 5px 5px;  border:1px solid #ddd;">
						<label style="margin-bottom: 0; font-weight: 500;">Station/City</label>
						<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['city'].'</p>
					</td>
				</tr>
					
					<tr>
						<td colspan="2">
							<p style="font-size: 13px;font-weight: 600;text-align: center;line-height: 1.3;    letter-spacing: 0.5px; margin-top: 20px;">*** A Police Report (If Theft) and replacement cost invoice must be attached. ***</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>';
}
$html .='</body>
</html>';

$pdf->writeHTML( $html,true, false, true, false, '');

//Close and output PDF document
// $pdf->Output('example_013.pdf', 'I');

$pdf->lastPage();

$pdf->AddPage();

// $pdf1 = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT,'A4', true, 'UTF-8', false);

$html='<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Web Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>';
foreach ($rs as $key => $value) {

	$html.='<table style="font-family: Arial, sans-serif; margin: 0 auto; padding: 0;font-size: 14px; font-weight: 400; border:1px solid #ddd; width: 100%; max-width: 700px; background: #fff;">
		<tr>			
			<td style="padding: 10px;">
				<table style="width: 100%;">
					<tr>
						<td colspan="2">
							<h1 style="font-size: 20px; font-weight: 600; text-transform: uppercase;  line-height: 1.5; letter-spacing: 1px; text-align: center;">Vehicle Log</h1>							
						</td>
					</tr>
					<tr>
						<td style="width: 50%;">
							<label style="margin-bottom: 0; font-weight: 500;display: inline-block;">Vehicle Description</label>
							<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['vehicle_descrition'].'</p>
						</td>
						<td>
							<label style="margin-bottom: 0; font-weight: 500;display: inline-block;">Vehicle Tag</label>
							<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['tehicle_tag'].'</p>
						</td>
					</tr>
					<tr>
						<td>
							<label style="margin-bottom: 0; font-weight: 500;display: inline-block;">Department</label>';
						if($value['department']=='1'){
							$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">A</p>';
						}
						if($value['department']=='2'){
							$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">B</p>';
						}
						if($value['department']=='3'){
							$html.='<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">C</p>';
						}
					$html.='</td>
						<td>
							<label style="margin-bottom: 0; font-weight: 500; display: inline-block;">Fuel Type</label>
							<p style="font-size: 14px;font-weight: 500;text-align: center;line-height: 1.2;    letter-spacing: 0.5px;">'.$value['fuel_type'].'</p>
						</td>
					</tr>
				</table>
				<table style=" border:1px solid #ddd; border-collapse: collapse; margin-top:10px; width:100%;">
					<thead>
						<tr>
							<th rowspan="2" style="padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Date</th>
							<th colspan="2" style="padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Time</th>
							<th colspan="2" style="padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Milage</th>
							<th rowspan="2" style="padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Destination</th>
							<th rowspan="2" style="padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Purpose</th>
							<th rowspan="2" style="padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Driver (Print name)</th>
							<th colspan="2" style="padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Gasoline</th>
							<th rowspan="2" style="padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Weekly check completed</th>

						</tr>
						<tr>
							<th style="width: 60px;padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Out</th>
							<th style="width: 60px;padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">In</th>
							<th style="width: 60px;padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Out</th>
							<th style="width: 60px;padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">In</th>
							<th style="width: 60px;padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Gals</th>
							<th style="width: 60px;padding: 5px 5px;  border:1px solid #ddd; font-size: 13px;font-weight: 600;">Cost</th>
						</tr>
					</thead>
					<tbody>';
					foreach ($trs as $key => $tr) {
						$html.='<tr>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['date'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['time_out'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['time_in'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['milage_out'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['milage_in'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['destination'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['purpose'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['driver'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['gasoline_gals'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">'.$tr['gasoline_cost'].'</td>
							<td style="font-size: 13px;font-weight: 400;text-align: left;line-height: 1.2; padding: 5px 5px;  border:1px solid #ddd;">';
							if($tr['weekly_check']=='1'){
								$html.='Yes';
							}else{
								$html.='No';
							}
								$html.='</td>
						</tr>';
							}	
						
					$html.='</tbody>
				</table>
			
				<table style="width: 100%; margin-top: 20px;">
					<tr>
						<td>
							<p style="font-size: 13px;font-weight: 600;text-align: center;line-height: 1.3;    letter-spacing: 0.5px; margin-top: 20px;">Weekly Checks Composed of: All lights working; Tres arein good working condition; windshield is undamaged and body work and trim are secure</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>';
}
$html.='</body>
</html>';


$pdf->writeHTML($html,true, false, true, false, '');

//Close and output PDF document
$pdf->Output('webform.pdf', 'I');





?>
