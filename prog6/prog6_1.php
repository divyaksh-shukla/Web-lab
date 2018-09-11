<?php
$handle = fopen("count.txt", "r+") or die("Unable to Open file!!");

$count = fread($handle, 20);
echo("You are visitor number:<strong>".$count."</strong>");

$count = (int)$count + 1;
fseek($handle, 0);
fwrite($handle, $count);
fclose($handle);
?>