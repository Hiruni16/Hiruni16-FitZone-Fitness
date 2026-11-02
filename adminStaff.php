<?php

$server = "localhost";
$username = "root";
$password = "";
$databse = "fitness";

$conn = new mysqli ($server,$username,$password,$databse);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}
$sql = "SELECT * FROM staff";
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
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <a href='update.php'>Update</a>
                                        <a href='delete.php'>Delete</a>                                                      

                                            </tr>
                                            <?php
                                        }
                                        ?>