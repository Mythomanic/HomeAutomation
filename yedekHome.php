<?php


    session_start();

    if(isset($_SESSION['id'])  &&  isset($_SESSION['user_name']) ){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>



        body{
            background-color: blanchedalmond;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            flex-direction: column;
        }

        *{
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        form{
            width: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: #fff;
            border-radius: 15px;
        }

        h2{
            text-align: center;
            margin: bottom 40px ;
        }
        input{
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
        }
        label{
            color: rgb(53, 48, 49);
            font-size: 18px ;
            padding: 10px;
        }
        button{
            float: right;
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right:10px ;
            border: none;

        }
        button:hover{
            opacity: .7;
        }
        .error{
            background: #F2DEDE ;
            color:#A94442 ;
            padding:10px ;
            width: 95%;
            border-radius: 5px;
        }

        h1  {
            text-align:center ;
            color: red;
        }

        a{
            float: right;
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right:10px ;
            border: none;
            text-decoration:none;

        }
        a:hover{
            opacity: .7;
        }


    </style>

</head>
<body>



    <h1>Hello</h1>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
    }else{
        header("Location: index.php"); 
        exit();

    }
?>