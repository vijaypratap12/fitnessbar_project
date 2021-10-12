<? php
    
session_start();
$connect = mysqli_connect('localhost','root');

if($connect){

         echo "successfull";
    
}
else

{
   echo "login failed";
}

mysqli_select_db($connect,'registrationfitnessbar');

$name = $_POST['username'];
$password=$_POST['password'];

$select = "select * from signin where name = '$name' && password = '$password'";

$result = mysqli_query($connect, $select);
$num = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);


if($num==1){
    
    header('location: dashboard.php');
}
else {
    header('location: sign up_login.php');
}


?>