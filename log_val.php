<?php
              include("connection.php");
              {
                if(isset($_POST['wel']))
                $phn=$_POST['phone'];
                $ppass=$_POST['pass'];


                $query=mysqli_query($con,"INSERT INTO `login`(`Phone Number`, `Password`) VALUES ('$phn','$ppass')") or die(mysqli_error($con));
                if($query)
                {
                	echo '<script type="text/javascript">' ."\n";
                	echo 'window.location="main.php"';
                	echo '</script>';
                }
              }

?>