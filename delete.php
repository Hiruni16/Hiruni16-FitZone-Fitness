<?php
$server = "localhost"; // Your database host
$username = "root"; // Your database username
$password = ""; // Your database password
$databse = "fitness"; // Your database name

$conn = new mysqli($server, $username, $password, $databse);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // Use prepared statements to prevent SQL injection
    $deleteQuery = $conn->prepare("DELETE FROM staff WHERE name = ?");
    $deleteQuery->bind_param("s", $name);

    // Execute the query
    if ($deleteQuery->execute()) {
        echo "Record deleted successfully!";
        // Redirect to the main page after deletion
        header("Location: dash.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the prepared statement
    $deleteQuery->close();
} else {
    echo "No name provided to delete!";
}

// Close the connection
$conn->close();
?>
