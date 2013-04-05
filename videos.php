<?php 
$menu='video';

require_once('header.php');
require_once('videolist.php'); 

?>




<div class="contentareatop">

<div class="contenttop">

<div class="box5">
<div class="width100"><h1>Videos</h1>












<div class="width100 borderbtm">
<div class="width100 margintop20"><h2>Casting Out Demons</h2></div> 
<div class="width100 margintop10"> 
	<?php  
if(!empty($videos['c']))
foreach($videos['c'] as $i=>$s){
?>
<div class="box6">
<div class="width100 margintop10"><a href="videodetail.php?id=<?php print $i;?>"><img src="http://i4.ytimg.com/vi/<?php print $s['id'];?>/mqdefault.jpg" style='width:210px;height:128px;'  alt=""/></a></div>
<div class="title"><?php print $s['title'];?></div>
<div class="time">Duration : <?php print $s['time'];?></div>
</div> 
<?php } ?> 
</div>
 </div>
 

<div class="width100 borderbtm">
<div class="width100 margintop20"><h2>Healing And Testimonies</h2></div> 
<div class="width100 margintop10"> 
	<?php  
if(!empty($videos['h']))
foreach($videos['h'] as $i=>$s){
?>
<div class="box6">
<div class="width100 margintop10"><a href="videodetail.php?id=<?php print $i;?>"><img src="http://i4.ytimg.com/vi/<?php print $s['id'];?>/mqdefault.jpg" style='width:210px;height:128px;'  alt=""/></a></div>
<div class="title"><?php print $s['title'];?></div>
<div class="time">Duration : <?php print $s['time'];?></div>
</div> 
<?php } ?> 
</div>
 </div>
 



<div class="width100 borderbtm">
<div class="width100 margintop20"><h2>Malayalam Sermons</h2></div> 
<div class="width100 margintop10"> 
	<?php  
if(!empty($videos['s']))
foreach($videos['s'] as $i=>$s){
?>
<div class="box6">
<div class="width100 margintop10"><a href="videodetail.php?id=<?php print $i;?>"><img src="http://i4.ytimg.com/vi/<?php print $s['id'];?>/mqdefault.jpg" style='width:210px;height:128px;'  alt=""/></a></div>
<div class="title"><?php print $s['title'];?></div>
<div class="time">Duration : <?php print $s['time'];?></div>
</div> 
<?php } ?> 
</div>
 </div>
 
 
 
 
 
 
 
 
 
 
  
  




</div>
</div>




<div class="clear"></div>
</div>

<div class="clear"></div>
</div>

<?php 
require_once('footer.php');
?>

