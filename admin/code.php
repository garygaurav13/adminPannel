<?php
session_start();
include('../config/dbcon.php');
include('../function/myfunction.php');

if(isset($_POST['updateStatusRole']))
{
    $userId = $_POST['userId'];
    $status = $_POST['status'];
    $role = $_POST['role'];

    // print_r($userId);
    // die();
    $query_update = "UPDATE users SET status='$status', role='$role' WHERE id ='$userId'";

    $query_update_run = mysqli_query($con, $query_update);

    if($query_update_run)
    {
        redirect("edit-user.php?id=$userId", "User Updated Successfully");
    }
    else
    {
        redirect("edit-user.php?id=$userId", "Something Went Wrong");
    }
}
?>