<?php include('partials-front/menu.php');

 ?>

<div class="container" style="text-align:center">
    <h1>Cart</h1>
    <?php if ($_SESSION["shopping_cart"]) :?>
    <table class="table table-bordered">
        <tr>
            <th width="40%">Item Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
        </tr>
        <?php   
                if(!empty($_SESSION["shopping_cart"]))  
                {  
                    $total = 0;  
                    foreach($_SESSION["shopping_cart"] as $keys => $values)  
                    {  
                ?>
        <tr>
            <td><?php echo $values["product_name"]; ?></td>
            <td><?php echo $values["product_quantity"]; ?></td>
            <td>$ <?php echo $values["product_price"]; ?></td>
            <td>$ <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="index.php?action=delete&product_id=<?php echo $values["product_id"]; ?>"><span
                        class="text-danger">Remove</span></a></td>
        </tr>
        <?php  
                        $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                    }  
                ?>
        <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">$ <?php echo number_format($total, 2); ?></td>
            <td></td>
        </tr>
        <?php  
                }  
                ?>
    </table>
    <?php else: ?>
    <h1>Cart is empty</h1>
    <?php endif; ?>
</div>

<?php include('partials-front/footer.php'); ?>
