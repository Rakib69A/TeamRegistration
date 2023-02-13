<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trip";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM team";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " <br> No   :" . $row["sno"]. " <br>   Dept. Name   :" . $row["dept"]. " <br>   Team Name   :" . $row["tname"]. "<br>  First_Contestant_ID   :" . $row["idA"]. " <br>  First_Contestant_Name   :" . $row["nameA"]. " <br>  Fist_Contestant_batch   :" . $row["batchA"]. " <br>  Second_Contestant_ID    : " . $row["idB"]. " <br>   Second_Contestant_Name  : " . $row["nameB"]. " <br>  Second_Contestant_batch : " . $row["batchB"]. " <br>   Third_Contestant_ID     :  " . $row["idC"]. " <br> Third_Contestant_Name   : " . $row["nameC"]. " <br> Third_Contestant_batch  : " . $row["batchC"]. "<br>";
  }
} else {
  echo "0 results";
}
echo "<br> <br>";
$conn->close();
?>