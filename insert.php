<?php
$con=mysqli_connect("localhost","root","","Test123");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Table1 (Vards, Uzvards, Profesija)
VALUES
('$_POST[Vards]','$_POST[Uzvards]','$_POST[Profesija]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);

?>
<script>
	window.location.replace("index.php");
	</script>
