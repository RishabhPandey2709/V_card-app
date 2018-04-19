<?php 
	include 'head.php';
	if(isset($_POST['show']))
	{
		extract($_POST);
	}
	
?>
<div class="mid_mid fl">
<!-------------------Form Section-------------------->
	<div class="card_form">
    <center>
    <form method="post">
    	<p><input type="text" name="uname" placeholder="Enter Your Name" class="txt" value="<?php echo @$uname;?>"></p>
        <p><input type="text" name="uemail" placeholder="Enter Your Email" class="txt" value="<?php echo @$uemail;?>"></p>
        <p><input type="text" name="umobile" placeholder="Enter Your Mobile" class="txt" value="<?php echo @$umobile;?>"></p>
        <p><input type="text" name="ucity" placeholder="Enter Your City" class="txt"value="<?php echo @$ucity;?>"></p>
        <p>
        <select name="font" class="btn">
        	<option value="12px">Text Size 12px</option>
            <option value="14px">Text Size 14x</option>
            <option value="16px">Text Size 16px</option>
            <option value="18px">Text Size 18px</option>
        </select>
        </p>
        <p>
        <select name="font_style" class="btn">
        	<option>Text Style One</option>
            <option>Text Style Two</option>
            <option>Text Style Three</option>
            <option>Text Style Four</option>
        </select>
        </p>
    	<p><input type="color" name="col_text" class="btn"></p>
        <p><input type="submit" name="show" value="Show Card" class="btn"></p>
        </form>
    </center>    
    </div>
<!-------------------Form Section-------------------->
</div>
<div class="mid_mid fr">
<!-------------------Card Section-------------------->
<style>
p{}

</style>
<div class="card_final <?php echo $_GET['card_color'];?>">
	<p style="color:<?php echo $col_text;?>; font-size:<?php echo @$font;?>;">Name : &nbsp;<?php echo @$uname;?></p>
    <p style="color:<?php echo $col_text;?>">Email : &nbsp;<?php echo @$uemail;?></p>
    <p style="color:<?php echo $col_text;?>">Mobile : &nbsp;<?php echo @$umobile;?></p>
    <p style="color:<?php echo $col_text;?>">City : &nbsp;<?php echo @$ucity;?></p>



</div>


<!-------------------Card Section-------------------->
</div>
<div class="clr"></div>



<?php 
	include 'footer.php'
?>