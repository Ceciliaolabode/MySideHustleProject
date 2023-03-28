<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>
	<h1>Simple Calculator</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<input type="number" name="num1" placeholder="Enter first number" required>
		<select name="operator" required>
			<option value="">Select an operator</option>
			<option value="+">Addition</option>
			<option value="-">Subtraction</option>
			<option value="*">Multiplication</option>
			<option value="/">Division</option>
		</select>
		<input type="number" name="num2" placeholder="Enter second number" required>
		<input type="submit" name="submit" value="Calculate">
	</form>

	<?php
		if(isset($_POST["submit"])){
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$operator = $_POST["operator"];

            // using the conditional statement 'switch'
			switch($operator){
				case "+":
					$result = $num1 + $num2;
					break;
				case "-":
					$result = $num1 - $num2;
					break;
				case "*":
					$result = $num1 * $num2;
					break;
				case "/":
					if($num2 == 0){
						$result = "Cannot divide by zero";
					}
					else{
						$result = $num1 / $num2;
					}
					break;
				default:
					$result = "Invalid operator";
			}
			echo "<p>Result: ".$result."</p>";
		}
	?>
</body>
</html>

<!-- A simple calculator application that allows users to perform basic arithmetic operations such as addition, subtraction, multiplication, and division. -->