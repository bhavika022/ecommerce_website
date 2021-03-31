<div class="container">
    <div class="row">
        <div class="col-lg-12">           
            <h2>Orders 
                <div class="pull-right">
                <!--<a class="btn btn-primary" href="<?php echo base_url('admin/create') ?>"> Create New Customer</a>--> 
                <a class="btn btn-info" href="<?php echo base_url('admin/generate_ord_pdf') ?>">generate pdf</a>
                </div>
            </h2>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Order_id</th>
            <th>Product_id</th>
            <th>Quantity</th>
            <th>Sub Total</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $d) { ?>      
        <tr>
            <td><?php echo $d->order_id; ?></td>
            <td><?php echo $d->product_id; ?></td> 
            <td><?php echo $d->quantity; ?></td>
            <td><?php echo $d->sub_total; ?></td>       
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