<!DOCTYPE html>
<html>
<head>
  
</head>
<body style="font-family: Arial, sans-serif; background-color: #1e1e2f; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; color: white;">

<div id='form-container'>


  <form style="background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.2); width: 300px;" method="POST">
    <h2 style="text-align: center; color: #333;">Register</h2>

    <label for="name" style="display: block; margin-top: 15px; color: #555;">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your Name" required
           style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">

    <label for="email" style="display: block; margin-top: 15px; color: #555;">Email:</label>
    <input type="email" id="email" name="mail" placeholder="you@example.com" required
           style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">

    <label for="password" style="display: block; margin-top: 15px; color: #555;">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter password" required
           style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">

    <button type="submit" name="btn"
            style="width: 100%; padding: 10px; margin-top: 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
      Submit
    </button>
  </form>
  </div>




 <?php
$con = mysqli_connect('localhost','root', '@mySql2025', 'usersDetails');

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $password = $_POST['password'];

    $query = "INSERT INTO mydata(name,email,password) VALUES ('$name', '$email', '$password')";
    $execute = mysqli_query($con, $query);

    if($execute){
        header('Location: index.php'); 
        exit(); 
    } else {
        echo "Failed to insert data.";
    }
}
?>


</body>
</html>