<?php
// Database connection
$server = "localhost"; // Your database host
$username = "root"; // Your database username
$password = ""; // Your database password
$databse = "fitness"; // Your database name

$conn = new mysqli($server, $username, $password, $databse);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $program = $_POST['program'];
    
    // Prepare SQL query to insert data
    $sql = "INSERT INTO programReg (full_name, email, program) 
            VALUES ('$full_name', '$email', '$program')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "  <link rel='stylesheet' href='css/login.css'>

        <header>
        <a href='index.html'class='logo'>F<span>f</span></a>

        <div class='bx bx-menu' id='menu-icon'></div>

        <ul class='navbar'>
            <li><a href='index.html#home'>HOME</a></li>
            <li><a href='index.html#about' >ABOUT</a></li>
            <li><a href='services.html'>SERVICES</a></li>  
            <li><a href='blog.html'>BLOG</a></li>
            <li><a href='contact.html'>CONTACT</a></li>
        </ul>
        </header>
        
        <div class='container'>
        <form action='login.php' method='post'>
            <h1>Program Registration is Successfull!</h1>
            <div class='input-box'>
                            
            </div>
            <button type='submit' class='btn'><a href='welcomepg.html'>Back</a></button>
            </div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
