<?php
 include('connect.php');
 $db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database. 
 
  $select=mysql_query("SELECT * FROM hiv_test WHERE bookmark=1;");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  $id=$userrow['id'];
  $item=$userrow['item'];
  $code=$userrow['code'];
  $price=$userrow['price'];
  $windowperiod=$userrow['windowperiod'];
  $turnaround=$userrow['turnaround'];
?>


<ul data-role="listview" data-inset="true">
    <li data-role="list-divider"><p> Item: <span><?php echo $item; ?></span>
  </p></li>
    <li>
  
    <p> Code: <span><?php echo $code; ?></span></p>
    
    <p> Price: <span><?php echo $price; ?></span></p>
    <p> Window Period: <span><?php echo $windowperiod; ?></span></p>
    <p> Turnaround Time: <span><?php echo $turnaround; ?></span></p>
 
 
 
<div data-role="controlgroup" data-type="horizontal">
      <a href="fav_edit.php?id=<?php echo $id; ?>" class="ui-btn ui-btn-inline ui-mini">Add</a>
      <a href="fav_delete.php?id=<?php echo $id; ?>"  class="ui-btn ui-btn-inline ui-mini">Delete</a>
    </div> 
  </li>
</ul>


<?php } ?>
