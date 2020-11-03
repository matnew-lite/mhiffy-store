<?php 
    include ("config.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            
                <div class="owl-carousel owl-theme py-4 product-slider1" style="overflow: hidden;">
                    <?php while($row = mysqli_fetch_array($product)){?>
                    <div class="card product-card">
                        <div class="product-label p-1">
                           <i class="fa fa-star"></i> 20% off
                        </div>
                        <input type="hidden" name="id" class="tag" value="<?php echo $row['item_id'];?>">
                        <a type="button"><img class="card-img-top" class="clicker" src="<?php echo $row['item_image']?>" ></a>
                        <div class="card-body text-center">
                            <p><?php echo $row['item_name']?></p>
                            <h4>#<?php echo $row['item_price']?></h4>
                            <button class="btn cart-btn px-4 my-4" data-toggle="modal" data-target="#verify">Add to cart</button>
                        </div>
                    </div>
                    <?php }; ?> 
                </div>
</body>
</html>