<?php
    // Connect to the database
    include('../include/db_conn.php');
    
    // Get the book ID from the URL
    $id = $_GET['id'];

    $getdata = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM `issue_request` WHERE `id` = $id "));


    $sId = $getdata['sId'];
    $bId = $getdata['bId'];
    
    
    $returndate = date('Y-m-d', strtotime("+3 days"));
    mysqli_query($connection,"UPDATE `issue_request` SET `status` = '1',`returndate` = '".$returndate."' WHERE `sId` = '".$sId."' AND `bId` = '$bId'");
    $query = mysqli_query($connection,"UPDATE `books` SET `stock` = `stock`-1 WHERE bId = $bId ");
    
    
    // Build the query
    // $query = "UPDATE books SET stock = stock - 1 WHERE bId = $bId";
    // $query = "INSERT INTO `issue_book` SET `bId` = '".$bId."',`sId` = '".$sId."',`returndate` = '".$returndate."'";
    // Execute the query

    // mysqli_query($connection);
    // $connection->query($query);   
    
    // Display a success message
    if($query){

         header('location:request.php');
    }
    else {
        echo "Record not update Successfully";
    }
?>
