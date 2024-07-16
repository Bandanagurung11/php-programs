<html>
<head>
	<title>Display Table Data</title>
</head>
<body>
	<h1>Table Data</h1>
	<?php
	// Connect to database
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "studentDB";

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// Retrieve data from table
	$sql = "SELECT * FROM student1";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // Display data in a table
	    echo "<table border='1'>";
	    echo "<tr><th>ID</th>
                <th>Name</th>
                <th>roll</th>
                <th>Email</th>
                 </tr>";
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "<tr><td>" . $row["id"] . "</td> 
                   <td>" . $row["name"] . "</td>
                   <td>" . $row["roll"] . "</td>
                   <td>" . $row["email"] . "</td>
                    </tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	// Close database connection
	mysqli_close($conn);
	?>
</body>
</html>