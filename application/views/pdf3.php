<?php

 $pdf  = new TCPDF('landscape', PDF_UNIT, 'A4', true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
$pdf->SetFont('helvetica', 'I', 20);

$pdf->AddPage();

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
$pdf->Output('form3.pdf', 'I');

?>