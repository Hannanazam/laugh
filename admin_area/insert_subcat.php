<?php
include('../include/connection.html');
if(isset($_POST['subcat'])){
    $subcat_title=$_POST['subcat_title'];
    $select_query="select * from `subcategories` where subcat_title='$subcat_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('This Sub Category is already Present Inside The Data Base')</script>";
    }else{
    $insert_query="insert into `subcategories`(subcat_title) value('$subcat_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Sub Category has been added successfully')</script>";
    }
}}
?>
<form action="" method="post" class="mb-2">
<div class="input-group mb-3 w-90 mb-2">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fas fa-receipt"></i></span>
  <input type="text" class="form-control" placeholder="Insert Sub Categories" name="subcat_title" aria-label="subcat" aria-describedby="basic-addon1">
</div>


<div class="input-group mb-3 w-90 mb-2">
  
  <input type="submit" class="form-control" value="Insert Categories" name="subcat" aria-label="Username" aria-describedby="basic-addon1">
  <!-- <button class="bg-red p-2 my-3 border-0">Insert Sub Categories</button> -->
</div>
</form>