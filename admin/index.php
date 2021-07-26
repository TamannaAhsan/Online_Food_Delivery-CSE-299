<?php  include("partials/menu.php"); ?>

        <div class="main-content" >
            <div class="wrapper">
              <h1>Dashboard</h1> 
              <br><br>
                <?php
                if (isset($_SESSION['login'])) {
                    echo $_SESSION['login']; //Display Session Message
                    unset($_SESSION['login']); //Removing Session Message
                }?>
               <br><br>
               <div class="box-4 text-center">
                   <h1>5</h1>
                   <br>
                   Varsities
               </div>
               <div class="box-4 text-center" >
                <h1>2</h1>
                <br>
                Varsities
            </div>
            <div class="box-4 text-center">
                <h1>3</h1>
                <br>
                Varsities
            </div>
            <div class="box-4 text-center ">
                <h1>4</h1>
                <br>
                Varsities
            </div>

           </div>
            <div class="clearfix"></div>
            <br><br><br><br><br><br><br>
        </div>
        
        
        <?php include("partials/footer.php"); ?>