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
    <header>
        <div class="container-fluid">
            <div class="row adminone-row">
                <div class="col-md-6">
                    <div class="admin-logo">
                        <img src="../img/logo-phant.png" alt="">
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="welcome">
                        <h1>welcome guest</h1>
                    </div>
                    </div>
              
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="manage">
                        MANAGE DETAILS
                    </h2>
                </div>
            </div>
            <div class="row options-row">
                <div class="col-md-12 d-flex">
                    <div class="admin-image px-4">
                       <a href="" class="imageokadmin"><img src="../img/logo-phant.png" alt=""></a> 
                       <p>Admin Name</p>
                    </div>
                    <div class="cate-option text-center bg-red">
                      
                    <button><a href="./insert_product.html">Insert Products</a></button>
                    <button><a href="">View Products</a></button>
                    <button><a href="./index.html?insert_categories">Insert Categories</a></button>
                    <button><a href="">View Categories</a></button>
                    <button><a href="./index.html?insert_subcat">Insert Sub Categories</a></button>
                    <button><a href="">View Sub Categories</a></button>
                    <button><a href="./index.html?insert_canabils">Insert Canabils</a></button>
                    <button><a href="">View Canabils</a></button>
                    <button><a href="./index.html?insert_accessories">Insert Accessories</a></button>
                    <button><a href="">View Accessories</a></button>
                    <button><a href="">All Orders</a></button>
                    <button><a href="">All Payments </a></button>
                    <button><a href="">List Users</a></button>
                    <button><a href="">Logout</a></button>
                    </div>
                </div>
            </div>
            <!-- cont -->
            <div class="container-fluid">
                <div class="row my-5">
                    <div class="col-md-12">
                        <?php
                        if(isset($_GET['insert_categories'])){
                            include('insert_categories.html');
                        }
                        if(isset($_GET['insert_subcat'])){
                            include('insert_subcat.html');
                        }
                        if(isset($_GET['insert_canabils'])){
                            include('insert_canabils.html');
                        }
                        if(isset($_GET['insert_accessories'])){
                            include('insert_accessories.html');
                        }
                        ?>
                    </div>
                </div>
            </div>
            
        </div>

    </header>
    <footer class="ft-sec">
        <div class="container-fluid">
            <div class="row ft-row">
                <div class="col-md-3">
                    <div class="ft-logo">
                        <img src="../img/logo-phant.png" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-ft">
                        <p>A lifestyle brand birthed to influence action. Our mission is to be the brand that aligns fashion with faith, providing quality apparel with exclusive designs and original content, to fashion-conscious consumers</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="useful-link">
                        <h1>Useful Links</h1>
                        <ul class="links">
                            <li>FAQ</li>
                            <li>Terms and Privacy</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="useful-link">
                        <h1>Get Help</h1>
                        <ul class="new-ul-ft">
                            <li>About</li>
                            <li>Contact Us</li>
                            <li>Order Status</li>
                            <li>Returns/Exchanges</li>
                            <li>Shipping Info</li>
                        </ul>
                    </div>
                </div>
            </div>
          
        </div>
       
        .
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>