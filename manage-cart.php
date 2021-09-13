<?php

include("header.php");
?>

<head>
    <title>Manage Cart</title>
</head>
<?php if (isset($_SESSION['add-item'])) {
    echo $_SESSION['add-item']; //Display Session Message
    unset($_SESSION['add-item']); //Removing Session Message
}
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] =="POST") {
        if (isset($_POST['submit'])) {
            if (isset($_SESSION["cart"])) {
                $myitems = array_column($_SESSION["cart"], 'item_name');
                if (in_array($_POST["item_name"], $myitems)) {
                    echo "Item already added";
                } else {
                    $count = count($_SESSION["cart"]);
                    ($_SESSION["cart"])[$count]=array('item_name'=>$_POST['item_name'],'item_price'=> $_POST['item_price'],'qty'=>1 );
                    echo "Item added";
                    header("location:".SITE.'mycart.php');
                }
            } else {
                $_SESSION["cart"][0]=array('item_name'=>$_POST['item_name'],'item_price'=> $_POST['item_price'],'qty'=>1 );
                echo "Item added";
                header("location:".SITE.'mycart.php');
            }
        }

        if (isset($_POST['remove'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['item_name']==$_POST['item_name']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] =  array_values($_SESSION['cart']);
                    echo "Item removed";
                }
            }
        }
    }
?>

<?php include('partials-front/footer.php'); ?>