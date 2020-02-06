<?php 

function checkkey() {
$servername = "HOST";
$username = "USERNAME";
$password = "PASSWORD";
$dbname = "DATABASE";

$conn = new mysqli($servername, $username, $password, $dbname); 

$key = file_get_contents("inc/key.txt");
$sql = "SELECT * FROM `keys` WHERE `key` LIKE '$key'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo $key;
    
} else {
    header("location:activate.php");
}
$conn->close();
}

?>
