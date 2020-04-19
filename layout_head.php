<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo isset($page_title) ? strip_tags($page_title) : "Login Page"; ?></title>
 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen" />
 
    <link href="<?php echo $home_url . "libs/css/customer.css" ?>" rel="stylesheet" />
 
</head>
<body>
 
    <?php include_once 'navigation.php'; ?>
 
    <div class="container">
 
        <?php
        if($page_title!="Login"){
        ?>
        <div class='col-md-12'>
            <div class="page-header">
                <h1><?php echo isset($page_title) ? $page_title : "The Code of a Login Page"; ?></h1>
            </div>
        </div>
        <?php
        }
    ?>