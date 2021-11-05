
<?php include "includes/header.php"; ?>

<?php include "database.php"; ?>

<?php include "includes/nav.php"; ?>

<div class="text-center container" style="margin-top:10%;">
	  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Start Exam
  </button>
 

 <div class="collapse  " id="collapseExample" style="margin-top:5%; left:2%;">
<form method="post" action="view_question.php">
	<select class="form-select" aria-label="Default select example"  name="cat" >
  <option selected>Select Exam Subject</option>
               <?php
               $cat = new Exam();
               $view_cat = $cat->show_cat();  

            ?>
</select>
<center style="margin-top:5%;"> <input type="submit" name="submit" class="btn btn-primary"></center>

</form>


</div>
</div>



<?php include "includes/footer.php"; ?>