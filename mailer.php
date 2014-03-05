<?php

$custName = $_POST['custName'];
$custEmail = $_POST['custEmail'];
$custFeedback = $_POST['custFeedback'];

$toaddress = "marshallc5961@gmail.com";
$subject = "Feedback from web site";
$mailContent = "Customer Name: ".$custName."\n".
				"Customer Email:".$custEmail."\n".
				"Customer Comments:\n".$custFeedback."\n";

$fromAddress = "From marshall@redscriptdesign.com";

//mail($toaddress,$subject,$mailContent,$fromAddress);

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Bob's Auto Parts - Feedback Submitted</title>
	<h1>HEYOOOO TOKYOOOOO</h1>
	<div><?php 
		$mailContentReader = strtok($mailContent, " ");
		while($mailContentReader != ""){
			$mailContentReader = strtok(" ");
			echo $mailContentReader."</br >";
		}
		 ?></div>
</head>
<body>
	
</body>
</html>