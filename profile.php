<?php include('partials-front/menu.php'); ?>

<title>Profile</title>

<link rel="stylesheet" href="./css/user-profile.css">




<div class="container">
    <span class="text-align">
        <h2>User Profile</h2>
    </span>

</div>
<div class="ProfilePic" style="margin-left:250px;">
</div>

<?php

              $customer_name = $_SESSION["user"];
             
              $sql = "SELECT * FROM tbl_customer WHERE customer_name = '$customer_name'";

              $res = mysqli_query($conn, $sql);

    //Check the query is executed or not
    if ($res==true) {
        //Check whether the data is available or not
        $count = mysqli_num_rows($res);
        //Check whether we have admin data or not
        if ($count==1) {
            //Get the details
            $row=mysqli_fetch_assoc($res);
            
            $id = $row['id'];
            $customer_name = $row['customer_name'];
            $customer_email = $row['customer_email'];
            $customer_contact = $row['customer_contact'];
            $customer_address = $row['customer_address'];
        }
    }
 ?>

<form action="" method="POST">
    <div class="container_info" style="margin-top:-360px;margin-left:800px;">
        <div>

            <label for="Name">
                <h3>Customer Name</h3>
            </label>
            <input type="text" name="customer_name" value="<?php echo $customer_name; ?>">
        </div>
        <div>

            <label for="ID">
                <h3>Customer ID</h3>
            </label>
            <input type="text" name="id" value="<?php echo $id; ?>">
        </div>
        <div>
            <label for="Email">
                <h3>Customer Email</h3>
            </label>
            <input type="text" name="customer_email" value="<?php echo $customer_email; ?>">
        </div>
        <div>
            <label for="Phone">
                <h3>Contact Number<h3>
            </label>
            <input type="text" name="customer_contact" value="<?php echo $customer_contact; ?>">

        </div>


        <div><label for="Address">
                <h3>Customer Address</h3>
            </label></div>
        <input type="text" name="customer_address" value="<?php echo $customer_address; ?>">

    </div>
    </div>
</form>
<div class="container2" style="margin-left:550px;margin-top:100px;">
    <a href="<?php echo SITE; ?>update-account.php?id=<?php echo $id; ?>" class="Button2">Update</a>
    <a href="<?php echo SITE; ?>delete-account.php?id=<?php echo $id; ?>" class="Button2">Delete</a>

</div>
<!--Save,update,delete section starts-->

<div class="container2" style="margin-left:550px;margin-top:100px;">
</div>

<!--save,update,delete section ends-->
<?php include('partials-front/footer.php'); ?>
