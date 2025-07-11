<?php 
include('../include/db_conn.php');
    if(isset($_SESSION['sId'])){
        unset($_SESSION['sId']);
    }

    header('Location: ../login');



?>