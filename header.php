<?php include('config/constants.php');?>

<!DOCTYPE html>
<html lang="US-en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="This is a web based food delivery system">

    <meta name="keywords"
        content="fooddelight,FOODDELIGHT,Food delight,FOOD DElIGHT,Restaurant,restaurant,web based restaurant">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css\style.css" />
    <link rel="stylesheet" href=".css\about.css" />


</head>

<body>
    <div class="Cart">
        <div class="container">

            <div id="Navigation-bar">

                <div id="FoodDelightLogo">
                    <img src="homepagephotos\FinalLogo.PNG" alt="Food Delight Logo">


                </div>
            </div>
            <div class="Navi_Links">

                <div class="NavigationLinks Text-Align ">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="categories.php">CATEGORIES</a></li>
                        <li><a href="foods.php">FOODS</a></li>
                        <li><a href="profile.php">PROFILE</a></li>
                        <li><a href="cart.php">CART</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="user-logout.php">LOGOUT</a></li>

                    </ul>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        <?php
            $count=0;
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
        ?>
        <div align="center"><a href="mycart.php" class="btn btn-primary">My Cart (<?php echo $count; ?>)</a></div>

</body>

</html>