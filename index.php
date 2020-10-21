
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
<body class="main" style="background-image: url('img.jpg')";> 
<div class="container">
 <center> <h2>Application Form</h2>
  <br>
  <form action="add.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label><b>User Name:</b>
      <input type="text" class="form-control"  placeholder="Enter User Name" name="user_name" required></label>
    </div>
    <div class="form-group">
      <label><b>Mobile Number:</b>
      <input type="text" class="form-control"  placeholder="Enter Mobile Number" name="mobile_number"  required></label>
    </div>
    <div class="form-group">
      <label><b>Image/Video:</b>
      <input type="file" class="form-control"  placeholder="Select Your File/Video" name="image" required onchange="clickMe(this.value)"></label>
    </div>
    <div class="form-group">
      <label style="width: 250px">
      <input type="text" class="form-control" name="videoUrl" id="videoUrl" value=""></label>
    </div>
   <!--  <div class="form-group">
      <label>Video:</label>
      <input type="file" class="form-control"  placeholder="Select Your Video" name="video">
    </div> -->
    
    <input class="btn btn-danger" type="submit" name="submit" value="Save">
    

  </form>
</div>
</body>
</html>
<script>
	function clickMe(val)
  {
    //here split the extension of file which is uploaded.
    var ext = val.split(".");
		 
    if(ext[1] == "mp4" || ext[1] == "wmv"){
      $('#videoUrl').val(val);
      $("#videoUrl").show();
    }
	}
	$(document).ready(function () {	 
    $("#videoUrl").hide();
	}); 
 </script> 
