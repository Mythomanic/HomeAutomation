
<?php session_start(); /* Starts the session */
        
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

<html>

<head>

<style>
  body{
    background-color: blanchedalmond;
  }

  div{
    height: 200px;
    width:350px;

    background-color:brown;

    border: solid black 2px;
    font-family: Arial, Helvetica, sans-serif;

  }
</style>

</head>

<div >

<form action="" method="post" name="Login_Form">
  <table width="400"  cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td style="margin:5px" colspan="2" ><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="3" ><h3>Login for Producer</h3></td>
    </tr>
    <tr>
      <td  valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td >Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>

</div>



</html>


