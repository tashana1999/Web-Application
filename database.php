<?php 
$host ='localhost';
$username ='root';
$password='';
$dbname= 'users';

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn){
    die('cannot connect Mysql Server:'  .mysql_error());
}
?>