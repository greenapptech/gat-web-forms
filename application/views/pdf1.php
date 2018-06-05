<?php
$pdf  = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Webform');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAuthor('Author');
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->SetDisplayMode('real', 'default');
$pdf->SetFont('Arial', '', 10);

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
	$html .='<table style="font-family: Arial, sans-serif; margin: 0 auto; padding: 0;font-size: 14px; font-weight: 400; border:1px solid #ddd; width: 100%; max-width: 600px; background: #fff;">
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
$pdf->Output('webform.pdf', 'I');

?>
