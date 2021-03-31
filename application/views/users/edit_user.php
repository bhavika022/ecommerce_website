<html>
<head>
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link  href="<?php echo base_url('assets/css/edit.css'); ?>" rel="stylesheet">
</head>
<h2 class="container">Update Profile Details: </h2>

<form method="post" action="<?php echo base_url('Users/userupdate/'.$product->id);?>">
    <div class="row edit-form">
        <div class="col-md-8 col-md-offset-2 edit-field">
            <div class="form-group">
                <label class="col-md-3">First Name</label>
                <div class="col-md-6">
                    <input type="text" name="first_name" class="form-control" value="<?php echo $product->first_name; ?>"required=''>
                    <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 edit-field">
            <div class="form-group">
                <label class="col-md-3">Last Name</label>
                <div class="col-md-6">
                    <input type="text" name="last_name" class="form-control" value="<?php echo $product->last_name; ?>"required=''>
                    <?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 edit-field">
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-6">
                    <input type="text" name="email" class="form-control"value="<?php echo $product->email; ?>"required=''>
                    <?php echo form_error('email','<p class="help-block">','</p>'); ?>
                </div>
            </div>
        </div> 
        <div class="col-md-8 col-md-offset-2 edit-field">
            <div class="form-group">
                <label class="col-md-3">Phone</label>
                <div class="col-md-6">
                    <input type="text" name="phone"class="form-control" value="<?php echo $product->phone; ?>"required=''>
                    <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
                </div>
            </div>    
        </div>
        <div class="col-md-8 col-md-offset-2 edit-field">
            <div class="form-group">
                <label class="col-md-3">Status</label>
                <div class="col-md-6">
                    <input type="number" min="0" max="1" name="status" class="form-control" value="<?php echo $product->status; ?>"required=''>
                    <?php echo form_error('status','<p class="help-block">','</p>'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right edit-field">
            <input type="submit" name="Save" class="btn btn-success">
        </div>
    </div>
    
</form>


