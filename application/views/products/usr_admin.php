<div class="container">
    <div class="row">
        <div class="col-lg-12">           
            <h2>Users 
                <div class="pull-right">
                <!--<a class="btn btn-primary" href="<?php echo base_url('admin/create') ?>"> Create New Customer</a>--> 
                <a class="btn btn-info" href="<?php echo base_url('admin/generate_usr_pdf') ?>">generate pdf</a>
                </div>
            </h2>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Frist Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $d) { ?>      
        <tr>
            <td><?php echo $d->first_name; ?></td>
            <td><?php echo $d->last_name; ?></td> 
            <td><?php echo $d->email; ?></td>
            <td><?php echo $d->gender; ?></td> 
            <td><?php echo $d->phone; ?></td> 
            <td><?php echo $d->created; ?></td>       
        <!--<td>
            <form method="DELETE" action="<?php echo base_url('admin/delete/'.$d->id);?>">
            <a class="btn btn-warning btn-xs" href="<?php echo base_url('admin/edit/'.$d->id) ?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button>
            </form>
        </td>  -->    
        </tr>
        <?php } ?>
    </tbody>
    </table>
    </div>
</div>