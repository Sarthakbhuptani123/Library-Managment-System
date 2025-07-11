<?php
    // Connect to the database
    include('../include/db_conn.php');
    
    // Get the book ID from the URL
    $bId = $_GET['bId'];
    $sId = $_GET['sId'];
    

   
     $check = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `issue_request` WHERE `bId` = '".$bId."' AND `sId` = '".$sId."' "));
    
    
    if($check  <= 0 ){
    // Build the query
            // $query = "UPDATE books SET stock = stock - 1 WHERE bId = $bId";
            $query = "INSERT INTO `issue_request` SET `bId` = '".$bId."',`sId` = '".$sId."' ";
            // echo "INSERT INTO `issue_request` SET `bId` = '".$bId."',`sId` = '".$sId."' ";
            // exit;
            // Execute the query

            mysqli_query($connection,$query);
            if($query){

                header('location:book.php');
        }
        else {
            echo "Record not update Successfully";
        }
    }else{
        $message ="already requested";
        header('location:book.php?message='.$message);
    }
    // $connection->query($query);  
    
    // Display a success message
    
?>
