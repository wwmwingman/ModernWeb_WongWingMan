<?php
 include('connect.php');
 $db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database. 
 
  $select=mysql_query("SELECT * FROM enquiry order by id desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  $id=$userrow['id'];
  $name=$userrow['name'];
  $enquiry=$userrow['enquiry'];
  $date=$userrow['date']
?>


<ul data-role="listview" data-inset="true">
    <li data-role="list-divider"><p> Post on: <span><?php echo $date; ?></span>
  </p></li>
    <li>
    <p> Name: <span><?php echo $name; ?></span></p>
    <p> Enquiry: <span><?php echo $enquiry; ?></span></p>
 
 
<div data-role="controlgroup" data-type="horizontal">
      <a href="enquiry_edit.php?id=<?php echo $id; ?>" class="ui-btn ui-btn-inline ui-mini">Edit</a>
      <a href="enquiry_delete.php?id=<?php echo $id; ?>"  class="ui-btn ui-btn-inline ui-mini">Delete</a>
    </div> 
  </li>
</ul>


<?php } ?>
