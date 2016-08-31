

    <?php
    session_start();
    include('connection.php');

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    mysql_query("INSERT INTO member(fname, lname, gender, address, contact, username, password)VALUES('$fname','$lname','$gender','$address','$contact','$username', '$password')");
    header("location: regist.php?remarks=success");
    //mysql_close($con);
    ?>