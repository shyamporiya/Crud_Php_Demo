<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "data_structure";
// Create connection

$conn = mysqli_connect($servername,$username,$password,$database);

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

  $target_dir = "uploads/"; // Directory where you want to store uploaded images
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  // Move the uploaded file to the specified directory
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$sql = "INSERT INTO `sign_ups`(`fname`, `lname`,`email`,`mobile`,`password`,`image`)
                      VALUES ('".$f_name."','".$l_name."','".$email."','".$mobile."',
                                '".$password."','".$target_file."') ";
            // echo $sql;die;//print_r($sql);
$result = mysqli_query($conn,$sql);
  //  print_r($result);
if($result){
         echo "success";
        header("Location:create_account.php"); 
    }


?>