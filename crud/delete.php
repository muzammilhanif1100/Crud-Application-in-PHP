<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];

    $sql = "delete from student where Id = $id";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        header('location:view.php');
    }
    else{

    }

}



?>