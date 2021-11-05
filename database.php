 <?php include "config/connection.php"; ?>
 <?php 
session_start();
class Exam{

// showing category list in select option
public function show_cat(){
   	global $conn;
 
             $query = "SELECT * FROM category";
             $view_cat = mysqli_query($conn,$query);  
             while($row = mysqli_fetch_assoc($view_cat)) {
                $id = $row['id'];
                $cat_name  = $row['cat_name'];
               

              

                echo " <option value='$id'>$cat_name</option>";
             

            }
   }




// showing question list according to category

 public function view_question($category){


   	global $conn;

             $query = "SELECT * FROM question where cat_id = '$category' ";
             $check = mysqli_query($conn,$query);
             $num_rows =mysqli_num_rows($check);

        if($num_rows == 0){
                   echo "<script type='text/javascript'>alert('No Questions');

        window.location = 'index.php';
        </script>"; 
        }else{
            $ques = mysqli_query($conn,$query);  
             while($row = mysqli_fetch_assoc($ques)) {

                $this->category[] = $row;
            }
        }
             

            return $this->category;
   }


// Question Answer Matching Program

public function answer($data){

	   	global $conn;
	   	$ans = implode("", $data);
	   	$right = 0;
	   	$wrong = 0;
	   	$not_attempt = 0;

             $query = "SELECT id,answer from question where cat_id = '".$_SESSION['cat']."' ";
             $ques = mysqli_query($conn,$query);  
 
             while($q = mysqli_fetch_assoc($ques)) {

             	if($q['answer'] == $_POST[$q['id']]){
             		$right++;
             	}else if($_POST[$q['id']]=="not_ans"){
             		$not_attempt++;

             	}else{
             		$wrong++;
             	}
                
            }
             
            $array=array();
            $array['right'] = $right;
            $array['wrong'] = $wrong;
            $array['not_attempt'] = $not_attempt;
            return $array;

  

}



	

}

?>