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
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url('assets/img/img1.jpg'); ?>" alt="img 1" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url('assets/img/img2.jpg'); ?>" alt="img 2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url('assets/img/img3.jpg'); ?>" alt="img 3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <div class="container">
        <h3>PRODUCTS</h3>
        
    <!-- Cart basket -->
        <div class="cart-view">
            <a href="<?php echo base_url('cart'); ?>" title="View Cart">
            <i class="glyphicon glyphicon-shopping-cart"></i> 
            <span>(<?php echo ($this->cart->total_items() > 0)?$this->cart->total_items().' Items':'Empty'; ?>) </span> 
            </a>
        </div>

    <!-- List all products -->
        <div class="row col-lg-12">
            <?php if(!empty($products)){ foreach($products as $row){ ?>
                <div class="card col-lg-3">
                    <img class="card-img-top" src="<?php echo base_url('uploads/product_images/'.$row['image']); ?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Price: <?php echo ''.$row["price"].' Rs'; ?></h6>
                        <p class="card-text"><?php echo $row["description"]; ?></p>
                        <a href="<?php echo base_url('products/addToCart/'.$row['id']); ?>" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            <?php } }else{ ?>
                <p>Product(s) not found...</p>
            <?php } ?>
        </div>
    </div>    
    
    
</body>
</html>

