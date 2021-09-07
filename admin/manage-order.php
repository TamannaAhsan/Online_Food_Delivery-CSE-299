<?php  include("partials/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>MANAGE ORDERS</h1>
        <br><br>

        <?php
         if (isset($_SESSION['update'])) { //Checking whether the Session set or not
            echo($_SESSION['update']); //Display the session Message if set
            unset($_SESSION['update']); //Remove the Session Message
         }
          if (isset($_SESSION['delete-order'])) { //Checking whether the Session set or not
            echo($_SESSION['delete-order']); //Display the session Message if set
            unset($_SESSION['delete-order']); //Remove the Session Message
          }
    ?>
        <br>


        <table class="content-table">
            <thead>

                <tr>
                    <th>Serial no</th>
                    <th>Food item </th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <?php

    $sql = "SELECT * FROM tbl_order ORDER BY id DESC"; // Display the latest order at first
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    $sn=1;

    if ($count>0) {
        while ($row=mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $food = $row['food'];
            $price = $row['price'];
            $qty = $row['qty'];
            $total = $row['total'];
            $order_date = $row['order_date'];
            $status = $row['status'];
            $customer_name = $row['customer_name'];
            $customer_contact = $row['customer_contact'];
            $customer_email = $row['customer_email'];
            $customer_address = $row['customer_address']; ?>

            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $food; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $qty; ?></td>
                <td><?php echo $total; ?></td>
                <td><?php echo $order_date; ?></td>
                <td>
                    <?php
                if ($status=="Ordered") {
                    echo "<label style='color:blue;'>$status</label>";
                } elseif ($status=="On Delivery") {
                    echo "<label style='color:orange;'>$status</label>";
                } elseif ($status=="Delivered") {
                    echo "<label style='color:green;'>$status</label>";
                } elseif ($status=="Cancelled") {
                    echo "<label style='color:red;'>$status</label>";
                } ?>


                </td>
                <td><?php echo $customer_name; ?></td>
                <td><?php echo $customer_contact; ?></td>
                <td><?php echo $customer_email; ?></td>
                <td><?php echo $customer_address; ?></td>

                <td>
                    <a href="<?php echo SITE; ?>admin/update-order.php?id=<?php echo $id; ?>"
                        class="btn-update">Update</a>
                    <a href="<?php echo SITE; ?>admin/delete-order.php?id=<?php echo $id; ?>"
                        class="btn-detele">Delete</a>


                </td>
            </tr>


            <?php
        }
    } else {
        echo "<tr><td colspan='12' class='error'>Orders not available</td></tr>";
    }

?>


        </table>
    </div>
</div>

<?php include("partials/footer.php"); ?>