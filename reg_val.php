<?php
              include("connection.php");
              {
                if(isset($_POST['wel']))
                $name=$_POST['name'];
                $phn=$_POST['phone'];
                $pass=$_POST['feedback'];
              


                $query=mysqli_query($con,"INSERT INTO `contact`(`Name`,`Phone Number`,`Feedback`) VALUES ('$name','$phn','$pass')") or die(mysqli_error($con));
                if($query)
                {
                  echo '<script type="text/javascript">' ."\n";
                  echo 'window.location="main.php"';
                  echo '</script>';
                }
              }

?>