

<!doctype html>
<html lang="en">
  <head>
    <title>Delivery</title>
    <!-- Required meta tags -->
    <meta name="description" content="This is a web based food delivery system">
    <meta name="keywords" content="fooddelight,FOODDELIGHT,Food delight,FOOD DElIGHT,Restaurant,restaurant,web based restaurant">
    <link  rel="stylesheet" href="css\style.css"   />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <div class="container">
        
        <div id="Navigation-bar">
 
            <div id="FoodDelightLogo">
               <img src="homepagephotos\FinalLogo.PNG" alt="Food Delight Logo">
              
         
            </div>
            </div>
   


                <div class="NavigationLinks Text-Align ">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="categories.php">CATEGORIES</a></li>
                        <li><a href="foods.php">FOODS</a></li>
                        <li><a href="order.php">ORDER</a></li>
                        <li><a href="profile.php">PROFILE</a></li>
                       <li><a href="delivery.php">DELIVERY</a></li>
                       <li><a href="about.php">ABOUT</a></li>
                        <li><a href="#">LOG OUT</a></li>

                        </ul>
                        <div class="clearfix"></div>
                </div>

         </div>
         <div style="margin-left:500px">
         <div class="container">
             <div class="row col-md-6 col-md-offset-3">
                 <div class="panel panel-primary">
                   <div class="panel-heading text-center">

                   <h1>Delivery Information</h1>

                   </div>
                    <div class="panel-body">
                        <form  action="connection.php" method="post">
                          <div class="form-group">

                            <label for="firstName">First Name </label>

                            <input type="text" class="form-control" id="firstName" name="firstName"/>


                          </div>
                          <div class="form-group">

                            <label for="LastName">Last Name </label>

                            <input type="text" class="form-control" id="lastName" name="lastName"/>


                          </div>
                          

                          
                           <div class="form-group">
                           <label for="email" >Email</label>
                           <input type="email" class="form-control" id="email" name="email">

                           </div>
                           <div class="form-group">
                            <label for="location" >Location </label>
                           <input type="text" class="form-control" id="location" name="location"/>

                           </div>
                           <div class="form-group">
                               <label for="number">Phone Number </label>
                            <input type="tel" class="form-control" id="number" name="number"/>

                           </div>
                           <div class="form-group">
                            <label for="message" >Your Message</label>
                            
                          <textarea cols="4" rows="4" class="form-control" id="message" name="message" style="width:100%;height:100%;" ></textarea>
    
                           </div>

                         <input type="submit" class="btn btn-primary" value="Get Delivery">

                        </form>
                 </div>
                 </div>
                 <div class ="container">
              <div class="SocialMedia">
                  <h2 class="text-align">Follow Us</h2>
                  <ul> 
                      <div class="SocialMediaListType">
                      <div class="text-align">
                       
                      <li><a href="#"><img src="https://img.icons8.com/color/48/fa314a/facebook-circled--v1.png"/></a></li>
                      <li><a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a></li>
                      <li><a href="#"><img src="https://img.icons8.com/color/48/000000/twitter--v2.png"/></a></li>
                 
                    </div>
                      </div>
                  

                    </ul>
          
    </div>
    </div>


    <div class="container">

<div id="footer">
    <div class="text-align">
    Copyright &copy;2021 Rownita Tasneem      

    </div>

    </div>
  </div>
      


</body>
</html>
