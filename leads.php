<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "leads";

	/*$servername = "webdesigningcoursein.globatmysql.com";
	$username = "tutor";
	$password = "Test/@123";
	$dbname = "edugala_training";
*/
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$req = "SELECT * FROM leads";
	$result = $conn->query($req);

	if ($result->num_rows > 0) {
	?>
	<table width="100%" border="1px">
		<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Mobile</td>
		</tr>
	
	<?php
    	while($row = $result->fetch_assoc()) {
        	echo "<tr><td>" . $row["id"]. "</td><td> " . $row["name"]. "</td><td> " . $row["mobile"]. "</td></tr>";
    	}
    ?>
    </table>
    <?php
	} else {
	   echo "No Leads Yet";
	} 
	
	


$conn->close();


?>