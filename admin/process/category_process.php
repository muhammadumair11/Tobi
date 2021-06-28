<?php
require_once( 'conn.php' );
if (isset($_POST['category']) && $_POST['category'] == 'form') {
  
    $name = $_POST['name'];
    $main_cat = $_POST['cat'];
    
   
       
            $query = "insert into  category set 
            cat_name='$name', main_cat_id='$main_cat',
            image='$photo'";
            $excute = mysqli_query($conn, $query);
            if ($excute) {
                
                    header('location:../category.php?msg=Gallery Inserted Successfully');
                    exit();
            }
            else {

                header('location:../category.php?msg=Error');
                exit();
            }
        


    

   
}
?>