<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Table</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="anchor">
      <a class="" href="index.php">Add Student</a>

    </div>
  <table>
    <thead >
      <tr> 
        <th>Sl no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody">
        <?php
        $sql = "SELECT * FROM `student`";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            while ($row=mysqli_fetch_assoc($result)) {
                $id=$row['Id'];
                $name=$row['username'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $password=$row['password'];
        echo ' <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td> 
        <td>
          <button class="btn-update"> <a href="update.php?updateid='.$id.'" >
              Update</a></button>

          <button class="btn-delete"> <a href="delete.php?deleteid='.$id.'" >
              Delete</a></button>
        </td>
      </tr>';
            }
        } 
        ?>


     
    </tbody>
  </table>

  <script src="script.js"></script>
</body>
</html>
