<?php

include_once "config/core.php";

$page_title=" Present Dollar Conversion Rate";
 
$require_login=true;
include_once "login_checker.php";
 
include_once 'layout_head.php';
 
echo "<div class='col-md-12'>";
 
    $action = isset($_GET['action']) ? $_GET['action'] : "";
 
    if($action=='login_success'){
        echo "<div class='alert alert-info'>";
            echo "<strong>Hi " . $_SESSION['firstname'] . ", welcome back!</strong>";
        echo "</div>";
    }
 
    else if($action=='already_logged_in'){
        echo "<div class='alert alert-info'>";
            echo "<strong>You are already logged in.</strong>";
        echo "</div>";
    }
 
    echo "<h2>";
        echo "1 USD = 76.57 INR";
    echo "</h2>";
 
echo "</div>";
 
include 'layout_foot.php';
?>