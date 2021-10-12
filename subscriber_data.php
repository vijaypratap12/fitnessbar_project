 
    <?php
session_start();

$connect = mysqli_connect('localhost','root');



if($connect){
    
    ?>

       <script>

     alert("You have subscribed successfully");
     </script>

     <?php
    
    header('location: index.html');
    
//    echo "Click here to go to home page";
  
} else{
    echo "connection failed";
}

$email = $_POST['email'];

mysqli_select_db($connect, 'fitnessbarsubscriber');

$getemail = "insert into subscriberdata(email) values('$email')";
$result = mysqli_query($connect, $getemail);

if($result) {
    ?>

       <script>

     alert("You have subscribed successfully");
     </script>

     <?php
}




?>
