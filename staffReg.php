<?php

$server = "localhost";
$username = "root";
$password = "";
$databse = "fitness";

$conn = new mysqli ($server,$username,$password,$databse);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];






$sql = "INSERT INTO staff (name, username, password, email, address, phone) VALUES ('$name', '$username','$password','$email', '$address', '$phone')";


if($conn->query($sql)=== TRUE){
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
            <h1>Successfully Your Account has Created! <br></h1>
            <div class='input-box'>
                            
            </div>
            <button type='submit' class='btn'><a href='dash.php'>Back</a></button>
            </div>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

?>