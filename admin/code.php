<?php
session_start();
include('../config/dbcon.php');
include('../function/myfunction.php');

if(isset($_POST['updateStatusRole']))
{
    $userId = $_POST['userId'];
    $status = $_POST['status'];
    $role = $_POST['role'];

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

else if(isset($_POST['delete_user']))
{
    $userId = mysqli_real_escape_string($con, $_POST['user_id']);

    $delete_query = "DELETE FROM users WHERE id = '$userId'";
    $delete_query_run = mysqli_query($con, $delete_query);
    if($delete_query_run)
    {
        redirect("users.php", "User deleted Successfully");
    }
    else
    {   
        redirect("users.php", "Something Went Wrong");
    }
}
elseif(isset($_POST['delete_subAdmin']))
{
    $userId = mysqli_real_escape_string($con, $_POST['user_id']);

    $delete_query = "DELETE FROM users WHERE id = '$userId'";
    $delete_query_run = mysqli_query($con, $delete_query);
    if($delete_query_run)
    {
        redirect("subAdmin.php", "User deleted Successfully");
    }
    else
    {   
        redirect("subAdmin.php", "Something Went Wrong");
    }
}
elseif(isset($_POST['delete_dealer']))
{
    $userId = mysqli_real_escape_string($con, $_POST['user_id']);

    $delete_query = "DELETE FROM users WHERE id = '$userId'";
    $delete_query_run = mysqli_query($con, $delete_query);
    if($delete_query_run)
    {
        redirect("dealers.php", "User deleted Successfully");
    }
    else
    {   
        redirect("dealers.php", "Something Went Wrong");
    }
}

// Create Sub Admin 
if(isset($_POST['subAdminSubmit']))
{
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $role = mysqli_real_escape_string($con, "sub-admin");
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if email already registered
    $check_email_query = "SELECT email FROM users WHERE email='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);
    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        redirect("createSubAdmin.php", "Email already Registerd");
    }
    else 
    {
        $insert_query = "INSERT INTO users (firstname, lastname, username, email, phone, role, password) VALUES ('$firstname','$lastname','$username','$email','$phone','$role','$password')";
        $inser_query_run = mysqli_query($con,$insert_query);
        if($inser_query_run){
            redirect("createSubAdmin.php", "Sub-Admin Created Successfully");
        }else {
            redirect("createSubAdmin.php", "Something Went Wrong");
        }
    }

}

// Edit User Profile 
if(isset($_POST['profileSubmit']))
{
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $userId =  $_POST['userId'];
    $status =  $_POST['status'];
    $role =  $_POST['role'];
    // $password =  $_POST['password'];

    $query_update = "UPDATE users SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', phone='$phone', status='$status', role='$role' WHERE id ='$userId'";
    // print_r($query_update);
    // die();
    $query_update_run = mysqli_query($con, $query_update);

    if($query_update_run)
    {
        redirect("editProfile.php?id=$userId", "User Prfile Updated Successfully");
    }
    else
    {
        redirect("editProfile.php?id=$userId", "Something Went Wrong");
    }
}
