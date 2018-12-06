<!DOCTYPE html>
<html>
<head>
	<title>Matrix Addition</title>
</head>
<body>
	<form action="prog8b.php" method="POST">
	<textarea type="text" required cols="50" rows="8" name="mat-1"></textarea>
	<textarea type="text" required cols="50" rows="8" name="mat-2"></textarea>
	<br />
	<input type="submit" value="Add"/>
	</form>
	<br />
	<?php
	
	$mat = $_POST["mat-1"];
	$mat = explode("\n", $mat);
	
	$matlength = count($mat);
	$mat1 = array();
	for($i = 0; $i < $matlength; $i++) {
		$row = explode(" ", $mat[$i]);
		$rowlength = count($row);
		for($j = 0; $j < $matlength; $j++) {
			$mat1[$i][$j] = $row[$j];
		}
	}
	$mat = $_POST["mat-2"];
	$mat = explode("\n", $mat);
	
	$matlength = count($mat);
	$mat2 = array();
	for($i = 0; $i < $matlength; $i++) {
		$row = explode(" ", $mat[$i]);
		$rowlength = count($row);
		for($j = 0; $j < $matlength; $j++) {
			$mat2[$i][$j] = $row[$j];
		}
	}
	
	$resmat = array(array());
	
	if(count($mat1) != count($mat2) || count($mat1[0]) != count($mat2[0])) {
		echo "Addition not possible";
	}
	else {
		echo "The answer is: <br />";
		for($i = 0; $i < $matlength; $i++) {
			for($j = 0; $j < $matlength; $j++) {
				$resmat[$i][$j] = $mat1[$i] + $mat2[$i][$j];
				echo " ".$resmat[$i][$j];
			}
			echo "<br />";
		}
	}
	
	?>
</body>
</html>
