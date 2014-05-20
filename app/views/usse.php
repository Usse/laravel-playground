<?php 
	//include_once './vendor/erusev/parsedown/Parsedown.php'; 
	//include_once './vendor/autoload.php';
?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>usse</title>
	</head>
	
	<body id="usse" onload="">
		Woo Usse!
		
		
		<?php 
			$Parsedown = new Parsedown();
			echo $Parsedown->text('Hello _Parsedown_! usse');
		?>
	</body>

</html>	