<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>
 <?php include "../config/connection.php"; 
 include "functions.php";
 include "../database.php"; 
$add = new Admin;
$add->add_question();
$update = new Admin;
$update->edit_question();

 ?>

<div class="container" style="margin: 10%;">

<form method="GET" action="">
  <input type="text" value="<?php echo $_GET['edit'] ?> " name="edit">
  <div class="form-group">
  	<label>Question</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="question" value="<?php echo $_GET['question'] ?> ">
  </div>
    <div class="form-group">
  	<label>Option One</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="option_one" value="<?php echo $_GET['option_1'] ?> ">
  </div>
    <div class="form-group">
  	<label>Option Two</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="option_two" value="<?php echo $_GET['option_2'] ?> ">
  </div>
    <div class="form-group">
  	<label>Option Three </label>
    <input type="text" class="form-control" placeholder="Enter Question" name="option_three" value="<?php echo $_GET['option_3'] ?> ">
  </div>
    <div class="form-group">
  	<label>Option Four</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="option_four" value="<?php echo $_GET['option_4'] ?> ">
  </div>
    <div class="form-group">
  	<label>Answer</label>
    <input type="text" class="form-control" placeholder="Enter Question" name="answer" value="<?php echo $_GET['answer'] ?> ">
  </div>
   
     <div class="form-group">
   <input type="Update" name="update" class="btn btn-success">
  </div>
 
</form>
</div>









<?php include "includes/footer.php"; ?>