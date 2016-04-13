<?php 
ob_start();
include('connect.php');


$db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database.

if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $ename=$_POST['ename'];
  $eenquiry=$_POST['eenquiry'];
  $updated=mysql_query("UPDATE enquiry SET 
		name='$ename', enquiry='$eenquiry' WHERE id='$id'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:enquiry_index.php');
  }
}
}
ob_end_flush();
?>
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
<div data-role="page" id="equiry_edit" data-add-back-btn="true">


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
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM enquiry WHERE id='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
    $name=$profile['name'];
    $enquiry=$profile['enquiry'];
?>

<center><h2>Edit enquiry</h2></center>
<div class="display">
  <form action="" method="post" name="insertform">
    <p>
      <label for="name"  id="preinput"> Name : </label>
      <input type="text" name="ename" required placeholder="Enter your name" 
      value="<?php echo $name; ?>" id="inputid" />
    </p>
    <p>
      <label  for="enquiry"  id="preinput"> Enquiry : </label>
      <input type="text" name="eenquiry" required placeholder="Enter your Enquiry" 
      value="<?php echo $enquiry; ?>" id="inputid" />
    </p>
    <p>
<center><input type="submit" name="update" value="Update" data-inline="true" id="inputid" /></center>
    </p>
  </form>
</div>
<?php } } ?>
</body>
</html>