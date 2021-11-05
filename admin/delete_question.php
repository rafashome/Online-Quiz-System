 <?php 
include "../config/connection.php"; 


  $del_id = $_GET['link'];
  $query = "DELETE FROM question WHERE id = '$del_id' ";
  $data = mysqli_query($conn,$query);

  header("location:view_question.php?success=1");



  ?>