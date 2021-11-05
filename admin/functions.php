<?php
include "../config/connection.php";  

class Admin{


function add_category(){
    global $conn;

$error_array = array();

if(isset($_POST['submit'])){

    $cat_name = $_POST['cat_name'];
         //checking is the mail already in used or not
        $cat_check = mysqli_query($conn,"select * from category where cat_name='$cat_name' ");


    //count number of rows

        $num_rows =mysqli_num_rows($cat_check);

        if($num_rows > 0){
                   echo "<script type='text/javascript'>alert('Category Already Exist!!');

        window.location = 'add_category.php';
        </script>"; 
        }else{

        if(empty($error_array)){

$query = mysqli_query($conn, "INSERT INTO category(id,cat_name) VALUES ('','$cat_name') ");



// check if category already exist

    if( $query ) {
        echo "<script type='text/javascript'>alert('submitted successfully!');

        window.location = 'view_category.php';
        </script>"; 

        }
      else {
        echo "<script type='text/javascript'>alert('failed!')</script>";}
    
   }  
        }
    

 }

  }







// showing category list in select option
public function show_cat(){
    global $conn;
 
             $query = "SELECT * FROM category";
             $view_cat = mysqli_query($conn,$query);  
             while($row = mysqli_fetch_assoc($view_cat)) {
                $id = $row['id'];
                $cat_name  = $row['cat_name'];

                echo "<tr>";
                echo " <td>$cat_name</td>";
                echo " <td><a data-href='delete.php?link=$id' data-toggle='modal' data-target='#delete' > <button  type='button' class='btn btn-danger ''>Delete</button> </a></td> ";
                echo "</tr>";

             

            }
   }







// Add question into database

  function add_question(){
    global $conn;

$error_array = array();

if(isset($_POST['submit'])){

    $question = $_POST['question'];
    $option_one = $_POST['option_one'];
    $option_two = $_POST['option_two'];
    $option_three = $_POST['option_three'];
    $option_four = $_POST['option_four'];
    $answer = $_POST['answer'];
    $cat_id = $_POST['cat'];

    
    
    if(empty($error_array)){



     $query = mysqli_query($conn, "INSERT INTO question(question,option_1,option_2,option_3,option_4,answer,cat_id) VALUES
        ('$question','$option_one','$option_two','$option_three', '$option_four','$answer','$cat_id') ");



    if( $query ) {
               echo "<script type='text/javascript'>alert('submitted successfully!');

        window.location = 'view_question.php';
        </script>"; 

        }
      else {
        echo "<script type='text/javascript'>alert('failed!')</script>";}
    
   }  
 }

  }






// View Question List


public function question_list(){
    global $conn;
 
             $query = "SELECT * FROM question";
             $view_ques = mysqli_query($conn,$query);  
             while($row = mysqli_fetch_assoc($view_ques)) {
                $id = $row['id'];
                $q  = $row['question'];
                $op_1 = $row['option_1'];
                $op_2 = $row['option_2'];
                $op_3 = $row['option_3'];
                $op_4 = $row['option_4'];
                $ans = $row['answer'];
                $cat_id = $row['cat_id'];

                echo "<tr>";
                echo " <td>$q</td>";
                echo " <td>$op_1</td>";
                echo " <td>$op_2</td>";
                echo " <td>$op_3</td>";
                echo " <td>$op_4</td>";
                echo " <td>$ans</td>";
                echo " <td>$cat_id</td>";
                echo " <td><a data-href='delete_question.php?link=$id' data-toggle='modal' data-target='#delete' > <button  type='button' class='btn btn-danger ''>Delete</button> </a></td> ";

                 echo "<td><a href='update_question.php?edit=$id & question=$q & option_1=$op_1 & option_2=$op_2 & option_3=$op_3 & option_4=$op_4 & answer=$ans & cat_id=$cat_id'> <button type='button' class='btn btn-info'>Edit</button></a> </td>";
                echo "</tr>";

             

            }
   }




public function edit_question(){
  global $conn;
if(isset($_GET['update'])){
$id = $_GET['edit']; 

                $q=$_GET['question'];
                $op_1 = $_GET['option_one'];
                $op_2 = $_GET['option_two'];
                $op_3 = $_GET['option_three'];
                $op_4 = $_GET['option_four'];
                $ans = $_GET['answer'];
                

     $query =  "UPDATE question SET question =  '$q' , option_1 = '$op_1' ,option_2 = '$op_2', option_3 = '$op_3',option_4 = '$op_4',answer='$ans'  WHERE id='$id' ";

        $update_query  = mysqli_query($conn,$query);

        if($update_query ){
           
            echo "<script type='text/javascript'>alert('Updated successfully!');

        window.location = 'view_question.php';
        </script>"; 
        }

        }

}




} // End of Admin Class








?>