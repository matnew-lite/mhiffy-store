<?php 
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
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

    <div class="row my-5">
        <div class="col-5">
           <div class="desc-img">
               <img src="img/2.jpg" class="w-75">
           </div>
        </div>
        <div class="col-7 desc p-4rd">
           <h1 class="desc-name">Infinix Hot 7</h1>
           <p>by Infinix Mobile</p>
           <div class="row">
                <div class="desc-icons">
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning" ></i>
                    <i class="fa fa-star text-warning" ></i>
                    <i class="fa fa-star text-warning" ></i>
                </div>
                <div>
                    <p class="mx-4">Brand New</p>
                </div>
           </div>
           <div>
                <p class="mr-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio iure repellendus alias, 
                    minus culpa iusto earum esse dicta vitae, porro cumque, assumenda harum non repellat 
                    dignissimos numquam officiis illo. Cumque!
                </p>
           </div>
        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/aos.js"></script>
    <script src="owlcarousel/owl.carousel.js"></script>
</body>
</html>