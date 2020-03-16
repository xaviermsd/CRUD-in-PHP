<?php

//Declare Variables for field values and error messages

$db_name='php_practice';
$host='localhost';
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password,$db_name);

$idDelete=$_GET['id'];


            //$query="INSERT INTO `regi_form` (`First Name`, `Last Name`, `Company`, `Email`, `Phone`, `Subject`, `Technologies`,`Developer`) VALUES ('$fname', '$lname', '$company', '$email', '$phone', '$subject','$tech','$developer');";  
            //$query="UPDATE `regi_form` SET `First Name`='$fname',`Last Name`='$lname',`Company`='$company',`Email`='$email',`Phone`='$phone',`Subject`='$subject',`Technologies`='$tech',`Developer`='$developer' WHERE `ID`='$idUpdate'";  
            $query="DELETE FROM `regi_form` WHERE `regi_form`.`ID` = $idDelete";
            $run=mysqli_query($con,$query);
            if($run)
            {
                ?>
                <script>
                    alert('Deleted Successfully!');
                    window.location = "view.php";
                </script>
            <?php }
            else
            {
                die("Something is wrong with ".mysqli_error($con));
            }
?>