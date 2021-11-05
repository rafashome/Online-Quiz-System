<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>
 <?php include "../config/connection.php"; 
 include "functions.php";
 ob_start();

$error_array =  array(); 
$add = new Admin;
$add->add_category();

 ?>

<div class="container" style="margin-top: 10%;">
	<form method="POST" enctype = "multipart/form-data" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Category Name" name="cat_name">
    </div>
    <div class="col">
      <input type="submit" class="btn btn-dark" placeholder="submit" name="submit">
    </div>
  </div>
</form>
</div>









<?php include "includes/footer.php"; ?>