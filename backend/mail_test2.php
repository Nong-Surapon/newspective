<?php
	$strTo = "surapon@newspective.co.th";
	$strSubject = "Test sending mail";
	$strHeader = "From: surapon@newspective.co.th";
	$strMessage = "My Body & My Description";
	$result = mail($strTo,$strSubject,$strMessage,$strHeader); 
	
        echo "result = ".$result;
?>
