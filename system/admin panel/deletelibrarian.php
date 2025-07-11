<?php
                $con=mysqli_connect("localhost","root","","library");
                $query="delete from librarian where lId=$_GET[lId]";
                $cmd=mysqli_query($con,$query);
                if($cmd)
                header('location:librarianrecor.php');
                else
		            echo "Record not delete Successfully";

?>