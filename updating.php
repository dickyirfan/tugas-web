<?php
   if( $_GET["id"] && $_GET["id2"] && $_GET["nama2"] ) {

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

	$sql = "UPDATE `matkul` SET `idmatkul` = '".$_GET["id2"]."', `namamatkul` = '".$_GET["nama2"]."' WHERE `matkul`.`idmatkul` =".$_GET["id"];
;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully<br/>";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
echo "<a href='update.php' >back</a>     "; 
echo "<a href='tugas2.html' >home</a>";
   }

?>