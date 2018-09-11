<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="2" >
    <title>Server Date and Time</title>
</head>
<body>
    <center>
    <?php
    echo ("Today is <span style=\"color:red\"><strong>".date("d M Y")."</strong></span>, and the time is <span style=\"color:red\"><strong>".date("h:i:s A")."</strong></span>");
    ?>
    </center>
</body>
</html>