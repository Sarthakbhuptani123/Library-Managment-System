<?php 
include('../include/db_conn.php');
    if(isset($_SESSION['lId'])){
        unset($_SESSION['lId']);
    }

    header('Location: ../librarian');



?>