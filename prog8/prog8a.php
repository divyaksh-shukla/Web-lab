<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="prog8a.php" method="post">
        <input type="number" name="operand1">
        <input type="number" name="operand2">
        <br>
        <input type="radio" name="operator" id="operator" value="+">+</input>
        <input type="radio" name="operator" id="operator" value="-">-</input>
        <input type="radio" name="operator" id="operator" value="*">*</input>
        <input type="radio" name="operator" id="operator" value="/">/</input>
        <input type="submit" value="Calculate">
        <br>
    </form>

    <?php
        $op1 = $_POST["operand1"];
        $op2 = $_POST["operand2"];
        $op = $_POST["operator"];
        $result = "";
        switch($op) {
            case "+":
                $result = $op1 + $op2;
                break;
            case "-":
                $result = $op1 - $op2;
                break;
            case "*":
                $result = $op1 * $op2;
                break;
            case "/":
                if($op2 == 0)
                    $result = "Divide by zero Error";
                else
                    $result = $op1 / $op2;
                break;
            default:
                $result = "No output";
        }

        echo "".$result;
    ?>
</body>
</html>
