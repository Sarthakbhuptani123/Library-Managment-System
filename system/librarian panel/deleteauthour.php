<?php
                $con=mysqli_connect("localhost","root","","library");
                $query="delete from author where aId=$_GET[aId]";
                $cmd=mysqli_query($con,$query);
                if($cmd)
                header('location:author.php');
                else
		            echo "Record not delete Successfully";

?> 