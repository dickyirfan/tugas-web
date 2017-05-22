<?php
   if( $_GET["id"] ) {

      $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_matkul";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "DELETE FROM matkul WHERE idmatkul=".$_GET["id"];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully<br/>";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
echo "<a href='delete.php' >back</a>     "; 
echo "<a href='tugas2.html' >home</a>";
   }

?>