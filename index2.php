<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>



        body{
            background-color: blanchedalmond;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
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


    </style>

</head>
<body>
    <form action="login2.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="username" placeholder="User Name">
        <br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <br>

        <button type="submit">Login</button>


    </form>
</body>
</html>