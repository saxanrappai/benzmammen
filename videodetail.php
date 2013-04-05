<?php 
$menu='video';

require_once('header.php');
require_once('videolist.php'); 

$id = intval($_GET['id']);


if($id>200){
	$var='h';
}
else if($id>100){
	$var='c';
	
}
else{
	
	$var='s';
	
}


?>




<div class="contentareatop">

<div class="contenttop">



<div class="box5">
<div class="width100" align="center"><h1><?php print $videos[$var][$id]['title'];?></h1></div>

<div class="width100 margintop20" align="center">
<iframe width="640" height="390" src="http://www.youtube.com/embed/<?php print $videos[$var][$id]['id'];?>" frameborder="0" allowfullscreen></iframe>
</div>

<div class="width100 margintop20"><a href="videos.php" class="commonlink" style="float:right;"> Back to Videos</a></div>
</div>


<div class="width100">
<div class="width100 margintop20"><h2>Suggested Videos</h2></div>
<div class="width100 margintop10">
	
	
	
	<?php 
	$c=0;	
	foreach($videos[$var] as $i=>$s){
		$c++;
		if($c>4)
		break;
	?>







<div class="box6">
<div class="width100 margintop10"><a href="videodetail.php?id=<?php print $i;?>"><img src="http://i4.ytimg.com/vi/<?php print $s['id'];?>/mqdefault.jpg" style='width:210px;height:128px;'  alt=""/></a></div>
<div class="title"><?php print $s['title'];?></div>
<div class="time">Duration : <?php print $s['time'];?></div>
</div> 


<?php 
}
?>




  

</div>
 </div>

<div class="clear"></div>
</div>

<div class="clear"></div>
</div>

<!--/contenttop-->



<?php 
require_once('footer.php');
?>

