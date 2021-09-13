<?php include("header.php");

     if ($_SERVER["REQUEST_METHOD"] =="POST") {
         if (isset($_POST['remove'])) {
             foreach ($_SESSION['cart'] as $key => $value) {
                 if ($value['item_name']==$_POST['item_name']) {
                     unset($_SESSION['cart'][$key]);
                     $_SESSION['cart'] =  array_values($_SESSION['cart']);
                   
                     $_SESSION['remove-item'] ="<div><b>Item removed</b></div>";
                     //Redirect to My Cart Page
                     header("location:".SITE.'mycart.php');
                 }
             }
         }
     }

     if (isset($_POST['submit'])) {
         //Get all the details from the form
         $food = $_POST['item_name'];
         $price = $_POST['item_price'];
         $qty = $_POST['qty'];
         $total = $_POST['total'];
         $order_date = date("Y-m-d h:i:sa"); //Order Date
         $status =  "Ordered"; //ordered, on delivery, delivered, canceled
         $customer_name = $_POST['customer-name'];
         $customer_contact = $_POST['contact'];
         $customer_email = $_POST['email'];
         $customer_address = $_POST['address'];

         //Save the order in database
         //Create sql to save data
         $sql2 = "INSERT INTO tbl_order SET 
                        food = '$food',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address'

                ";
                
         $res2 = mysqli_query($conn, $sql2);
         //check whether query executed or not
         if ($res2==true) {
             $_SESSION['order'] ="<div class='success text-center'>Food ordered Successfully.</div>";
             //Redirect to Manage Category Page
             header("location:".SITE);
         } else {
             $_SESSION['order'] ="<div class='error text-center'>Failed to order food.</div>";
             //Redirect to Manage Category Page
             header("location:".SITE);
         }
     }
?>


<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="./css/mycart.css">
</head>

<?php
    if (isset($_SESSION['exist-item'])) {
        echo $_SESSION['exist-item']; //Display Session Message
        unset($_SESSION['exist-item']); //Removing Session Message
    }
    if (isset($_SESSION['add-item'])) {
        echo $_SESSION['add-item']; //Display Session Message
        unset($_SESSION['add-item']); //Removing Session Message
    }
    if (isset($_SESSION['remove-item'])) {
        echo $_SESSION['remove-item']; //Display Session Message
        unset($_SESSION['remove-item']); //Removing Session Message
    }
?>


<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                         
                        $total=0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr=$key+1;
                                $total= $total + $value['item_price'];
                        
                                echo"
                        <tr>
                            <td>$sr</td>
                            <td>$value[item_name]</td>
                            <td>$value[item_price]</td>
                            <td><input class='text-center' type='number' value='$value[qty]' min='1' max='20'></td>
                        <td>
                            <form method="POST" action="manage-cart.php">
                                <button name="remove" class='btn btn-sm btn-outline-danger'>Remove</button>
                                <?php
                                <input type="hidden" name="item_name" value="$value[item_name]">
                            </form>

                        </td>
                    </tr>

                        ";
                            }
                        }
?>
                    </tbody>
                </table>

            </div class="col-lg-4">
            <div class="border-bg-rounded p-4">
                <h4>Total</h4>
                <h5><?php echo $total; ?></h5>
                <br>
                <div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container mt-5">
            <fieldset>
                <legend class="text-align"><b>Delivery Details</b></legend>
                <div class="order-label"><b>Name</b></div>
                <input type="text" name="customer-name" placeholder="Name" class="input-responsive" required>

                <div class="order-label"><b>Phone Number</b></div>
                <input type="tel" name="contact" placeholder="01*********" class="input-responsive" required>

                <div class="order-label"><b>Email</b></div>
                <input type="email" name="email" placeholder="Email" class="input-responsive" required>

                <div class="order-label"><b>Address</b></div>
                <textarea name="address" rows="10" placeholder="Address" class="input-responsive" required></textarea>
                <br><br>
                <form method="POST" action="">
                    <button type="submit" name="submit" class="btn btn-primary">Confirm
                        Order</button>
                </form>
            </fieldset>
        </div>
    </div>
</body>

<?php include('partials-front/footer.php'); ?>