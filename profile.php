<?php include('partials-front/menu.php'); ?>
  
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
                  <input type="text" name="pass_No" id="pass_No" required>
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
                <?php include('partials-front/footer.php'); ?>