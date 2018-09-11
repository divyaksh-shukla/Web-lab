<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrix addition</title>
</head>
<body>

    <form action="prog8c.php" method="post">
        <textarea name="mat1" id="mat1" cols="30" rows="10"></textarea>
        <textarea name="mat2" id="mat2" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Multiply">
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

        $mat = $_POST["mat2"];
        $mat = explode("\n", $mat);
        for($i = 0 ; $i < count($mat) ; $i++) {
            $row = explode(",", $mat[$i]);
            for ($j = 0 ; $j < count($row) ; $j++) {
                $mat2[$i][$j] = $row[$j];
            }
        }

        $result = [];
        $feasible = true;

        // Checking feasibility
        for ($i = 1 ; $i < count($mat1) ; $i++) {
            if(count($mat1[$i]) != count($mat1[$i-1]))
                $feasible = false;
        }
        for ($i = 1 ; $i < count($mat2) ; $i++) {
            if(count($mat2[$i]) != count($mat2[$i-1]))
                $feasible = false;
        }
        if(count($mat1[0]) != count($mat2))
            $feasible = false;

        if($feasible == true) {
            echo "<table>";
            for ($i = 0 ; $i < count($mat1) ; $i++) {
                echo "<tr>";
                for ($j = 0 ; $j < count($mat2[0]) ; $j++) {
                    $result[$i][$j] = 0;
                    for ($k = 0 ; $k < count($mat2) ; $k++) {
                        $result[$i][$j] += $mat1[$i][$k] +  $mat2[$k][$j];
                    }
                    echo "<td>".$result[$i][$j]."</td>";
                }
                echo "</tr>"; 
            }
            echo "</table>";
        }
        else {
            echo "Matrices cannot be multiplied";
        }

    ?>
</body>
</html>
