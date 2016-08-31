<?php
        require_once('auth.php');
    ?>
    
<!DOCTYPE html>
<html>
    <head>
    <title>My Profile</title>
    <meta charset="utf-8" />
    <meta http-equiv="content-language" content="bg" />
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
       

    </head>

    <body>
    
        <div class="moto"> 
            <img src="res/motto.png" alt="Moto" width="510" height="75"> 
        </div>

        <div class="form">
            <table style="width:75%">
                <tr>
                    <td><a href="login.php">Sign out</a></td>
                </tr>
                <tr>
                    <td><a href="regist.php">Register</a></td>
                </tr>
          </table>
        </div>

        <div class="logo">
            <a href="home.php"><img src="res/logo.png" alt="Logo" width="275" height="245"></a>
        </div>

        <div class="biginfo" style="height:1200px;"> 
       
            <div class="search"> Search...</div>
            <div class="allbreeds"> 
                <span class="words-allbreeds"> All breeds </span>
                <div class="dropdown">
                    <button class="dropArrow"> &#9660 </button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>

        <div class="title">
            <h1><u>My Profile</u></h1>
        </div>
        

        <a href="cart.php"><img class="cart" src="res/cart.png"></a>

        

        <?php
                        // count products in cart
                        
                        if(isset($_COOKIE["cart_items_cookie"])==0){$_COOKIE["cart_items_cookie"]=0;}
                        else{$cookie = $_COOKIE["cart_items_cookie"];
                        $cookie = stripslashes($cookie);
                        $saved_cart_items = json_decode($cookie, true);
                        $cart_count=count($saved_cart_items);}

                        ?>
                        <span class="badge" id="comparison-count">

                        <?php  
                        if(isset($cart_count)) {echo $cart_count;}
                        else{echo 0;}
                        ?></span>



         <ul class="menu"><h1><i>MENU</i></h1>
        <a class="menu_list" href="home.php"><li><h2><i>Home Page</i></h2></li></a>
        <a class="menu_list" href="myprofile.php"><li><h2><i>My Profile</i></h2></li></a>
        <a class="menu_list" href="cart.php"><li><h2><i>My Cart</i></h2></li></a>
        </ul>



        <div class="block1">
            
            <div class="aboutme">
                <b><i>About me</i></b><br></br>
                <i>First name: </i><?php echo $_SESSION['SESS_FIRST_NAME']?><br></br>
                <i>Last name: </i><?php echo$_SESSION['SESS_LAST_NAME']?><br></br>
                <i>User name: </i><?php echo$_SESSION['SESS_USERNAME']?><br></br>                
                <i>Gender: </i><?php echo$_SESSION['SESS_GENDER']?><br></br>
                <i>E-mail: </i><?php echo$_SESSION['SESS_ADDRESS']?><br></br>
                <i>Contact number: </i><?php echo$_SESSION['SESS_CONTACT']?><br></br>                
            </div>

        </div>

        <div class="block2">

            <p id="orders" class = "fancytext" style="font-size:25px"><i><b> Previous Orders </b></i></p>

            <div class="blocks2">
                <img class="kittens" src="res/kitten1.jpg">
                <div class="kitteninfo">
                <span class="fancytext"><i>Breed:</i><b> Crossbreed</b></span><br></br>
                <span class="fancytext"><i>Age:</i> <b> 3 months</b></span><br></br> 
                <span class="fancytext"><i>Price:</i><b> $2 Million </b></span> <br></br>
                </div>
             </div>

             <div class="blocks2">
                <img class="kittens" src="res/kitten2.jpg">
                <div class="kitteninfo">
                <span class="fancytext"><i>Breed:</i><b> Persian</b></span><br></br>
                <span class="fancytext"><i>Age:</i> <b> 2 Years</b></span><br></br> 
                <span class="fancytext"><i>Price:</i><b> $10 000</b></span> <br></br>
                </div>
             </div>
            
            <div class="blocks2">
                <img class="kittens" src="res/kitten3.jpg">
                <div class="kitteninfo">
                <span class="fancytext"><i>Breed:</i><b> Siamese</b></span><br></br>
                <span class="fancytext"><i>Age:</i> <b> 5 months</b></span><br></br> 
                <span class="fancytext"><i>Price:</i><b> $1 972</b></span> <br></br>
                </div>
            </div>
    
        </div>

        </div> 
        </body>
         <?php
        include 'footer.php';
        ?> 
</html>