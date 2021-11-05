<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>
<?php include "../config/connection.php"; ?> 
<?php include "functions.php"; ?>

<div class="container" style="margin-top: 10%;">
	 <h3 class="text-left" style="margin:20px;">View Category List</h3>
   <?php 

if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     // treat the succes case ex:
     echo "<div class=' text-center alert alert-danger fade in' role='alert'>
  1 Data Deleted! </div>";
}
   ?>
	 <table class="table" >

  <thead class="table-success">
    <tr>
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


      <?php 

        $show_cat = new Admin;
        $show_cat->show_cat();

      ?>
     
   
  </tbody>
</table>
</div>



<!-- Modal -->

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel" style="text-align: center;">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Are You Sure You Want To Delete?</p>
        <input type="hidden" name="delete_id" id="del_id" value="" >
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href= " " class="btn btn-danger btn-ok">Delete</a>
      </div>
    </div>
  </div>
</div>




<?php include "includes/footer.php"; ?>