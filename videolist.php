<?php 
include_once("config.php");
$sql = "SELECT * FROM user";
$query = mysqli_query($conn, $sql);
// $data = $query->fetch_assoc();
// echo "<pre>";
// print_r($data);exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap\css\main.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery-3.5.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="main" style="background-image: url('images/img.jpg')";> 
<div class="container">
  <span class="float-left btn btn-sm btn-primary col-md-1 mt-2"><a href="index.php" style="color: white;"> Add</a></span>
  <center> <h3 class="mt-3">Image/Video List</h3> 
  <br>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Image/Video</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if ($query->num_rows > 0) {
          while($row = $query->fetch_assoc()) { 
    ?>  
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row["user_name"];?></td>
      <td><?php echo $row["mobile_number"];?></td>
      <td><img src="images\<?php echo $row["image"];?>" width="50" height="50"></td>

      <!-- 
        This is for video files 
        <video width="320" height="240" controls>
          <source src="movie.mp4" type="video/mp4">  
        </video> 
      -->
    </tr>
    <?php 
      }
    } else {
       ?>
       <tr><td>No Record Found.</td></tr>
   <?php  }
    ?>
  </tbody>
</table>
</center>
</div>
</body>
</html>
