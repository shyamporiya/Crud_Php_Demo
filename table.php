<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
img{
    width: 90px;
    height: 70px;
}
</style>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "data_structure";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM sign_ups ORDER BY `sign_ups`.`id` DESC";
//$result = $conn->query($sql);
$result = mysqli_query($conn,$sql);
  // output data of each row

?>
  <a href="create_account.php" target="_blank" style="border: 2px solid red;">Form</a>
  <a href="table.php">Table</a>

<h2>Data</h2>
<div class="row">
<div class="m-b-5">
  <input type="text" class="" id="search" />
  <label>Search Data</label>
</div>
</div>
<table style="width:100%">
  <tr>
    <th>Index</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Image</th>
    <th>Status</th>
    <th>Date Time</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  
  <tbody id="table_body">
  <?php 
  $i = 1;
  while($row = mysqli_fetch_array($result)){
    echo "<pre>";print_r($row);die;
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row['fname']."</td>";
    echo "<td>".$row['lname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['mobile']."</td>";
    if($row['image']){
      echo "<td><img src=".$row['image']."></td>";
    }else{
      echo "<td><img src=uploads/avtar.png></td>";
      
    }
    echo "<td>".$row['status']."</td>";
    echo "<td>".$row['date_time']."</td>";
    echo "<td><button class='btn-xs btn-danger edit-btn' update-id=".$row['id'].">Edit</button></td>";
    echo "<td><a class='delete-btn' delete-id=".$row['id'].">Delete</a></td>";
    echo "</tr>";
    $i++;
  }
  $conn->close();
  ?>
  </tr>
</tbody>
</table>



</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    // console.log("woo hoo");
    
  })
  $("#search").on("keyup",function(){
    var search_id = $(this).val();
    console.log("test done",search_id); 
$.ajax({
  url:"search.php",
  type:"POST",
  data:{search_data:search_id},
  success:function(response){
  console.warn("Text is : " + response);
  $("#table_body").html(response);
  }
      });
  });

  $('.edit-btn').click(function(){
    var edit_id = $(this).attr('update-id');
    console.log('edit click'+ edit_id);
    $.ajax({
      url:"getdata.php",
      type:"POST",
      data:{editId:edit_id},
      dataType:"JSON",
      success:function(resp){
        console.log('update id',resp);
        console.log(resp.id);
        console.log(resp.fname);
      }
    });
  });
</script>

