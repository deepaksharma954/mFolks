<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>list for the shopkeeper</h2>

<table>
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
  </tr>
  <?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mfolks');
$con= mysqli_connect('localhost','root');
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

mysqli_select_db($con, 'mfolks');

						$selectquery1 = " select * from list_items ";

						$query1 = mysqli_query($con, $selectquery1);
						$number = mysqli_num_rows($query1);


						while ($result = mysqli_fetch_assoc($query1)) {
						?>

							<?php echo "<tr>
    <td>".$result["title"]."</td>
    <td>".$result["description"]."</td>
    <td>".$result["price"]."</td>
  </tr>"; ?>

						<?php
						}
						?>
</table>

</body>
</html>
