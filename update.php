<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness</title>
    <link rel="stylesheet" href="css/register.css">
    
</head>
<body>

     <!-- Header Section Code -->
     <header>
        <a href="index.html"class="logo">F<span>f</span></a>

        <div class='bx bx-menu' id="menu-icon"></div>


        <div class="top-btn">
            <a href="dash.php" class="nav-btn">Back</a>
        </div>
    </header>


    <div class="container">
        <div class="title">Update Staff Information</div>
        <form action="" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="input-box">
                    <span class="details">User Name</span>
                    <input type="text" name="username"   placeholder="Username" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" name="password" placeholder="Password" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text"  name="email"  placeholder="Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="Address" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text"  name="phone"  placeholder="Phone Number" required>
                </div>
               
        
            </div>

            <div class="gender-details">
               
                <div class="category">
                                
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    

    // SQL query to update user information
    $sql = "UPDATE staff SET 
             name='$name', 
             username='$username', 
             password='$password', 
             email='$email', 
             address='$address', 
             phone='$phone' 
             WHERE name='$name'";

    if ($conn->query($sql) === TRUE) {
        echo "  <link rel='stylesheet' href='css/login.css'>

        <header>
        <a href='index.html'class='logo'>F<span>f</span></a>

        <div class='bx bx-menu' id='menu-icon'></div>

      
        </header>
        
        <div class='container'>
        <form action='login.php' method='post'>
            <h1>Record updated successfully!</h1>
            <div class='input-box'>     
            </div>

            <button type='submit' class='btn'><a href='dash.php'>Back</a></button>
            </div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

