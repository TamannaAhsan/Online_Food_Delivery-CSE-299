<?php include('partials-front/menu.php'); ?>
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


         <div class="container">
            
                <h2 class="text-align" style="margin-bottom:-200px;" ><a href="order.html">Confirm Your Order </a></h2>
              
 

            
         </div>
         <div>
            <div class="recipe-image"></div>
                
             <img src= "foodrecipies/KacchiBiryaniBD.jpg" style="width:250px ;height:250px;border-radius:50px;margin-left:250px;margin-top:100px;" class="ResponsiveImage" > 
             </div>
         </div>
         <div class="container " style="margin-top:-300px;margin-left:300px;">
         <form action=>
         <div id="order">

            <div>
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
        
                <textarea cols="4" rows="4"></textarea>
                
            </div>
            </div>
         
         <div style="margin-left:300px;margin-top:10px;">
             <input type="submit" value="Order Now" class="Button">
         </div>
         </form>

         </div>
         <?php include('partials-front/footer.php'); ?>
              