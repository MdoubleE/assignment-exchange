<html>
<head>
	<title></title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<div class="wrapper">
		<div class="wrap-exchange">
			<h1>EXCHANGE RATES</h1>
			<form action="exchange.php" method="POST" class="form-exchange">
				<p>จำนวนเงิน(บาท)</p>
				<input type="text" name="THB" class="money-thai" value="0.00 Bath">
				<p>เลือกสกุลเงิน</p>
				<select name="coin" class="money-rates" >
		                <option value="JPY" >เงินเยน(JPY)</option>
		                <option value="USD" >ดอลล่าร์สหรัฐ(USD)</option>
		                <option value="CNY" >หยวนจีน(CNY)</option>               
		        </select>
				<input type="submit" name="exchange" value="คำนวณ" class="btn-process">
			</form>
		</div><!-- wrap-exchange -->
	</div><!-- wrapper -->
</body>
</html>