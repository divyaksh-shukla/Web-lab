<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrix addition</title>
</head>
<body>

    <form action="prog8d.php" method="post">
        <textarea name="mat1" id="mat1" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Transpose">
    </form>
    
    <?php
        $mat = $_POST["mat1"];
        $mat = explode("\n", $mat);
        for($i = 0 ; $i < count($mat) ; $i++) {
            $row = explode(",", $mat[$i]);
            for ($j = 0 ; $j < count($row) ; $j++) {
                $mat1[$i][$j] = $row[$j];
            }
        }
        
        $result = [];
        for($i = 0 ; $i < count($mat1) ; $i++) {
            for ($j = 0 ; $j < count($mat1[$i]) ; $j++) {
                $result[$j][$i] = $mat1[$i][$j];
            }
        }
        echo "<table>";
        for($i = 0 ; $i < count($result) ; $i++) {
            echo "<tr>";
            for ($j = 0 ; $j < count($result[$i]) ; $j++) {
                echo "<td>".$result[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
