<!DOCTYPE html>
<html >
<head>
    
    <title>Document</title>
    <style>
         body{
           background-image: url(https://www.maga.lk/wp-content/uploads/2020/12/1pa-650x400.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position:center;
            margin-top: 10px;
            height: 500px;
        }

        h1{
            text-align:center;
            font-size:100px;
            color: yellow;
        }
    </style>
</head>
<body>
    
    <h1> Welcome! </h1> 
    <?php
    echo '<script type="text/javascript">';
    echo ' alert("Succesfully logged in!")';  
    echo '</script>';
    ?>
</body>
</html>