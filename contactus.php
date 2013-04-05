<?php 
$menu='contact';

require_once('header.php');




if(!empty($_POST['name']) && ($_POST['name']!='')){
 
$to      = 'benzmammen@gmail.com';
$subject = 'contact us form: benzmammen.com';
$message = "

Name: ".$_POST['name']." .<br/>
Mobile: ".$_POST['mobile']." .<br/>
Email: ".$_POST['email']." .<br/>
Message: ".$_POST['mesg']." .<br/>




";
$headers = '




From: admin@benzmammen.com' . "\r\n" .
    'Reply-To: admin@benzmammen.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
if(trim($_POST['mesg'])!=''){
mail($to, $subject, $message, $headers);
} 
} 
?>


<div class="contentareatop">

<div class="contenttop">

<div class="box1">
<div class="width100"><h1>Contact Me</h1>


<div class="width100">
<div class="nameandaddress">
<form action='' method='post'>
<table width="450" border="0" cellspacing="0" cellpadding="0">

  
  <tr>
    <td colspan="3"><h2></h2></td>
    </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td>Name: </td>
    <td>&nbsp;</td>
    <td>
      <input type="text" name="name" class="maininput2" id="name" />
   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Contact No:	</td>
    <td>&nbsp;</td>
    <td><input type="text" name="mobile" class="maininput2" id="mobile" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>E-mail :</td>
    <td>&nbsp;</td>
    <td><input type="text" name="email" class="maininput2" id="email" /></td>
  </tr>
  
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
    <td>Message:	</td>
    <td>&nbsp;</td>
    <td><textarea name="mesg" id="mesg" cols="" rows="" class="maininput6"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    

    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="" type="submit" value="Submit" class="submit"/>
    <input name="" type="reset" value="Reset" class="reset" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>

<div class="clear"></div>
</div>
</div>

</div>
</div>


<div class="box2">

<div class="width100"><h1>Address</h1></div>

<div class="width100 margintop10"><p>Jesus Lives Church<br />
Embassy Building <br />
MitchelL Jn (South).<br />
Mavelikara - 690101<br />
PH: +91-94952 42041<br />
EMAIL: benzmammen@gmail.com</p></div>



<div class="width100 margintop10"><iframe width="365" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?q=Mavelikara&amp;aq=f&amp;ie=UTF8&amp;hl=en&amp;hq=&amp;hnear=Mavelikkara,+Alappuzha,+Kerala&amp;t=m&amp;ll=9.244618,76.526299&amp;spn=0.05083,0.062485&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?q=Mavelikara&amp;aq=f&amp;ie=UTF8&amp;hl=en&amp;hq=&amp;hnear=Mavelikkara,+Alappuzha,+Kerala&amp;t=m&amp;ll=9.244618,76.526299&amp;spn=0.05083,0.062485&amp;z=13&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>


</div>

<div class="clear"></div>
</div>

<div class="clear"></div>
</div>

<!--/contenttop-->




<?php 
require_once('footer.php');
?>

