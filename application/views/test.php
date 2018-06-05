


<?php 
	echo '<pre>';
	// print_r($rs);
	// print_r($rs1);
	foreach ($rs as $key => $value) {
		
		 echo $value['model'][$key];
	}
?>