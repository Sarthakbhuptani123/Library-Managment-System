<?php
    // Connect to the database
    include('../include/db_conn.php');
    
    // Get the book ID from the URL
    $bId = $_GET['bId'];
    echo $bId;

    $query="SELECT * from books";

    $cmd=mysqli_query($connection,$query);
?>  
