<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION FORM</title>
<meta charset="utf-8" />
  <meta http-equiv="content-language" content="bg" />
  <meta http-equiv="Content-Style-Type" content="text/css"/>
  <link rel="stylesheet" type="text/css" href="style-project.css">


    <script type="text/javascript">
    function validateForm()
    {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var d=document.forms["reg"]["address"].value;
    var g=document.forms["reg"]["username"].value;
    var h=document.forms["reg"]["password"].value;

    if ((a==null || a=="") && (b==null || b=="") && (d==null || d==""))
      {
      alert("All Field must be filled out");
      return false;
      }
    if (a==null || a=="")
      {
      alert("First name must be filled out");
      return false;
      }
    if (b==null || b=="")
      {
      alert("Last name must be filled out");
      return false;
      }    

    if (d==null || d=="")
      {
      alert("E-mail address must be filled out");
      return false;
      }
    
    if (g==null || g=="")
      {
      alert("username must be filled out");
      return false;
      }
    if (h==null || h=="")
      {
      alert("password must be filled out");
      return false;
      }
    }
    </script>

</head>
<body>

<div class="lm">
<img class="logo" src="res/logo.png" alt="LOGO">
<img class="motto" src="res/motto.png" alt="MOTTO">
</div>  

        <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
    <fieldset >

    <?php 
        $remarks = "";
        if ( isset($_GET['remarks']) ) {
        $remarks = $_GET['remarks'];        
        }

        if ($remarks==null || $remarks=="")
        {
        echo '<b>Register Here</b>';

        } 

     if ( $remarks == 'success' ) {
        echo '<b>Registration Success</b>
      <br>
      <div class="form" style="margin-left:-15px;">
        
          <table style="width:75%">
                <tr> 
                    <td><a href="login.php">Sign in</a></td>
                </tr>
          </table>

        </div>';
       
        }        

        ?>
         

       <br><br>
       
      <div>First Name*:</div>
        <input type="text" name="fname" maxlength="30" /><br>
      
        <div ">Last Name*:</div>
        <input type="text" name="lname" maxlength="30"/><br><br>
  
    
        <div>Are you male or female?</div>
        <label>Male</label>
        <input type="radio" name="gender" id="male" value="male"><br>
        <label>Female</label>
        <input type="radio" name="gender" id="female" value="female"><br><br>
      
        <div>Email*:</div>
        <input type="text" name="address" maxlength="30" /><br>
      
        <div>Contact number:</div>
        <input type="text" name="contact" maxlength="15" /><br>
      
        <div>Username*:</div>
        <input type="text" name="username" maxlength="15" /><br>
     
        <div>Password*:</div>
        <input type="password" name="password" maxlength="20"/><br><br>
     
        <div></div>
        <input name="submit" type="submit" value="Submit" /><br>      
    
    </form>
   

</body>
</html>