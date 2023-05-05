<?php
include('./include/connection.html');

function getproducts(){
    global $con;
    $select_query="Select * from `productss` order by rand()";
    $result_query=mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_image2=$row['product_image2'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $subcat_id=$row['subcat_id'];
        echo "<div class='col-md-4'>
        <div class='preview'>
            <div class='mg-main'>
                <img src='./admin_area/product_images/$product_image2' alt='..'>
            </div>
            <h1 class='backtitle'>$product_title</h2>
       <p>$product_description</p>
       <div class='pricee'>
       <h6>$product_image1</h6>
       
        <p><button><i class='fa fa-shopping-cart'></i></button></p>
       </div>
      
    </div>
</div>";
    

    }
}
?>

