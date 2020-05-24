

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>All worked</h1>
   <?php
require_once "dbConnection.php";
?>
<?php 
 
 include ('attend.php');

?>

   <table>
<thead>
<tr>
<th>name</th>
<th>Location</th>
<th>Action</th>
</tr>
</thead>
<?php
$result = $conn->query("SELECT * FROM attend") or die($mysqli->error);
?>
<?php while($row = $result->fetch_assoc()): ?>

<tr>
<td><?php echo $row['eID']; ?></td>
<td><?php echo $row['timeRec']; ?></td>
<td>
<!-- <a class="btn btn-primary" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a> -->
<!-- <a class="btn btn-danger" href="process.php?delete=<?php echo $row['id']; ?>">Delete</a> -->

</td>
</tr>
<?php endwhile; ?>
</table>


<?php

function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';

}

?>
   
</body>
</html>