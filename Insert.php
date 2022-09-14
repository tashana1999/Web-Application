<?php
   
            include_once 'database.php';


            $username='rtaaa';
            $password='hj88';

            $sql="INSERT INTO login ( username ,password) VALUES 
            ('$username','$password')";

            if(mysqli_query($conn,$sql)){
            echo "New record has been added succeefully";

            }else{
            echo "Error:".$sql."-".mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>