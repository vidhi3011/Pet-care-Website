<?php
$conn = mysqli_connect("localhost","root","","pawdb");
// if(isset($_POST['petid']))
// $petid = $_POST['petid'];            
// $sql = "DELETE FROM putforadoption WHERE petid = $petid" ;

$sql = "DELETE FROM putforadoption WHERE petid ='" . $_GET["petid"] . "'";

mysqli_query($conn,$sql);
 echo "<center><h3><script>alert('Record Deleted');
    </script></h3></center>"; 
echo "<script>setTimeout(\"location.href = 'adminp.php';\",500);
    </script>";

?>