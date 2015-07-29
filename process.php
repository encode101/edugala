<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "leads";

	/*$servername = "webdesigningcoursein.globatmysql.com";
	$username = "tutor";
	$password = "Test/@123";
	$dbname = "edugala_training";*/

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$req = "SELECT mobile FROM leads WHERE mobile='$_REQUEST[mobile]'";
	$result = $conn->query($req);

	if ($result->num_rows > 0) {
    	echo "You've Already Placed A Request. Thankyou!";
} else {
    $sql = "INSERT INTO leads (name, mobile) VALUES ('$_REQUEST[name]', '$_REQUEST[mobile]')";
    if ($conn->query($sql) === TRUE) {
    echo "Thank You! We'll Contact You Shortly.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    	
}
	
	


$conn->close();


?>