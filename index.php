<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<fieldset>
	<legend>Simple Calculator</legend>
		<form action="" method="post" class="text-center">
			First Value :<br>
			<input type="text" name="firstNumber"><br>
			Second Value :<br>
			<input type="text" name="secondNumber"><br>
			<select name="math" id="btn">
				<option value="">Select</option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">x</option>
				<option value="/">/</option>
			</select>
			<button type="submit" name="submit">Submit</button> 
		</form>
		<p>
			<?php
				include('function.php');
				if(isset($_POST['submit'])){
					$first=(int)$_POST['firstNumber'];
					$second=(int)$_POST['secondNumber'];
					$math=$_POST['math'];
					if(empty($first) OR empty($second)){
						echo"Please fill this input field";
					}
				$obj = new Calculator;
				$obj->add($first,$second,$math);	
				}
			?>
		</p>		
	</fieldset>
</body>
</html>
<?php


?>
