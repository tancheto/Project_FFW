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

        <a href="cart.php"><img class="cart" src="res/cart.png"></a>        

       <?php

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

<?php
$page_title="Cart";
?>



<div class="title"><h1><u>Cats in Carts</u></h1></div>

<?php                

include'db_connect.php';

$action = isset($_GET['action']) ? $_GET['action'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
 
if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> was removed from your cart!";
    echo "</div>";
}
        if(isset($saved_cart_items)==0){echo "<div class='info'>";
        echo "<strong>No products found</strong> in your cart!";
    echo "</div>";}
        else{$cookie = $_COOKIE["cart_items_cookie"];
        $cookie = stripslashes($cookie);
        $saved_cart_items = json_decode($cookie, true);
        $cart_count=count($saved_cart_items);
 
if(count($saved_cart_items)>0){
    // get the product ids
    $ids = "";
    foreach($saved_cart_items as $id=>$name){
        $ids = $ids . $id . ",";
    }
 
    // remove the last comma
    $ids = rtrim($ids, ',');
 
    //start table
    echo "<table class='table_cats'>";
 
        // our table heading
        echo "<tr>";
            echo "<th class='textAlignLeft'>Product Name</th>";
            echo "<th>Price (USD)</th>";
            echo "<th>Action</th>";
        echo "</tr>";
 
        $query = "SELECT id, name, price FROM products WHERE id IN ({$ids}) ORDER BY name";
        $stmt = $con->prepare( $query );
        $stmt->execute();
 
        $total_price=0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td>&#36;{$price}</td>";
                echo "<td>";
                    echo "<a href='remove_from_cart.php?id={$id}&name={$name}' class='btn btn-danger'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Remove from cart";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
 
            $total_price+=$price;
        }
 
        echo "<tr>";
                echo "<td><b>Total</b></td>";
                echo "<td>&#36;{$total_price}</td>";
                echo "<td>";
                    echo "<a href='#' class='btn btn-success'>";
                        echo "<span class='glyphicon glyphicon-shopping-cart'></span> Checkout";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
 
    echo "</table>";
}
 
else{
    echo "<div class='info'>";
        echo "<strong>No products found</strong> in your cart!";
    echo "</div>";
}

}

?>

</div>

<?php
include 'footer.php';
?>

</body>
</html>
