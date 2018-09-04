<?php

$op1 = $_POST["operand1"];
$op2 = $_POST["operand2"];
$op = $_POST["operator"];

switch($op) {
	case "+":
		$result = (int)$op1 + (int)$op2;
		break;
	case "-":
		$result = (int)$op1 - (int)$op2;
		break;
	case "*":
		$result = (int)$op1 * (int)$op2;
		break;
	case "/":
		if($op2 == 0)
			$result = "Divide by zero error";
		else
			$result = (int)$op1 / (int)$op2;
		break;
	default:
		$result = "No such operator";
		break;
}

echo "The result is: ".$result;

?>
