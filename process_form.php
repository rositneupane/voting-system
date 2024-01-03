<?php
// Assuming you have a MySQL connection established
include("connection.php");
// Retrieve form data
$fullname = $_POST['fullname'];
$about = $_POST['about'];

// Insert data into the MySQL database
$sql = "INSERT INTO languages (fullname, about) VALUES ('$fullname', '$about')";

// Execute the query
if (mysqli_query($con, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close the MySQL connection
mysqli_close($con);
?>
