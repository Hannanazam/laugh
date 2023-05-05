<?php
include('../include/connection.html');
if(isset($_POST['insert_canabils'])){
    $canabils_title=$_POST['can_title'];
    $select_query="select * from `canabils` where canabils_title='$canabils_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('This Category is already Present Inside The Data Base')</script>";
    }else{
    $insert_query="insert into `canabils`(canabils_title) value('$canabils_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Category has been added successfully')</script>";
    }
}}
?>
<h2 class="insertcat">Insert Canabils</h2>
<form action="" method="post" class="mb-2">
<div class="input-group mb-3 w-90 mb-2">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fas fa-receipt"></i></span>
  <input type="text" class="form-control" placeholder="Insert Canabils" name="can_title" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3 w-90 mb-2">
  
  <input type="submit" class="form-control" value="Insert Categories" name="insert_canabils" aria-label="Username" aria-describedby="basic-addon1">
  <!-- <button class="bg-red p-2 my-3 border-0">Insert Categories</button> -->
</div>
</form>