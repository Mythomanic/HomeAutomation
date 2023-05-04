<?php 
session_start(); /* Starts the session */

/* Check Login form submitted */        
if(isset($_POST['Submit'])){
    /* Define username and associated password array */
    $logins = array('admin' => '123','deneme' => '123');

    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    /* Check Username and Password existence in defined array */            
    if (isset($logins[$Username]) && $logins[$Username] == $Password){
        /* Success: Set session variables and redirect to Protected page  */
        $_SESSION['UserData']['Username']=$logins[$Username];
        header("location:home-producer.php");
        exit;
    } else {
        /*Unsuccessful attempt: Set error message */
        $msg="<span style='color:red'>Invalid Login Details</span>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login for Producer</title>

    <style>
        body {
            background-color: #cb9058;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            height: 250px;
            background-color: #f1d079;
            border: solid black 2px;
            border-radius: 6px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h3 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 5px;
            border-radius: 4px;
            border: 1px solid gray;
        }

        .error-message {
            color: red;
        }

        .button {
            padding: 5px 15px;
            margin-top: 10px;
            border-radius: 4px;
            border: none;
            background-color: #1e90ff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0077bb;
        }

        .color1 {color: #181607;}
.color2 {color: #31360e;}
.color3 {color: #5e6324;}
.color4 {color: #929e3a;}
.color5 {color: #dbe257;}
    </style>
</head>

<body>

    <div class="container">
        <?php if(isset($msg)){?>
            <div class="error-message"><?php echo $msg;?></div>
        <?php } ?>

        <h3>Login for Producer</h3>

        <form action="" method="post" name="Login_Form">
            <label for="username">Username</label><br>
            <input name="Username" type="text" id="username">

            <label for="password">Password</label>
            <input name="Password" type="password" id="password">

            <input name="Submit" type="submit" value="Login" class="button">
        </form>

    </div>

</body>

</html>
