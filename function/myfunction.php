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

//Contact-Us Details
function getContactUs($table) 
{
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}

// countries and State
function getCountries($table)
{
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}
function getState($table)
{
    global $con;
    $query ="SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}
function getStateCountry($table)
{
    global $con;
    $query = "SELECT countries.name as countries_name, $table.name FROM countries LEFT JOIN $table ON countries.id = $table.country_id ORDER BY countries_name";
    // SELECT * FROM countries LEFT JOIN states ON countries.id = states.country_id ORDER BY countries.name;
    return $query_run = mysqli_query($con, $query);
}

?>