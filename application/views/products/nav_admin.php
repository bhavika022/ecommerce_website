<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link  href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Shoppers.com</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Inventories<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url('admin/ord_admin'); ?>">Orders Report</a></li>
          <li><a href="<?php echo base_url('admin/usr_admin'); ?>">Users Report</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url('admin'); ?>">Products</a></li>
      <li><a href="<?php echo base_url('admin/cus_admin'); ?>">Customers</a></li>
    </ul>
  </div>
</nav>
