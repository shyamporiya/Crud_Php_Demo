<?php
// echo "<pre>";print_r($_POST);die;

$servername = "localhost";
$username = "root";
$password = "";
$database = "data_structure";
// Create connection

$conn = mysqli_connect($servername,$username,$password,$database);

$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "SELECT * FROM `sign_ups` WHERE `mobile` = '".$_POST['mobile']."' AND `password` = '".$_POST['password']."' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 1){
    if (isset($_POST['remember'])) {
            // Create a secure token (you should generate a unique token)
           

            // Set the token as a cookie with an expiration time (e.g., 30 days)
            setcookie('mobile', $mobile, time() + 86400);
            setcookie('password', $password, time() + 86400);
        }

$name = "SELECT fname FROM  `sign_ups` WHERE `mobile` = ".$mobile." ";
$result1 = mysqli_query($conn,$name);
$name = mysqli_fetch_assoc($result1);
$username = $name['fname'];
// echo "<pre>";print_r($name['fname']);die;


    // echo $name;die;
    // echo "Login Successfully";
    session_start();
    $_SESSION['message'] = "Welcome $username ";
    header("Location:index.php");
}else if(mysqli_num_rows($result) == 0){
    session_start();
    $_SESSION['message'] = 'No User Found';
    header("Location:sign-in.php");
    // echo "No Record Found";
}else{
    echo "Something Went Wrong";
}
// $data = mysqli_fetch_assoc($result);
// // if($data['mobile'] == $_POST['mobile']){}
?>