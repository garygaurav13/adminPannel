<?php
include('../function/myfunction.php');

if(isset($_SESSION['auth']))
{
    if($_SESSION['role'] != "admin")
    {
        redirect("../index.php","You are Not authorized to access this page");
    }
}
else 
{
    redirect("../login.php","Login To Continue");
}
?>