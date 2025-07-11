<?php
                $con=mysqli_connect("localhost","root","","library");
                $query="delete from student where sId=$_GET[sId]";
                $cmd=mysqli_query($con,$query);
                if($cmd)
                header('location:studentrecord.php');
                else
		            echo "Record not delete Successfully";

?> 