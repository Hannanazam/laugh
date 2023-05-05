<?php
include('../include/connection.html');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_categories=$_POST['product_categories'];
    $product_subcat=$_POST['product_subcat'];
    $product_price=$_POST['product_price'];
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    // $product_title=$_POST['product_title'];
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    // condition check
    if($product_title=='' or  $description=='' or $product_keywords=='' or $product_categories=='' or $product_subcat=='' or $product_price=='' or $product_image1=='' or $product_image2=='' ){
         echo "<script>alert('please fill all fields')</script>";
         exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");

        $insert_productok="insert into `productss` (product_title,product_description,product_keywords,category_id,subcat_id,product_image1,product_image2,product_price) values ('$product_title','$description','$product_keywords','$product_categories','$product_subcat','$product_price','$product_image1','$product_image2')";
        $result_query=mysqli_query($con,$insert_productok);
        if($result_query){
            echo "<script>alert('successfully Inserted The Products')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="../assets/style.css"> -->
<link rel="stylesheet" href="../assets/about.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="head-insert">
                    <h1>Insert Products</h1>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- title -->
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="product_title" class="form-label">Product Title</label>
                        <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
                    </div>
                    <!-- description -->
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="description" class="form-label">Product Description</label>
                        <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
                    </div>
                    <!-- keywords -->
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="product_keywords" class="form-label">Product keywords</label>
                        <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product keywords" autocomplete="off" required="required">
                    </div>
                    <!-- categories -->
                    <div class="form-outline mb-4 w-50 m-auto">
                       <select name="product_categories" id="" class="form-select">
                        <option value="">Select A Category</option>
                        <?php
                        $select_query="select * from `categories`";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title=$row['category_title'];
                            $category_id=$row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                        ?> 
                        <!-- <option value="">Men's</option>
                        <option value="">Women's</option>
                        <option value="">Canabils</option>
                        <option value="">Accessories</option> -->

                       </select>
                    </div>
                    <!-- subcat -->
                    <div class="form-outline mb-4 w-50 m-auto">
                       <select name="product_subcat" id="" class="form-select">
                        <option value="">Select A Subcategory</option>
                        <?php
                        $select_query="select * from `subcategories`";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $subcat_title=$row['subcat_title'];
                            $subcat_id=$row['subcat_id'];
                            echo "<option value='$subcat_id'>$subcat_title</option>";
                        }
                        ?> 

                       </select>
                    </div>
                    <!-- images1 -->
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="product_image1" class="form-label">Product Image 1</label>
                        <input type="file" name="product_image1" id="product_image1" class="form-control"  required="required">
                    </div> 
                     <!--image2  -->
                     <div class="form-outline mb-4 w-50 m-auto">
                        <label for="product_image2" class="form-label">Product Image 2</label>
                        <input type="file" name="product_image2" id="product_image2" class="form-control"  required="required">
                    </div> 
                    <!-- price -->
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
                    </div>
                    <!-- submit -->
                    <div class="form-outline mb-4 w-50 m-auto">
                        
                       <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert Products">
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>