<?php
include 'head.php';

?>
		<!--------------Left Section--------------------->
    	<div class="mid_left fl">
        <?php
        @$pid=$_GET['pid'];
		if($pid=='page1')
		{
			include 'card1.php';
		}
		else if($pid=='page2')
		{
			include 'card2.php';
		}
		else if($pid=='page3')
		{
			include 'card3.php';
		}
		else if($pid=='page4')
		{
			include 'card4.php';
		}
		else if($pid=='page5')
		{
			include 'card5.php';
		}
		else if($pid=='page6')
		{
			include 'card6.php';
		}
		else
		{
			include 'card1.php';
		}
		
		
		
		?>
        
        </div>
        <!--------------Left Section--------------------->
        <!---------------Right Section-------------------->
        <div class="mid_right fr">
        <img src="image/new_seo2-11-512.png" width="100%">
        
        
        </div>
        <div class="clr"></div>
    	<!---------------Right Section-------------------->
<?php
include 'footer.php';

?>    
    
    