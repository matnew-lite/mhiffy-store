<?php 
    include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Best Store - Mhiffy Store</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/all.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="css/aos.css">
</head>
<body>
    
        <?php 
         include "header.php";
        ?>

        <!--Banner Carousel-->
        <section class="row mx-2 banner">
            <div class="col-md-2 py-4 ban-side my-4 mx-4">
                <li id="interior"><a href="#">Home Interiors</a></li>
                <li id="souvenir"><a href="#">Souvenirs</a></li>
                <li><a href="#">Kitchen Accessories</a></li>
                <li><a href="#">Bridals</a></li>
                <li><a href="#">Stationaries</a></li>
                <li><a href="#">Wears</a></li>
            </div>
            
            <?php 
                include "carousel.php"; 
            ?>

            <div class="product-hover p-5">
                <div class="home-hover">
                    <h3>Home Interiors</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <li>Throw Pillows</li>
                        </div>
                        <div class="col-md-3">
                            <li>Throw Pillows</li>
                        </div>
                        <div class="col-md-3">
                            <li>Throw Pillows</li>
                        </div>
                    </div>
                </div>
                <div class="souvenir-hover">
                    <h3>Souvenirs</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <li>Throw Pillows</li>
                        </div>
                        <div class="col-md-3">
                            <li>Throw Pillows</li>
                        </div>
                        <div class="col-md-3">
                            <li>Throw Pillows</li>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---Ad Banner-->
        <section>
            <div class="">
                <img src="img/ad-banner.jpg" class="img-fluid" style="width: 100%;">
            </div>
        </section>
        
       <?php if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        
        $tar = mysqli_query($db, "SELECT * FROM product WHERE item_id=$id");
        $target = mysqli_fetch_array($tar);
        $target_img= $target["item_image"];
        $target_name= $target["item_name"];
        $target_price= $target["item_price"]; ?>
        <div class="modal" id="verify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content product-info">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Product Description</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body row col-md-12 ">
                        <div class="col-md-5 mx-auto">
                            <img class="modal-img" src="<?php echo $target_img?>">
                        </div>
                        <div class="col-md-7">
                            <h5><?php echo $target_name?></h5>
                            <div>
                                <td>Price:</td>
                                <td class="">#<?php echo $target_price?></td>
                            </div>
                            <td>Quantity:</td>
                            <td><input class="px-2" value="1"></td>
                            <h6 class="pt-2">Description</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Optio iure repellendus alias, minus culpa iusto earum esse dicta vitae, porro cumque, 
                                assumenda harum non repellat dignissimos numquam officiis illo. Cumque!</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success"><a class="text-light" href=>Add to cart</a></button>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
                <!---modal----->
                    <div class="modal" id="verify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content product-info">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">Product Description</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body row col-md-12 ">
                                        <div class="col-md-5 mx-auto">
                                            <img class="modal-img" src="<?php echo $row['item_image']?>">
                                        
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $target_name?></h5>
                                        <div>
                                            <td>Price:</td>
                                            <td class="big"></td>
                                            </div>
                                            <td>Quantity:</td>
                                            <td><input class="px-2" value="1"></td>
                                            <h6 class="pt-2">Description</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio iure repellendus alias, 
                                                minus culpa iusto earum esse dicta vitae, porro cumque, assumenda harum non repellat 
                                                dignissimos numquam officiis illo. Cumque!
                                            </p>
                                        
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success"><a class="text-light" href=>Add to cart</a></button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!----/modal---->
    

        <!---Deals of the Day-->
        <section class="products-1">
            <div class="container-fluid day-deal mt-4 py-4 px-5">
                <div class="product-head p-4">
                    <h3>Deals of the Day</h3>
                    <p>See More >>></p>
                </div>
                <?php 
                    include "product.php";
                ?>

                <?php 
                    include "new-product.php";
                ?>
            </div>
        </section>
        <section class="ad-ban">
            <div class="row p-5">
                <div class="col-md-6">
                    <img class="img-fluid" src="img/ad1.jpeg">
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="img/ad2.jpeg">
                </div>
            </div>
        </section>
        <section class="products-1">
            <div class="container-fluid day-deal mt-4 py-4 px-5">
                    <div class="product-head p-4">
                        <h3>Deals of the Day</h3>
                        <p>See More >>></p>
                    </div>
                <?php 
                    include "product.php";
                ?>

                <?php 
                    include "new-product.php";
                ?>
            </div>
        </section>


    <!---- Go up Icon --->
        <div class="top">
          <a href="#home"><i class="fa fa-arrow-up"></i></a>
        </div>
    <!---- Go up Icon --->


    <!---- Footer Section --->
        <?php 
            include "footer.php";
        ?>
    <!---- Footer Section --->


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/aos.js"></script>
    <script src="owlcarousel/owl.carousel.js"></script>
        <script>
                $("#banner").owlCarousel({
                    loop: true,
                    nav:false,
                    dots: false,
                    items: 1,
                    autoplay: true
                //     responsive:{
				// 0:{
				// 	items: 1
				// },
				// 600:{
				// 	items: 1
				// },
				// 1000:{
				// 	items: 1
				// }
                });
        </script>
        <script>
            $(".owl-carousel").owlCarousel({
                    loop: false,
                    nav: true,
                    dots: false,
                    autoplay: false,
                    responsive:{
				0:{
					items: 2
				},
				600:{
					items: 3
				},
				1000:{
					items: 6
				}
			}
                });
        </script>
        <script>
            $(".product-slider1").hover(function(){
                $(".owl-nav").show();
                $(".owl-nav").css("display", "flex");

            });
            $(".product-slider1").mouseleave(function(){
                $(".owl-nav").hide();
            })

        </script>
        <script>
            $(window).scroll(function(){
                    if($(window).scrollTop() > 60){
                        $(".top").show();
                    }
                    else{
                        $(".top").hide();
                    }
            });
            $("#interior").hover(function(){
                $(".product-hover").show()
                $(".home-hover").show()
            })
            $("#interior").mouseleave(function(){
                $(".product-hover").hide()
                $(".home-hover").hide()
            })
            $("#souvenir").hover(function(){
                $(".product-hover").show()
                $(".souvenir-hover").show()

            })
            function mouseLeave(){
                $("#souvenir").mouseleave(function(){
                $(".product-hover").hide()
                $(".souvenir-hover").hide()
            })
            };
           mouseLeave();
            
        </script>
        
</body>
</html>