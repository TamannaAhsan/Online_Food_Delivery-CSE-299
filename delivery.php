

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
                           <label for="houseno" >House#</label>
                           <input type="number" class="form-control" id="houseno" name="houseno" style="width:40%;height:2%;">
                           <label for="roadno" >Road#</label>
                           <input type="number" class="form-control" id="roadno" name="roadno" style="width:40%;height:2%;">
                           
                           <label for="sector" >Sector#</label>
                           <input type="number" class="form-control" id="sector" name="sector" style="width:40%;height:2%;">
                           <label for="block" >Block</label>
                           <select name="block" class="form-control" id="block" name="block" style="width:40%;height:2%;">
                            <option value="A" class="form-control" id="block" name="block" >A</option>
                            <option value="B" class="form-control" id="block" name="block" >B</option>
                            <option value="C" class="form-control" id="block" name="block" >C</option>
                            <option value="D" class="form-control" id="block" name="block" >D</option>
                            <option value="E" class="form-control" id="block" name="block" >E</option>
                            <option value="F" class="form-control" id="block" name="block" >F</option>
                            <option value="G" class="form-control" id="block" name="block" >G</option>
                            <option value="H" class="form-control" id="block" name="block" >H</option>
                            <option value="I" class="form-control" id="block" name="block" >I</option>
                            <option value="J" class="form-control" id="block" name="block" >J</option>
                            <option value="K" class="form-control" id="block" name="block" >K</option>
                            <option value="L" class="form-control" id="block" name="block" >L</option>
                            <option value="M" class="form-control" id="block" name="block" >M</option>
                            <option value="N" class="form-control" id="block" name="block" >N</option>
                            <option value="O" class="form-control" id="block" name="block" >O</option>
                            <option value="P" class="form-control" id="block" name="block" >P</option>
                            <option value="Q" class="form-control" id="block" name="block" >Q</option>
                            <option value="R" class="form-control" id="block" name="block" >R</option>
                            <option value="S" class="form-control" id="block" name="block" >S</option>
                            <option value="T" class="form-control" id="block" name="block" >T</option>
                            <option value="U" class="form-control" id="block" name="block" >U</option>
                            <option value="V" class="form-control" id="block" name="block" >V</option>
                            <option value="W" class="form-control" id="block" name="block" >W</option>
                            <option value="X" class="form-control" id="block" name="block" >X</option>
                            <option value="Y" class="form-control" id="block" name="block" >Y</option>
                            <option value="Z" class="form-control" id="block" name="block" >Z</option>
                             
                             
                        
     

                            </select>
                          
                           <label for="area" >Area Name</label>
                           <input type="text" class="form-control" id="area" name="area" style="width:40%;height:2%;"> 
                           <label for="postalcode" >Postal Code</label>
                           <input type="number" class="form-control" id="postalcode" name="postalcode" style="width:40%;height:2%;">
                            <label for="city"  >City </label>
                          
                            <select name="city" class="form-control" id="road" name="road" style="width:40%;height:2%;">
                            <option value="Dhaka" class="form-control" id="city" name="city" >Dhaka</option>
                            <option value="Rajshahi" class="form-control" id="city" name="city">Rajshahi</option>
                            <option value="Chittagong" class="form-control" id="city" name="city">Chittagong</option>
                            <option value="Khulna" class="form-control" id="city" name="city">Khulna</option>
                            <option value="Sylhet" class="form-control" id="city" name="city">Sylhet</option>
                            <option value="Rajshahi" class="form-control" id="city" name="city">Rajshahi</option>
                            <option value="Barisal" class="form-control" id="city" name="city">Barisal</option>
                            <option value="Rangpur" class="form-control" id="city" name="city">Rangpur</option>
                            <option value="Comilla" class="form-control" id="city" name="city">Comilla</option>
                            <option value="Narayanganj" class="form-control" id="city" name="city">Narayanganj</option>
                        
     

                            </select>
                           
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
