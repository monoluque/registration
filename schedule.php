<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "registration";

// Create connection
$db = mysqli_connect('localhost', 'root', '', 'registration');
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, instrument, role FROM users";
$result = $db->query($sql);

if (mysqli_num_rows($result) > 0) {

 
    echo "<h1>Student's Schedule</h1><br>";
    echo "<table><tr><th>Student Name</th>
                     <th>Course</th>
                     <th>Day/Time</th>
					<th>Course 1</th>
					<th>Course 2</th>
					<th>Course 3</th>
					<th>Course 4</th>
					<th>Course 5</th>
					<th>Room ID</th>


                     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["username"]."</td><td>".$row["instrument"]."</td>";
        echo "<td><input type='datetime-local' name='datetime' value='' id='time'></td>";
        echo "<td><input type='checkbox' name='checkbox' value='' id='course1'></td>";
        echo "<td><input type='checkbox' name='checkbox' value='' id='course2'></td>";
        echo "<td><input type='checkbox' name='checkbox' value='' id='course3'></td>";
        echo "<td><input type='checkbox' name='checkbox' value='' id='course4'></td>";
        echo "<td><input type='checkbox' name='checkbox' value='' id='course5'></td>";
         echo "<td><input type='text' name='roomID' value='' id='roomID'></td>";
		echo "</tr>";
    
    }
    echo "</table>";
}  else {
    echo "0 results";
} 
$db->close();
?>

<!DOCTYPE html>
<html>

<head>
    
	<meta charset='UTF-8'>
	
	<title>Non-Responsive Table</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="schedulestyle.css">

    <body>
        
</html>

