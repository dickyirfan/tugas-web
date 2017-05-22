<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <?php
 echo "<title>SELECT</title><h1>SELECT</h1>";
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

$sql = "SELECT idmatkul, namamatkul FROM matkul";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    echo "<table class='table table-bordered'>";
    echo "<tr><td>ID MATKUL</td><td>NAMA MATKUL</td</tr><tbody>";
    while($row = $result->fetch_assoc()) {
          echo "<tr ><td> " . $row["idmatkul"].
         " </td><td>" . $row["namamatkul"]."</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}
echo "<a href='tugas2.html' >back</a>";
$conn->close();
?> 