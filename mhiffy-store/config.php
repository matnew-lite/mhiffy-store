<?php 

    $db = mysqli_connect("localhost", "root", "", "store");

    $product = mysqli_query($db, "SELECT * FROM product");

    // while($row = mysqli_fetch_array($product)){
    //     // echo "<img src=".$row['item_image'].">";
    //     return $row;
    // }

?>