
<?php
        require_once('auth.php');
    ?>
    
<!DOCTYPE html>
<html>
    <head>
    <title>Home Page</title>
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
                   <td> <a href="login.php">Sign out</a></td>
                </tr>
                <tr>
                    <td><a href="regist.php">Register</a></td>
                </tr>
          </table>

        </div>

        <div class="logo">
            <a href="home.php"><img src="res/logo.png" alt="Logo" width="275" height="245"></a>
        </div>

        <div class="biginfo"> 
       
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
            

             <?php
            echo '
            <div class="welcome">
            <b>Welcome, '.$_SESSION['SESS_FIRST_NAME'].'!</b>
            </div>';
            ?>

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
        

<div class="title"><h1><u>Products Available</u></h1></div>

<?php

 include 'db_connect.php';
// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
 
// show messages based on given action
if($action=='added'){
    echo "<div class='alert'>";
        echo "<strong>{$name}</strong> was added to your cart!";
    echo "</div>";
}
 
else if($action=='exists'){
    echo "<div class='alert'>";
        echo "<strong>{$name}</strong> already exists in your cart!";
    echo "</div>";
}
 
// query the products
$query = "SELECT id, name, price, age, weight, descr, link FROM products";
$stmt = $con->prepare( $query );
$stmt->execute();
 
$num = $stmt->rowCount();
 
if($num>0){
    //start table
    echo "<table class='table_cats'>";
 
        // our table heading
        echo "<tr>";
            echo "<th width='200'>Picture</th>";
            echo "<th width='250'>Information about the product</th>";
            echo "<th width='150'>Action</th>";
                       
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row); 
            //creating new table row per record
            echo "<tr>";
                echo "<td><img class='kittenimg'src='{$link}'></td>";
                echo "<td><b>Breed:</b> {$name}<br>
                          <b>Age:</b> {$age}<br>
                          <b>Weight:</b> {$weight}<br>
                          <b>Price (USD):</b></b> &#36;{$price}<br>
                          <b>Description:</b> <br>{$descr}
                          </td>";              
                    echo "<td><a href='add_to_cart.php?id={$id}&name={$name}'>";
                        echo "<button type='button'>Add to Cart</button>";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
        }
 
    echo "</table>";
}
 
// tell the user if there's no products in the database
else{
    echo "No products found.";
}
?>
</div>
<?php
include 'footer.php';
?>
</body>
</html>



    
    
    
            

   