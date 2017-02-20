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

	<div class="coin">
			<?php
 $THB=$_POST['THB'];   
 $coin=$_POST['coin'];
 $result = 0;
 if($coin == 'JPY'){
	   $result = $THB * 3.2307;
?>  
	<h2>เงินเยน(JPY)</h2>
	<p><?php echo $result; ?></p>


  <?php
	}else if($coin == 'USD'){
	    $result = $THB * 0.0286;
	?>	
		<h2>ดอลล่าร์สหรัฐ(USD)</h2>
	    <p>
	    	<?php echo $result; ?>
	    </p>
	<?php
	}else if($coin == 'CNY'){
	    $result = $THB * 0.20;
	?>
		<h2>หยวนจีน(CNY)</h2>
	    <p><?php echo $result; ?></p>
	 <?php
	}
  
  	?>
  	<h1>BATH</h1>
	 </div>  <!-- coin -->
	</div><!-- wrap-exchange -->
	<a href="index.php">
		<div class="btn-back">
			<img src="img/back.png">
		</div><!-- btn-back -->
	</a>
	</div><!-- wrapper -->


</body>
</html>