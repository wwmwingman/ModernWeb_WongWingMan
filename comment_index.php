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
      <li><a href="enquiry_index.php">Enquiry</a></li>
    </ul>
  </div>
</div>
<center><h2>Comment</h2></center>


<?php include('comment_view.php'); ?>

<br>
<center><h2>Comment box</h2></center>
<div class="display">
<form action="comment_insert.php" method="post" name="insertform">
<p>
  <label for="name" id="preinput"> Name : </label>
  <input type="text" name="name" required placeholder="Enter your name" id="inputid"/>
</p>
<p>
  <label  for="comment" id="preinput"> Comment : </label>
  <input type="text" name="comment" required placeholder="Enter your comment" id="inputid" />
</p>
<p>
<center><input type="submit" name="send" data-inline="true" value="Submit" id="inputid"  /></center>
</p>
</form>
</div>


	<div data-role="footer">
   		<h4>© 2016 by Wong Wing Man</h4>
	</div>
</body>
</html>