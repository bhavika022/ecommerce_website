<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Include jQuery library -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

    <script>
    // Update item quantity
    function updateCartItem(obj, rowid){
        $.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
            if(resp == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>

</head>

<body>
    <div class="container">    
        <h1>ORDER STATUS</h1>
        <?php if(!empty($order)){ ?>
            <div class="col-md-12">
                <div class="alert alert-success">Your order has been placed successfully.</div>
            </div>
            
            <!-- Order status & shipping info -->
            <div class="row col-lg-12 ord-addr-info">
                <div class="hdr">Order Info</div>
                <p><b>Reference ID:</b> #<?php echo $order['id']; ?></p>
                <p><b>Total:</b> <?php echo 'Rs '.$order['grand_total'].''; ?></p>
                <p><b>Placed On:</b> <?php echo $order['created']; ?></p>
                <p><b>Buyer Name:</b> <?php echo $order['name']; ?></p>
                <p><b>Email:</b> <?php echo $order['email']; ?></p>
                <p><b>Phone:</b> <?php echo $order['phone']; ?></p>
            </div>
            
            <!-- Order items -->
            <div class="row col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>QTY</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(!empty($order['items'])){  
                            foreach($order['items'] as $item){ 
                        ?>
                        <tr>
                            <td>
                                <?php $imageURL = !empty($item["image"])?base_url('uploads/product_images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                                <img src="<?php echo $imageURL; ?>" width="75"/>
                            </td>
                            <td><?php echo $item["name"]; ?></td>
                            <td><?php echo 'Rs '.$item["price"].''; ?></td>
                            <td><?php echo $item["quantity"]; ?></td>
                            <td><?php echo 'Rs '.$item["sub_total"].''; ?></td>
                        </tr>
                        <?php } 
                        } ?>
                    </tbody>
                </table>
            </div>
        <?php } else{ ?>
        <div class="col-md-12">
            <div class="alert alert-danger">Your order submission failed.</div>
        </div>
        <?php } ?>
    </div>

</body>
</html>