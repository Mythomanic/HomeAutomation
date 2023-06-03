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
    <link rel="stylesheet" type="text/css" href="..\css\bootstrap.min.css">
</head>
<body style="background-color:#bdc2e6">


    <div class="container-fluid">
        <div class="row bg-primary py-3">
            <div class="col text-white text-center">
                <h1>Home Automation System - Producer Page</h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-4">
                <?php if(isset($msg)){?>
                    <div class="alert alert-danger"><?php echo $msg;?></div>
                <?php } ?>

                <div class="card p-4">
                    <h3 class="mb-4">Login for Producer</h3>

                    <form action="" method="post" name="Login_Form">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="Username" type="text" id="username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="Password" type="password" id="password" class="form-control">
                        </div>

                        <div class="text-center">
                            <input name="Submit" type="submit" value="Login" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <footer class="row bg-primary py-3 mt-4">
            <div class="col text-white text-center">
                &copy; <?php echo date('Y'); ?> Home Automation System. All rights reserved.
            </div>
        </footer>
</body>
</html>
