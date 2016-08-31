
<?php
    	//Start session
    	session_start();	
    	//Unset the variables stored in session
    	unset($_SESSION['SESS_MEMBER_ID']);
    	unset($_SESSION['SESS_FIRST_NAME']);
    	unset($_SESSION['SESS_LAST_NAME']);      
      unset($_SESSION['SESS_USERNAME']);
      unset($_SESSION['SESS_PASSWORD']);
      unset($_SESSION['SESS_ADDRESS']);
      unset($_SESSION['SESS_CONTACT']);
      unset($_SESSION['SESS_GENDER']);
    ?>

 <!DOCTYPE html>
<html>
<head>
<title>Sign in form</title>
<meta charset="utf-8" />
  <meta http-equiv="content-language" content="bg" />
  <meta http-equiv="Content-Style-Type" content="text/css"/>
  <link rel="stylesheet" type="text/css" href="style-project.css">
  </head>

  <body>

   <div class="lm">
<img class="logo" src="res/logo.png" alt="LOGO">
<img class="motto" src="res/motto.png" alt="MOTTO">
</div>      
               
   <form name="loginform" action = "login_exec.php" method = "post">
   
   <?php
          if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
          echo '<ul class="err">';
          foreach($_SESSION['ERRMSG_ARR'] as $msg) {
            echo '<li>',$msg,'</li>'; 
            }
          echo '</ul>';
          unset($_SESSION['ERRMSG_ARR']);
          }
        ?>


   <form>You don't have a registration? Click here:
        <div class="form">
        
          <table style="width:75%">
                <tr> 
                    <td><a href="regist.php">Register</a></td>
                </tr>
          </table>

        </div>

   <b>Sign in</b>
   <br><br>
   <label>User name:</label><input type = "text" name = "username" class = "box"/><br /><br />
   <label>Password:</label><input type = "password" name = "password" class = "box" /><br/><br />
   <input type = "submit" value = "Signin"/><br />
   </form>

    </body>
    </html>
    