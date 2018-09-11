<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrix addition</title>
</head>
<body>

    <form action="prog8b.php" method="post">
        <textarea name="mat1" id="mat1" cols="30" rows="10"></textarea>
        <textarea name="mat2" id="mat2" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Add">
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
        if(count($mat1) == count($mat2)){
            // Same number of rows

            for ($i = 0 ; $i < count($mat1) ; $i++) {
                if(count($mat1[$i]) != count($mat2[$i]) ){
                    //Different number of columns in some i-th row
                    $feasible = false;
                }
            }
        }
        else{
            $feasible = false;
        }

        if($feasible == true) {
            echo "<table>";
            for ($i = 0 ; $i < count($mat1) ; $i++) {
                echo "<tr>";
                for ($j = 0 ; $j < count($mat1[$i]) ; $j++) {
                    $result[$i][$j] = $mat1[$i][$j] +  $mat2[$i][$j];
                    echo "<td>".$result[$i][$j]."</td>";
                }
                echo "</tr>"; 
            }
            echo "</table>";
        }
        else {
            echo "Matrices do not have same order";
        }

    ?>
</body>
</html>
