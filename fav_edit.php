<!DOCTYPE>
<html>
<head>

  <title>AIDS Positive</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/themes/wwm.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 

</head>

<body>
<meta content="width=device-width, initial-scale=1" name="viewport">
<div data-role="page" id="home" data-add-back-btn="true">


<div data-role="header">
	<h1>AIDS Positive</h1>
      <a href="#home" data-icon="arrow-l" class="ui-btn-left" >Back</a>
    
</div>

<div data-role="header">
  <div data-role="navbar">
    <ul>
      <li><a href="about.html">About</a></li>
      <li><a href="resources.html">Resources</a></li>
      <li><a href="media.html">Media</a></li>
      <li><a href="enquiry.html">Enquiry</a></li>
    </ul>
  </div>
</div>

<?php
ob_start();
include('connect.php');


$db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database.
 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("UPDATE hiv_test SET bookmark='1' WHERE id='$id'");
	
	if($update)
  {
	  $msg="Successfully add to favourite list!!";
	  echo "alert('$msg');";
	  header('Location:fav_index.php');
  }
  else
  {
	 $errormsg="Something went wrong, Try again";
	  echo "alert('$errormsg');";
	  header('Location:fav_index.php');
  }
  }
?>


<center><h2>Edit Fav List</h2></center>
<div class="display">
  <form action="" method="post" name="insertform">
    <p>
      <label for="item"  id="preinput"> Name : </label>
      <input type="text" name="eitem" required placeholder="Enter your item" 
      value="<?php echo $item; ?>" id="inputid" />
    </p>
    <p>
      <label  for="code"  id="preinput"> Comment : </label>
      <input type="text" name="ecode" required placeholder="Enter your Code" 
      value="<?php echo $code; ?>" id="inputid" />
    </p>
    <p>
<center><input type="submit" name="update" value="Update" data-inline="true" id="inputid" /></center>
    </p>
  </form>
</div>

</body>
</html>