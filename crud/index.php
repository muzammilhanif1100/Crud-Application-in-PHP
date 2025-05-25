<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `student`(`username`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        header('location:view.php');        
    }
    
    
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Table</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  

  <div class="form-container">
    <a href="view.php">View----></a>
    <h2>User Registration</h2>
    <form method="post">
      <input type="text"  name="name" placeholder="Name" required>
      <input type="email"  name="email" placeholder="Email" required>
      <input type="text" name="mobile" placeholder="Mobile" required>
      <input type="password"  name="password" placeholder="Password" required>
      <button type="submit" name="submit">Submit
        
      </button>
      
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
