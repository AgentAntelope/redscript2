<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>CUSTOMER FEEDBACK</title>
</head>
<body>
	<form action="mailer.php" method="POST">
		<table>
			<tr>
				<td>Your Name:</td>
			</tr>
			<tr>
				<td><input type="text" name="custName"></td>
			</tr>
			<tr>
				<td>Your email address:</td>
			</tr>
			<tr>
				<td><input type="text" name="custEmail"></td>
			</tr>
			<tr>
				<td>Your Feedback</td>
			</tr>
			<tr>
				<td><textarea name="custFeedback"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>