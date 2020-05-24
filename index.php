<?php 
 
 include ('attend.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Register</title>

    <!-- <link href=”PATH/index.css” > -->
    <link rel="stylesheet" href="index.css">


</head>
<body>
    <h1>Attandance Register</h1>

    <form action="attend.php" method="POST">
  <label for="fname">Employee ID:</label><br>
  <input type="text" id="fname" name="eID"><br>
  <!-- <label for="realTime">TOME ENTERED:</label><br> -->
  <input type="hidden" id="realTime" name="timeRec" value="<?php echo date("h:i") ?>"><br>
  <input type="submit" name="save" value="Submit">
</form> 



<a href="playGround.php">play Ground</a>
</body>
</html>