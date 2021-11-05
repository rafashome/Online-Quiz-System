<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>
<?php include "database.php"; ?>
<?php 


$ans = new Exam;
$answer = $ans->answer($_POST);
$total_question = $answer['right']+$answer['wrong']+$answer['not_attempt'];
$attempted = $total_question - $answer['not_attempt'];
$percentage = ($answer['right'] * 100 / $total_question);
?>

<h2 style="text-align: center; margin-top: 5%; font-weight: 700;  font-style: italic; color: green">Congratulations! Here Is Your Quiz Marks</h2>
<div style="margin-top: 10%;">
<center>
<h3  class="btn  btn-info" style="font-size: 18px; font-weight: 700;
font-family: sans-serif;">Total Question <br> <small> <?php echo $total_question; ?> </small> </h3> 
<h3  class="btn  btn-primary" style="font-size: 18px; font-weight: 700;
font-family: sans-serif;">Total Answered  <br> <small> <?php echo $attempted; ?> </small> </h3> 
<h3  class="btn  btn-success" style="font-size: 18px; font-weight: 700;
font-family: sans-serif;">Right Answer <br> <small> <?php echo $answer['right']; ?> </small> </h3>
<h3  class="btn  btn-danger" style="font-size: 18px; font-weight: 700;
font-family: sans-serif;">Wrong Answer <br> <small><?php echo $answer['wrong']; ?></small> </h3>
<h3  class="btn  btn-warning" style="font-size: 18px; font-weight: 700;
font-family: sans-serif;">Not Answered <br> <small><?php echo  $answer['not_attempt']; ?></small> </h3>
<h3  class="btn  btn-dark" style="font-size: 18px; font-weight: 700;
font-family: sans-serif;"> Percentage <br> <small><?php echo round($percentage); ?>%</small> </h3>

</center>
</div>












<?php include "includes/footer.php"; ?>