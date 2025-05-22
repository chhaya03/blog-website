<?php
$con = mysqli_connect('localhost', 'root', '@mySql2025', 'usersDetails');



$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];


$query = "INSERT INTO contactData(user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comments')";

mysqli_query($con, $query);

  header('location:index.php');
?>
