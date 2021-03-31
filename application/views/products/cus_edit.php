<form method="post" action="<?php echo base_url('admin/cus_update/'.$customer->id);?>">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" value="<?php echo $customer->name; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-9">
                    <textarea name="email" class="form-control"><?php echo $customer->email; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Phone</label>
                <div class="col-md-9">
                    <textarea name="phone" class="form-control"><?php echo $customer->phone; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Address</label>
                <div class="col-md-9">
                    <textarea name="address" class="form-control"><?php echo $customer->address; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-success">
        </div>
    </div>
    
</div>    
</form>