<?php

 $pdf  = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A4', true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
$pdf->SetFont('helvetica', 'I', 20);

$pdf->AddPage();

$html = '<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Web Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>';
foreach ($data as $key => $value) {
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
$pdf->Output('example_013.pdf', 'I');

?>



