

<?php
$servername = "localhost";
$username = "javascri_wp2";
$password = "P@ssw0rd123456";
$dbname = "javascri_wp2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM wp_nf3_forms";
// $result = $conn->query($sql);
// $rows = array();
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//
//   $rows[] = $row ;
//     }
// } else {
//     echo "0 results";
// }
//
//
// print json_encode($rows);
// $conn->close();
?>
