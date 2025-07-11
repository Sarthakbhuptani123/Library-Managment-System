<?php
                include('../include/db_conn.php');
    
                $issuId=$row['id'];
                $getdata = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM `issue_request` WHERE `id` = ".$_GET['id'].""));
                $query="delete from  issue_request where id=$_GET[id]";
                
                $bId = $getdata['bId'];

                mysqli_query($connection,"UPDATE `books` SET `stock` = `stock`+1 WHERE bId = $bId ");

               

                $cmd=mysqli_query($connection,$query);
                if($cmd)
                header('location:issued.php');
                else
                    echo $issueId;
		            // echo "Record not delete Successfully";
 
?> 