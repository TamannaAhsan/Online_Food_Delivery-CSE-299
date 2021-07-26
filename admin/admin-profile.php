<?php  include("partials/menu.php"); ?>
         
        <div class="main-content" >
            <div class="wrapper">
                <div class="container">
                    <div class="avatar">
                        <img  src="../admin-img/pngegg.png" alt="account" > 
                    </div> 

                    <?php

              $username = $_SESSION["user"];
             
              $sql = "SELECT * FROM tbl_admin WHERE username = '$username'";

              $res = mysqli_query($conn, $sql);

    //Check the query is executed or not
    if ($res==true) {
        //Check whether the data is available or not
        $count = mysqli_num_rows($res);
        //Check whether we have admin data or not
        if ($count==1) {
            //Get the details
            $row=mysqli_fetch_assoc($res);

            $full_name = $row["full_name"];
            $username = $row["username"];
            $id = $row["id"];
        }
    }
 ?>

            <form action="" method="POST"> 
                <table class="profile-table" >
                    <thead>
                    <tr>
                    <th colspan="2" ><h2  align="center">Profile information</h2></th>
                    
                    </tr>
                   </thead>
                   <>

                   <tr>
                        <th>Full Name: </th>
                        <td><?php echo $full_name; ?></td>
                    </tr>

                    <tr>
                        <th>Username: </th>
                        <td><?php echo $username; ?></td>
                    </tr>

                    <tr>
                        <th>User ID: </th>
                        <td><?php echo $id; ?></td>
                    </tr>
                </table>
            </form>
            </div>
                <br><br>
                <div align="left" cellpadding="50%" cellspacing="10%" >
                    <tr>
                    <a href="#"class="btn-detele"  >Update</a>
                    <a  href="#"class="btn-detele"  >Delete</a>
                    <a  href="#"class="btn-detele"  >Change Password</a>
                   
                    </tr>
                </div>
                    
                      
            </div> 
        </div>
   

<?php include("partials/footer.php"); ?>