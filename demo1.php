<html>
<head><title>This is my first webpage</title></head>
<body bgcolor = "blue"
<p>This HTML will get delivered as is</p>
<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>";
	
	$num1 = 6;
	$num2 = 2;
	$sum = $num1 + $num2;
	$username = "Maria";    
	echo $username;
	$count = 17;
	echo "<br>";
	echo $count;
	echo"<br>";
	echo "6+2= $sum";
	echo"<br>";
	echo "My Name is".$username;
//This is the snippet for php code 
?>


</body>
</html>