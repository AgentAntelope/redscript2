<?php
//create variables

$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$tireqty = $_POST['tireqty'];
$find = $_POST['find'];
$totalqty = 0;
$totalamount = 0.00;
define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);

$totalqty = $oilqty + $sparkqty + $tireqty;

$arrayFun = array(array('TIR','Tire', 100),
					array('SPRK', 'Spark Plug', 20),
					array('OIL', 'Oil', 10));

?>

<html>
	<head>
		<title>Bob's</title>
	</head>
	<body>
		<h1>Bob's Auto Parts</h1>
		<h2>Order Results</h2>
		<?php
		function myCompare($x, $y){
			if($x[1] > $y[1]){
				return 1;
			}else if($x[1] == $y[1]){
				return 0;
			}else{
				return -1;
			}

		}
		 
		usort($arrayFun, "myCompare");
		$i = 0;
		while($i<sizeof($arrayFun)){
			$thisArray = $arrayFun[$i];
			$j = 0;
			while($j<sizeof($thisArray)){
				echo $thisArray[$j].' ';
				$j++;
			}
			echo '<br />';
			$i++;
		}


		echo 'ARRAY SIZE = '.sizeof($arrayFun).'<br />'; 	


		if($totalqty == 0){
			echo 'YOU DIDNT ORDER SHIT DUMBASS';
		}else{
			$totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;		
			echo '<p>Order Processed at '.date('H:i, jS F Y').'</p>';
			echo '<p>Your order is as follows: </p>'.$tireqty.' tires<br/>'.$oilqty.' bottles of oil<br/>'.$sparkqty.' sparkplugs<br/>';
			echo 'Subtotal: $'.number_format($totalamount, 2).'.<br />';
			$taxRate = .10;
			$totalamount *= (1+$taxRate);
			echo 'Total including tax: $'.number_format($totalamount, 2).'.<br />';
			echo 'isset $tireqty = '.isset($tireqty).'.<br />';
			if(isset($tireqty)){
				echo "AAAHHHH BOOOYAH <BR />";
			}
			echo 'isset $bogus = '.isset($bogus).'.<br />';
			if(empty($bogus)){
				echo "AAAHHHH BOOOYAH <BR />";
			}			
		}

		switch ($find) {
			case 'a':
				echo 'nigga be a regular customer!';
				break;
			case 'b':
				echo 'nigga watch a fuck ton of TV!';
			case 'c':
				echo 'we called that nigga! nice!';
			case 'd':
				echo 'nigga got some nigga friends';
			default:
				# code...
				break;
		}

		?>
	</body>
	</html>

