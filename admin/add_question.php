<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>
 <?php include "../config/connection.php"; 
 include "functions.php";
 include "../database.php"; 
$add = new Admin;
$add->add_question();

 ?>

<div class="container" style="margin: 10%;">

<form method="POST" action="">
  <div class="form-group">
  	<label>Question</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="question">
  </div>
    <div class="form-group">
  	<label>Option One</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="option_one">
  </div>
    <div class="form-group">
  	<label>Option Two</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="option_two">
  </div>
    <div class="form-group">
  	<label>Option Three </label>
    <input type="text" class="form-control" placeholder="Enter Question" name="option_three">
  </div>
    <div class="form-group">
  	<label>Option Four</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="option_four">
  </div>
    <div class="form-group">
  	<label>Answer</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="answer">
  </div>
   
	<select class="form-select" aria-label="Default select example"  name="cat" style="padding:10px;">
  <option selected>Select Exam Subject</option>
               <?php
               $cat = new Exam();
               $view_cat = $cat->show_cat();  

            ?>
</select>
     <div class="form-group">
   <input type="submit" name="submit" class="btn btn-success">
  </div>
 
</form>
</div>









<?php include "includes/footer.php"; ?>