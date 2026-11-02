<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZon Fitness</title>
    <link rel="stylesheet" href="css/dash.css">
</head>
<body>
    <div class="side-menu">
        <div class="main-menu">
            <h1>Main Menu</h1>
        </div>
        <ul>
            <li><a href="dash.php">Staff</a></li>
            <li><a href="aCustomer.php">Customer</a></li>
            <li><a href="aQueries.php">Queries</a></li>
            <li><a href="appointment">Appointments</a></li>
            <li><a href="adminPR.php">Program Registrations</a></li>
            <div class="link"></div>
            <li><a href="adminLogin.html">Logout</a></li>
        </div>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button type="submit"><img src="images/search.png" alt=""></button>
                </div>
                <div class="user">
                    <img src="images/user.png" alt="">
                    <div class="img-case">
                        <img src="images/user1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="staff">
                    <div class="title">
                        <h2>Appointments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Date</th>
                            <th>Trainer</th>
                            <th>Session</th>
                           
                            
                        </tr>

                        <?php

$server = "localhost";
$username = "root";
$password = "";
$databse = "fitness";

$conn = new mysqli ($server,$username,$password,$databse);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}
$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);

if (!$result){
    die("Invalid query: " .$conn->connect_error);
}
?>
<?php
while($row = $result->fetch_assoc()){
?>

<tr>                           
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['trainer']; ?></td>
                                        <td><?php echo $row['session']; ?></td>
                                       
                                        
                                        
                                    
                                                                   

                                            </tr>
                                            <?php
                                        }
                                        ?>
                    </table>
                </div>
            </div>
    </div>
   
    </div>

    
</body>
</html>