<?php
// print_r($_POST);die;
$servername = "localhost";
$username = "root";
$password = "";
$database = "data_structure";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$database);
$searchText = $_POST['search_data'];
$sql = "SELECT * FROM `sign_ups` WHERE `fname` LIKE '%".$searchText."%' OR 
                    `lname` LIKE '%".$searchText."%' OR `email` LIKE '%".$searchText."%' ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) == 0){
       echo "<tr><td colspan=6>No data available for that name specified</td></tr>";
    } else {
$output = "";
while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
                <td>".$row['id']."</td>
                <td>".$row['fname']."</td>
                <td>".$row['lname']."</td>
                <td>".$row['email']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['date_time']."</td>
                </tr>";
}

echo $output;
}




?>