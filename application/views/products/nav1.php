<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link  href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Shoppers.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
  </head>
<body>
    

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url('products/index'); ?>">Shoppers.com</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('products/index'); ?>">Home</a></li>
        <li><a href="<?php echo base_url('products/about'); ?>">About Us</a></li>
        <li><a href="<?php echo base_url('products/contact'); ?>">Contact Us</a></li>
        <li><a href="<?php echo base_url('users/account'); ?>">Account</a></li>
        <li><a href="<?php echo base_url('users/logout'); ?>">Logout</a></li>
        </ul>
    </div>
    </nav>
</body>