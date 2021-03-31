<!DOCTYPE html>
<html lang="en">  
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link  href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file 
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' /> --> 
</head>
<div class="container">
    <h1 class="heading">LOGIN</h1>
    <h2 class="login-head">Login to Your Account</h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Login form -->
    <div class="regisFrm container">
        <form action="" method="post" class="form-inline">
            <div class="form-group mb-2">
                <div class="form-group form-field">Username:
                    <input type="email" name="email" placeholder="EMAIL" required class="form-control">
                    <?php echo form_error('email','<p class="help-block">','</p>'); ?>
                </div>
                <br>
                <div class="form-group form-field"> Password: 
                    <input type="password" name="password" placeholder="PASSWORD" required class="form-control">
                    <?php echo form_error('password','<p class="help-block">','</p>'); ?>
                </div>
            </div>
            <div class="send-button">
                <input type="submit" class="btn btn-success" name="loginSubmit" value="LOGIN">
            </div>
        </form>
        <p>Don't have an account? <a href="<?php echo base_url('users/registration'); ?>">Register</a></p>
    </div>
</div>