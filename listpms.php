<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

if (isset($_GET["q"])) {
    $q = $_GET["q"];
  }
else {
  $q = "%";
}

echo $q."<br>";

$conn = mysqli_connect("127.0.0.1","root","password","eagle");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT * FROM gpprlite Where `pm` LIKE '%". $q ."%'");

echo "<table>
<tr>
<th>pid</th>
<th>pm</th>
<th>dm</th>
<th>pfm</th>
<th>opname</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['pid'] . "</td>";
    echo "<td>" . $row['pm'] . "</td>";
    echo "<td>" . $row['dm'] . "</td>";
    echo "<td>" . $row['pfm'] . "</td>";
    echo "<td>" . $row['opname'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);

?>
</body>
</html>
