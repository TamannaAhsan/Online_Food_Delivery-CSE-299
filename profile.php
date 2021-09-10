<?php include('partials-front/menu.php'); ?>

<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Profile</title>


</head>

<body>


    <div class="container">
        <span class="text-align">
            <h2>User Profile</h2>
        </span>

    </div>

    <div class="ProfilePic" style="margin-left:220px;">

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
    <div style="margin-left:800PX;margin-top:-300px;">
        <div class="panel-body">
            <form action="" method="POST">

                <div class="form-group col-xs-5">

                    <label for="firstName"><b>Name</b> </label>


                    <input type="text" class="form-control" name="customer_name" value="<?php echo $customer_name; ?>">

                </div>
                <div class="form-group">
                    <label for="id"><b>Id</b></label>
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">

                </div>


                <div class="form-group">
                    <label for="email"><b>Email</b></label>
                    <input type="text" class="form-control" name="customer_email"
                        value="<?php echo $customer_email; ?>">

                </div>

                <div class="form-group">
                    <label for="phone"><b>Phone Number</b> </label>
                    <input type="text" class="form-control" name="customer_contact"
                        value="<?php echo $customer_contact; ?>">
                </div>
                <div class="form-group">
                    <label for="location"><b>Address</b> </label>
                    <input type="text" class="form-control" name="customer_address"
                        value="<?php echo $customer_address; ?>">


                </div>

                <a href="<?php echo SITE; ?>update-account.php?id=<?php echo $id; ?>" class="Button2">Update</a>
                <a href="<?php echo SITE; ?>delete-account.php?id=<?php echo $id; ?>" class="Button2">Delete</a>


            </form>
        </div>
    </div>
    </form>
    </div>
    </div>


    <!--save,update,delete section ends-->
    <!--Social media section starts from here-->

    <!--social media section ends here-->
    <!--footer section starts-->

    <?php include('partials-front/footer.php'); ?>