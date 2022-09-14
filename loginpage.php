<!DOCTYPE html>
<html >
<head>
    
    <title>Login Form</title>
</head>
<style>
    
    body{
            background-image: url(data:image/jpeg;base64,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);
            background-repeat: no-repeat;
            background-size: cover;
            background-position:center;
            margin-top: 10px;
            height: 500px;
        }

        .container{
           
           color: lightblue;
           font-weight: bold;
           font-family: Arial, Helvetica, sans-serif;
           font-style: normal;
           background-color: rgb(11, 10, 10,0.5);
           padding:10px 0px 10px 0px;
           text-align: center;
          
           width: 800px;
           margin:auto;
          
       }
       .head{
            font-size:0.5cm;
            color: lightblue;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            font-style: normal;
            background-color: rgb(11, 10, 10,0.6);
            padding:10px 0px 10px 0px;
            text-align: center;
            border-radius: 15px 15px 0px 0px;
            width: 800px;
            margin:auto;
            

        }

        label{
            float: left;
        }
        button{
            width:100px;
            height:40px;
            background-color: yellow;
            color: #fff;
            font-weight: bold;
        }
        img{
            float: right;
            height: 200px;
            margin-top: -50px;
           
        }

        .input{
            text-align: right;
        }
        .field{
            text-align: left;
            background-color: rgb(77, 181, 237,0.7);
            line-height: 20px;
            padding:15px 10px 15px 10px;
            width: 250px;
            margin-left: 75px;
            margin-top: 5px;
            border: 1px solid black;
        } 
        .user{
            position: relative;
            text-align: left;
            line-height:20px;
            padding:10px;
            width:300px ;
            margin-top: 20px;
            border-radius: 6px;

        }

        .main-container{
            margin-top:100px
        }
</style>

<body>
    <div class="main-container">
    <div class="head"><h1> Login </h1></div>
        
        <div class="container">

        <form action="loginvalidation.php" method = "POST">
        <label for="username" class="field">Username</label>
        <input type="text" class="user" id="stdname" name ="name" placeholder="Enter username">
        <br><br>
        <label for="password" class="field">Password</label>
        <input type="text" class="user" id="stdname" name = "pw" placeholder="Enter Password"><br><br>
        <button type = "submit">Login</button>
        
    </form>
    </div>

    
</body>
</html>