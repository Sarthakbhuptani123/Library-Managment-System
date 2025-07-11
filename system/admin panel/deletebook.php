<?php
                $con=mysqli_connect("localhost","root","","library");
                $query="delete from books where bId=$_GET[bId]";
                $cmd=mysqli_query($con,$query);
                if($cmd)
                header('location:book.php');
                else
		            echo "Record not delete Successfully";

?> 