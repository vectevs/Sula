<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
.table1 {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
.table1 th {
background-color: #588c7e;
color: white;
height: 55px;

}

.table1 tr:nth-child(even) {background-color: #f2f2f2}
.table2 {
border-collapse: collapse;
width: 25%;
font-size: 25px;
text-align: left;
font-family: monospace;
}
.table2 th {
	background-color: orange;
	height:45px;
}

</style>
</head>
<body>

<table class="table1">
<tr>
	
<th>ID</th>
<form action="insert.php" method="post" class="form-style-1">
<th>Vards <input type="text" name="Vards"> </th>
<th>Uzvards <input type="text" name="Uzvards"> </th>
<th>Profesija <select name="Profesija">
  <option value="1">Stradnieks</option>
  <option value="2">Programetajs</option>
  <option value="3">Setnieks</option>
  <option value="4">Galdnieks</option>
</select> </th>

</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "Test123");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID, Vards, Uzvards, Profesija FROM Table1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Vards"] . "</td><td>"
. $row["Uzvards"]. "</td><td>" . $row["Profesija"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }

$conn->close();

?>


<div class="button_cont" align="center">
<input type="submit" style=" " class="button" rel="nofollow noopener">
</div>
</form>
</body>
<table class="table2">
	<tr>
		<th> Prof ID </th>
		<th> Profesija </th>

	<?php

$conn = mysqli_connect("localhost", "root", "", "Test123");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Profesijas_ID, Profesija FROM profesijas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Profesijas_ID"] . "</td><td>" .  $row["Profesija"] . "</td> </tr>";
}
echo "</table>";
} else { echo "0 results"; }

$conn->close();

?>
<style>
	.button {
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: #ed3330;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
.button:hover {
background: #434343;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}
</style>
