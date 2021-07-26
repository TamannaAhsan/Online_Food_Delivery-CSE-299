<?php include('../config/constants.php') ?>
<!DOCTYPE html>
<html >
<head>
    
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>

    <br><br>
    <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login']; //Display Session Message
            unset($_SESSION['login']); //Removing Session Message
        }

        if (isset($_SESSION['no-login-message'])) {
            echo $_SESSION['no-login-message']; //Display Session Message
            unset($_SESSION['no-login-message']); //Removing Session Message
        }

    ?>

    <br><br>
    <form action ="" method="POST" class="text-center">
        <table width="30%" border="0" cellspacing="35" align="center">
            <tr>
                <td align="center"><img src="../admin-img/system-administrator.png" width="30%"> </td>
            </tr>
            
            <tr>
                <td align = "center" id="text"><h2>Administrator Login</h2></td>
            </tr>
            <tr>
                <td><input type="text" name= "username" placeholder="Username" id="type"> </td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Enter Password" id="type"> </td>
            </tr>
            <tr>
                <td align="center" ><input type="submit" name="submit" value=LOGIN id="btn"> </td>
            </tr>

            </table>
        </form>

    </body>
</html>

<?php

    //Check whether the submit Button is clicked or not
    if (isset($_POST['submit'])) {

        //Process for login
        //1.Get all the data from Login form

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //2.SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username ='$username' AND password ='$password'";

        //Execute the query
        $res = mysqli_query($conn, $sql);
        

        //4. Count rows to check whether the user exists or not

        $count = mysqli_num_rows($res);

        if ($count==1) {
            //User Available and login successfully
            $_SESSION['login'] = "<div class= 'success'><b>Login Successful</b></div>";
            $_SESSION['user']=$username; //Check the user is logged in or not an logout with unset it
           

            //Redirect to Home Page/Dashboard
            header("location:".SITE.'admin/');
        } else {
            //User not Available
            $_SESSION['login'] = "<div class= 'error text-center'><b>Username or Password did not match</b></div>";

            //Redirect to Home Page/Dashboard
            header("location:".SITE.'admin/login.php');
        }
    }
?>
