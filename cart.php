<?php

 include("header.php");
 
    if ($_SERVER["REQUEST_METHOD"] =="POST") {
        if (isset($_POST['submit'])) {
            if (isset($_SESSION["cart"])) {
                $myitems = array_column($_SESSION["cart"], 'item_name');
                if (in_array($_POST["item_name"], $myitems)) {
                    echo "Item already added";
                    $_SESSION['exist-item'] ="<div><b>Item already added</b></div>";
                    //Redirect to My Cart Page
                    header("location:".SITE.'mycart.php');
                } else {
                    $count = count($_SESSION["cart"]);
                    ($_SESSION["cart"])[$count]=array('item_name'=>$_POST['item_name'],'item_price'=> $_POST['item_price'],'qty'=>1 );
                   
                    $_SESSION['add-item'] ="<div><b>Item added</b></div>";
                    //Redirect to My Cart Page
                    header("location:".SITE.'mycart.php');
                }
            } else {
                $_SESSION["cart"][0]=array('item_name'=>$_POST['item_name'],'item_price'=> $_POST['item_price'],'qty'=>1 );
                
                $_SESSION['add-item'] ="<div><b>Item added</b></div>";
                //Redirect to My Cart Page
                header("location:".SITE.'mycart.php');
            }
        }
    }

?>

<head>
    <title>Cart</title>
</head>


<body>
    <div class="container mt-5 " style="width: 800px">
        <h3 align="center">Food Cart</h3>

        <?php

        $sql = "SELECT * FROM tbl_food ORDER BY id ASC";
        $res = mysqli_query($conn, $sql);

            if (mysqli_num_rows($res)>0) {
                while ($row = mysqli_fetch_array($res)) {
                    ?>
        <div class="col-md-3">
            <form method="POST" action="">

                <div style: "border: 1px solid #333; background-color: #f1f1f1; border-radius:5px; padding:16px;"
                    align="center"></div><br><br>

                <img src="<?php echo SITE; ?>images/food/<?= $row['image_name']; ?>" alt="Pizza"
                    class="img-responsive img-curve">
                <h4 class=" text-info"><?php echo $row["title"]; ?></h4>
                <h4 class="text-danger"><?php echo $row["price"]; ?></h4>
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Add to cart</button>
                <input type="hidden" name="item_name" value="<?php echo $row["title"]; ?>">
                <input type="hidden" name="item_price" value="<?php echo $row["price"]; ?>">
        </div>
        <?php
                }
            }
            
?>
    </div>
</body>

<?php include('partials-front/footer.php'); ?>