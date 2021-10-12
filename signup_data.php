<html>
    <head>

<title>
    
    </title>
    </head>

<body>


<?php

session_start();
$conn=mysqli_connect('localhost', 'root');
if($conn){
    ?>
    <script>
    alert("Registered Successfully");
    </script>
    <?php
}
else
    echo "Something is wrong!!!";

mysqli_select_db($conn,'registrationfitnessbar');

$name= $_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$insert=  "insert into signin(name, email,password, password2) values('$name','$email','$password','$password2')";
mysqli_query($conn,$insert);
?>

    <p><a href="sign up_login.html">click here</a> to login</p>

</body>
</html>
