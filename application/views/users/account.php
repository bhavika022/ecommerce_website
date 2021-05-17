<!DOCTYPE html>
<html lang="en">  
<head>
<title>Account Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link  href="<?php echo base_url('assets/css/edit.css'); ?>" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file 
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' /> --> 
</head>
<body>
    <div class="container">
        <h2 class="heading">Account Details</h2>
        <h2>Welcome <?php echo $user['first_name']; ?>!</h2>
        <div class="regisFrm account-field">
            <p><b>Name: </b><?php echo $user['first_name'].' '.$user['last_name']; ?></p>
            <p><b>Email: </b><?php echo $user['email']; ?></p>
            <p><b>Phone: </b><?php echo $user['phone']; ?></p>
            <p><b>Gender: </b><?php echo $user['gender']; ?></p>
        </div>
        <a class="btn btn-primary account-btn" href="<?php echo base_url('users/edit_user') . '/' . $user['id']?>">Edit</a>
    </div>
</body>