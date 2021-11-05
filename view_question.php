<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>
<?php include "database.php"; ?>
<?php 

$view_ques = new Exam;
$cat_id =  $_POST['cat'];
$view_ques->view_question($cat_id);
$_SESSION['cat'] = $cat_id;



?>

<div class="container col-sm-6" style="margin-top: 5%;">
	<h2 class="text-center" style="margin-bottom: 5%;">Online Quiz Test </h2>

  <script type="text/javascript">
    var timeLeft = 2*60;
  </script>

   
   <p style="color:red; font-weight: 700;" id="time"></p>

 
<form method="post" action="answer.php" id="form1">

  <?php 
  $i = 1;
  foreach ($view_ques->category as $q) { ?>
  
  
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="table-danger"> <?php echo $i; ?> ) <?php echo $q['question'] ?>  </th>

    </tr>
  </thead>
  <tbody>
    <?php if(isset($q['option_1'])){ ?>
    <tr class="table-info">
      <td> &nbsp;1&emsp; <input type="radio" value="1" name="<?php echo $q['id'] ?>"> &nbsp; <?php echo $q['option_1']?>  </td>
    </tr>
    <?php } ?>
     <?php if(isset($q['option_2'])){ ?>
   <tr class="table-info">
      <td>&nbsp;2&emsp;<input type="radio" value="2" name="<?php echo $q['id'] ?>"> &nbsp; <?php echo $q['option_2']?> </td>
    </tr>
     <?php } ?>
     <?php if(isset($q['option_3'])){ ?>
    <tr class="table-info">
      <td>&nbsp;3&emsp;<input type="radio" value="3" name="<?php echo $q['id'] ?>"> &nbsp;<?php echo $q['option_3']?>  </td>
    </tr>
    <?php } ?>
    <?php if(isset($q['option_4'])){ ?>
     <tr class="table-info">
      <td>&nbsp;4&emsp;<input type="radio" value="4" name="<?php echo $q['id'] ?>">  &nbsp;<?php echo $q['option_4']?> </td>
    </tr>
    <?php } ?>

      <tr class="table-info">
      <td><input type="radio" style="display: none;" checked="checked" value="not_ans" name="<?php echo $q['id'] ?>">  </td>
    </tr>

  </tbody>
</table>
<?php $i++; } ?>

<center style="margin-top:5%;"> <input type="submit" name="" value="Submit Quiz" class="btn btn-success">  </center>
</form>
</div>





<?php include "includes/footer.php"; ?>