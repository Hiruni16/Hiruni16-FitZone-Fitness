<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$databse = "fitness";

$conn = new mysqli ($server,$username,$password,$databse);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password FROM users WHERE username='$username'";
    $result = $conn->query($sql);


if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($password == $row['password']){
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        // Redirect to dashboard
        header("Location: welcomepg.html");
        exit();
    }else{
        echo "
            <link rel='stylesheet' href='css/login.css'>

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
            <h1>Incorrect Username or Password! <br>Please Try Again</h1>
            <div class='input-box'>
                            
            </div>
            <button type='submit' class='btn'><a href='login.html'>Back</a></button>
            </div> ";
    }
}else{
    echo "";
}
}else{
    echo "";
}

$conn->close();
?>