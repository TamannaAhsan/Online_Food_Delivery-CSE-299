<!DOCTYPE html>
<html lang="US-en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="This is a web based food delivery system">
    <meta name="keywords" content="fooddelight,FOODDELIGHT,Food delight,FOOD DElIGHT,Restaurant,restaurant,web based restaurant">
    <link  rel="stylesheet" href="css\style.css">
     <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">  
  
     <title>Profile</title>
     <style>                                  
                input[type=text] {
        width: 60%;
        padding: 5px 8px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px whitesmoke;
        border-radius: 4px;
        background-color:whitesmoke;
        color:black;
}

input[type=email] {
        width: 60%;
        padding: 5px 8px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px whitesmoke;
        border-radius: 4px;
        background-color:whitesmoke;
        color:black;
}

input[type=number] {
        width: 60%;
        padding: 5px 8px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px whitesmoke;
        border-radius: 4px;
        background-color:whitesmoke;
        color:black;
}
input[type=tel] {
        width: 60%;
        padding: 5px 8px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px whitesmoke;
        border-radius: 4px;
        background-color:whitesmoke;
        color:black;
}


         input:focus {
         background-color:rgb(213, 255, 248);

         }


            textarea {
  width: 60%;
  height: 80px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px whitesmoke;
  border-radius: 4px;
  background-color: whitesmoke;
  resize: none;
}

     </style>

    </head>
    <body>
    <div class="container">
        
        <div id="Navigation-bar">
 
            <div id="FoodDelightLogo">
               <img src="homepagephotos\FinalLogo.PNG" alt="Food Delight Logo">
              
         
            </div>
            </div>
            </div>   


                <div class="NavigationLinks Text-Align ">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="categories.php">CATEGORIES</a></li>
                        <li><a href="foods.php">FOODS</a></li>
                        <li><a href="order.php">ORDER</a></li>
                        <li><a href="profile.php">PROFILE</a></li>
                        <li><a href="about.php">ABOUT </a></li>
                        <li><a href="delivery.php">DELIVERY</a></li>
                        <li><a href="#">LOG OUT</a></li>

                        </ul>
                        <div class="clearfix"></div>
                </div>

         </div>
         <div class="container">
         <span class="text-align"><h2>User Profile</h2></span>

         </div>
                     
            <div class="ProfilePic" style="margin-left:250px;">                       
               <input type="file" class="my_file ">
                               
                </div>
                <form action=>
               <div class="container_info"  style="margin-top:-360px;margin-left:800px;">
                <div>

              <label for="fullName"><h3>Customer Name</h3></label>
              <input type="text" name="fullName" id="fullName" required>
             </div>
             <div>
                 <label for="email"><h3>Email</h3></label>
                 <input type="email" name="email" id="email" required>
             </div>
                <div>
                    <label for="phone"><h3>Contact Number<h3></label>
                    <input type="tel" name="phone" id="phone" required>

                </div>
                
                <div> 
                  <label for="ID_Num" ><h3>Password.</h3></label>
                  <input type="password" name="pass_No" id="pass_No" required>
              </div>
                <div  >

                    <div><label for="address"><h3>Address</h3></label></div>
              
                      <textarea cols="5" rows="5"></textarea>
                      
                  </div>
                  </div>
                  </form>
                  <!--Save,update,delete section starts-->
                
                  <div class="container2"style="margin-left:550px;margin-top:100px;" >

                    <input type="submit" value="Save" class="Button2">
                 
                  <span style="margin-left:10px"  ><input type="button" value="Update" class="Button2"></span>
                  <span style="margin-left:10px"><input type="button" value="Delete" class="Button2"></span>
                </div>
                
                <!--save,update,delete section ends-->
                  <!--Social media section starts from here-->
                <div class ="container">
                    <div class="SocialMedia" style="margin-top:80px">
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
          <!--social media section ends here-->
         <!--footer section starts-->
      
          <div class="container">
      
            <div id="footer">
                <div class="text-align">
                Copyright &copy;2021 Rownita Tasneem      
      
                </div>
      
                </div>
                <!--footer section ends-->

            
             
</body>
</html>