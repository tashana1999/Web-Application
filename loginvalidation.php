<?php
include_once 'database.php';


if(!$conn){
    die('Could not Connect MySql Server:'.mysql_error());
}
$username = $_POST['name'];
$password = $_POST['pw'];

$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn,$sql) or die(mysql_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0){
    
    // header("https://ekel.kln.ac.lk/login/index.php");
    echo "<script> window.location = 'loginwelcome.php';</script>";
    
    die();
    
}
else{
    echo "<script type='text/javascript'>alert('Wrong Username or Password');
    window.location='loginpage.php';
    </script>";
}   
?>