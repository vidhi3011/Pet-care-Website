<?php
	$con= new mysqli('localhost:3306','root','','pawdb')or die("Could not connect to mysql".mysqli_error($con));

  $str = "SELECT * FROM vet WHERE name = '".$_GET['name']."'";
  $result = $con->query($str);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "latitude " . $row["latitude"]. " - longitude: " . $row["longitude"]. " " . $row["owner"]. "<br>";
    $latitude = $row['latitude'];
    $longitude = $row['longitude'];
  }
} else {
  echo "0 results";
}


	if (isset($_GET["name"]))
	{

		//$latitude=$_POST['latitude'];
		//$longitude=$_POST['longitude'];
		?>


<iframe width="2000" height="500" frameborder="0" style="border:0" src="http://maps.google.com/maps?q=<?php echo $latitude;?>,<?php echo $longitude;?>&output=embed"></iframe>
		<?php
	}
	?>