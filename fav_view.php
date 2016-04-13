<?php
 include('connect.php');
 $db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database. 
 
  $select=mysql_query("SELECT * FROM hiv_test order by id desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  $id=$userrow['id'];
  $item=$userrow['item'];
  $code=$userrow['code'];
  $price=$userrow['price'];
  $sypnosis=$userrow['sypnosis'];
  $windowperiod=$userrow['windowperiod'];
  $turnaround=$userrow['turnaround']
?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<ul data-role="listview" data-inset="true">
   
    <li>
    <p> <b>Test Item: </b><span><?php echo $item; ?></span></p>
    <p> <b>Product Code: </b><span><?php echo $code; ?></span></p>
    <p> <b>Product Price: </b><span><?php echo $price; ?></span></p>
    <p> <b>Sypnosis: </b><span><?php echo $sypnosis; ?></span></p>
    <p> <b>Window Period: </b><span><?php echo $windowperiod; ?></span></p>
    <p> <b>Turnaround time: </b><span><?php echo $turnaround; ?></span></p>   
 
 
<div data-role="controlgroup" data-type="horizontal">
      <a href="fav_edit.php?id=<?php echo $id; ?>" class="ui-btn ui-btn-inline ui-mini">Add</a>
      <a href="fav_delete.php?id=<?php echo $id; ?>"  class="ui-btn ui-btn-inline ui-mini">Delete</a>
    </div> 
  </li>
</ul>


<?php } ?>
