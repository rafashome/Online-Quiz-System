 <?php 
include "../config/connection.php"; 


  $del_id = $_GET['link'];
  $query = "DELETE FROM category WHERE id = '$del_id' ";
  $data = mysqli_query($conn,$query);

  header("location:view_category.php?success=1");



  ?>