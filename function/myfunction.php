<?php
include("../config/dbcon.php");

// Get All Dealers
function getAllDealers($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE role='dealer'";
    return $query_run = mysqli_query($con, $query);
}

// Get All SubAdmin
function getAllsubAdmin($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE role='sub-admin'";
    return $query_run = mysqli_query($con, $query);
}

// Get All Users
function getAllUsers($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE role!='admin'";
    return $query_run = mysqli_query($con, $query);
}


function getById($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id='$id'";
    return $query_run = mysqli_query($con, $query);
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}

// Get Profile
function getProfile($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id='$id'";
    return $query_run = mysqli_query($con, $query);
}


// Testimonials
function getalltestimonials($table)
{
    global $con;
    $query = "SELECT * FROM $table ORDER BY id DESC";
    return $query_run = mysqli_query($con, $query);
}

function getTestimonialID($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id='$id'";
    return $query_run = mysqli_query($con, $query);
}
?>