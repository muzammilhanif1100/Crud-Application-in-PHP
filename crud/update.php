<?php
include 'connect.php';


$id = $_GET['updateid'];
$sql = "SELECT * FROM `student` WHERE Id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['username'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];




$id=$_GET['updateid'];
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "UPDATE `student` SET `username`='$name',`email`='$email',`mobile`='$mobile',`password`='$password' where Id=$id";
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
    <h2>User Update</h2>
    <form method="post">
      <input type="text"  name="name" placeholder="Name" value="<?php echo $name; ?>" required>
      <input type="email"  name="email" placeholder="Email" value="<?php echo $email; ?>" required>
      <input type="text" name="mobile" placeholder="Mobile" value="<?php echo $mobile; ?>" required>
      <input type="password"  name="password" placeholder="Password" value="<?php echo $password; ?>" required>
      <button type="submit" name="submit">Update
        
      </button>
      
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
