<?php


if($image_name){
    
 $image="/Category-Image"."/".$image_name;
}?>
<div class='loader'> <div class="loader-inner"></div> </div>
<legend><?php echo $category_result['Category']['name'];?></legend>
<div>
<?php
if(isset($image)){?>
<div class="item-pic">
 
<?php echo $this->Html->image($image);?>

</div>
<?php }else{?>
<!--<div class="item-pic">
-->       <h2 class="instruction-title">3 simple steps to choose your favourite food... </h2><br>
	    <ul class="instructions">
		  <li>Choose related category and food item from left menu..</li>
		  <li>When you select food item of preference, you can add or remove ingredients and order exactly what you want..</li>
		  <li>Click on Add button to add your favourite food item in your order cart..</li>
		 
	     </ul>
<!--</div>-->


<?php }
?>
 
</div>