<!DOCTYPE html>
<html lang="US-en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="This is a web based food delivery system">
    <meta name="keywords" content="fooddelight,FOODDELIGHT,Food delight,FOOD DElIGHT,Restaurant,restaurant,web based restaurant">
    <link  rel="stylesheet" href="css\style.css"   />
    <style>

        input[type=text] {
         width: 60%;
         padding: 12px 20px;
         margin: 8px 0;
         box-sizing: border-box;
         border: 2px whitesmoke;
         border-radius: 4px;
         background-color:whitesmoke;
         color:black;
 }
 
 input[type=email] {
         width: 60%;
         padding: 12px 20px;
         margin: 8px 0;
         box-sizing: border-box;
         border: 2px whitesmoke;
         border-radius: 4px;
         background-color:whitesmoke;
         color:black;
 }
 
 input[type=number] {
         width: 20%;
         padding: 12px 20px;
         margin: 8px 0;
         box-sizing: border-box;
         border: 2px rgb whitesmoke;
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
          background-color: rgb(213, 255, 248);
          }
          
          textarea {
   width: 60%;
   height: 80px;
   padding: 8px 8px;
   box-sizing: border-box;
   border: 2px whitesmoke;
   border-radius: 4px;
   background-color: whitesmoke;
   color:black;
   resize: none;
 }
 textarea:focus{
 
     background-color: rgb(213, 255, 248);
 
 }
 </style>
      
     

    <title>Order</title>

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
                     <li><a href="contact.php">ABOUT</a></li>
                     <li><a href="#">LOG OUT</a></li>
                  
                     </ul>
                     <div class="clearfix"></div>
             </div>

      </div>
      <div class="container">
         
             <h2 class="text-align" style="margin-bottom:-200px;" ><a href="order2.php">Confirm Your Order </a></h2>
           


         
      </div>
      <div>
         <div class="recipe-image"></div>
             
          <img src= "foodrecipies/ChickenMakhani.jpg" style="width:250px ;height:250px;border-radius:50px;margin-left:250px;margin-top:100px;" class="ResponsiveImage" > 
          <p style="margin-left:300px;font-size:30px;color:#756096;">Price:$100</p>  
        </div>
      </div>
      <div class="container " style="margin-top:-400px;margin-left:300px;">
      <form action=>
      <div id="order">

         <div  >
             <label for="quantity" style="color:#756096;font-size:larger;"><h2>Quantity</h2></label>
      
             <input type="number" value="Enter the quantity"/>
     
             </div> 
     
          <div>
              <label for="name"><h2>Name</h2></label>
             
         <input type="text" value="Enter your name..."/>
         
         </div>
        
         <div  >
             <label for="email"><h2>Email</h2></label>
             
         <input type="email" value="Enter your email...">
         
         </div>
         
         <div>
            <label for="phone"><h2>Contact Number</h2></label>
            <input type="tel" name="phone" id="phone" required>

        </div>

         <div >
           <label for="address"><h2>Address</h2></label>
     
             <textarea cols="5" rows="5"></textarea>
             
         </div>
         </div>
      
      <div style="margin-left:300px;margin-top:10px;">
          <input type="submit" value="Order Now" class="Button">
      </div>
      </form>

      </div>
           <!--Social media section starts from here-->
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