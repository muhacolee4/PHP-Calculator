<!doctype html>
<html>
<head>
<link rel="stylesheet" href="cal.css" />
<meta charset="utf-8">
<title>Calclator- Project one</title>
</head>

<body>
	<h1>A SIMPLE PHP CALCULATOR</h1>
	<div id="form-div">
	<form>
		<input type="text" name="input1" placeholder="enter the first input" />
		<input type="text" name="input2" placeholder="enter the second input" /><br />
	
		<label> Select operator <select name="opp">
			<option>none</option>
			<option>add</option>
			<option>subtract</option>
			<option>divide</option>
			<option>multiply</option>
			<option>SQRT</option>
			<option>Square</option>
		
		</select></label> <br />
		<button name="submit" type="submit">calculate</button>
	</form>
	</div>
	<div id="anwser">
	
	<?php
	
	
	if(isset($_GET['submit'])){
		
		$input1= $_GET['input1'];
		$input2= $_GET['input2'];
		$opp= $_GET['opp'];
	}
	switch($opp){
		case 'none':echo "please a valid operator from the list";
		case "add":echo $input1+$input2;
			break;
		case "subtract":echo $input1-$input2;
			break;
		case "multiply":echo $input1*$input2;
			break;
		case "divide":echo $input1/$input2;
		break;
		case "SQRT":echo (sqrt($input1));
		break;
		case "Square":echo $input1*$input1;
		
	}
	?>
		</div>
	
</body>
</html>