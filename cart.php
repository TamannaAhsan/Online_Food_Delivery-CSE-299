<?php
   include('partials-front/menu.php');
   
    if (isset($_POST['submit'])) {
        if (isset($_SESSION["cart"])) {
            $item_array_id = array_column($_SESSION["cart"], "id");
            if (!in_array($_GET["id"], $item_array_id)) {
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'id' => $_GET["id"],
                    'title' => $_POST["title"],
                    'price' => $_POST["price"],
                    'qty' => $_POST["qty"],
                );
                $_SESSION["cart"][$count] = $item_array;
            } else {
                header("location:".SITE.'cart.php');
            }
        } else {
            $item_array = array(
                'id' => $_GET["id"],
                'title' => $_POST["title"],
                'price' => $_POST["price"],
                'qty' => $_POST["qty"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])) {
        if ($_GET["action"] == "delete") {
            foreach ($_SESSION["cart"] as $keys => $value) {
                if ($value["id"] == $_GET["id"]) {
                    unset($_SESSION["cart"][$keys]);
                    header("location:".SITE.'cart.php');
                }
            }
        }
    }
?>

<head>
    <title>Food Cart</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/cart.css">
</head>

<body>

    <div class="container" style="width: 65%">
        <h2>Food Cart</h2>
        <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        //Get the food id and details of the selected food
        //Get the details of the selected food

        $sql = "SELECT * FROM tbl_food WHERE id = $id";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
   

        if ($count==1) {
            //We have data
            $row=mysqli_fetch_assoc($res);
        }
    }?>
        <div class="col-md-3">

            <form method="POST" action="cart.php?action=add&id=<?= $row["id"]; ?>">

                <div class="item">
                    <?php
                            if ($row['image_name']=="") {
                                echo "<div class='error'>Image not available</div>";
                            } else {
                                ?>
                    <img src="<?php echo SITE; ?>images/food/<?= $row['image_name']; ?>" alt="Pizza"
                        class="img-responsive img-curve">
                    <?php
                            } ?>
                    <h5><?= $row['title']; ?></h5>
                    <h5><?= $row['price']; ?></h5>
                    <input type="text" name="qty" class="form-control" value="1">
                    <input type="hidden" name="title" value="<?= $title; ?>">
                    <input type="hidden" name="price" value="<?= $price; ?>">
                    <input type="submit" name="submit" style="margin-top: 5px;" class="btn btn-success"
                        value="Add to Cart">
                </div>
            </form>
        </div>


        <div style="clear: both"></div>
        <h3 class="title2">Food Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Food Item</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>

                <?php
                if (!empty($_SESSION["cart"])) {
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                <tr>
                    <td><?php echo $value["title"]; ?></td>
                    <td><?php echo $value["qty"]; ?></td>
                    <td>
                        <?php echo $value["price"]; ?></td>
                    <td>
                        <?php echo number_format($value["qty"] * $value["price"], 2); ?></td>
                    <td><a href="cart.php?action=delete&id=<?php echo $value["id"]; ?>"><span>Remove
                                Item</span></a></td>

                </tr>
                <?php
                        $total = $total + ($value["qty"] * $value["price"]);
                    } ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <th align="right">$ <?php echo number_format($total, 2); ?></th>
                    <td><input type="submit" name="order" value="Order" class="Button"></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <?php
            //Check whether the submit button is clicked or not

            if (isset($_POST['order'])) {
                //Get all the details from the form
                $food = $_POST['title'];
                $price = $_POST['price'];
                $qty = $_POST['qty'];
                $total = $price * $qty; // total = price * quantity
                

                //Save the order in database
                //Create sql to save data
                $sql2 = "INSERT INTO tbl_cart SET 
                        food = '$food',
                        price = $price,
                        qty = $qty,
                        total = $total,

                ";
                
                $res2 = mysqli_query($conn, $sql2);
                //check whether query executed or not
                if ($res2==true) {
                   
                    //Redirect to Manage Category Page
                    header("location:".SITE.'order.php');
                } else {
                    
                    //Redirect to Manage Category Page
                    header("location:".SITE.'cart.php');
                }
            }
            
            ?>

    </div>


</body>

</html>


<?php include('partials-front/footer.php'); ?>