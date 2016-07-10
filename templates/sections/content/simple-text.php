<?php
$text = get_sub_field('text');
$bg_color = get_sub_field('background_color');
?>

<?php
	if ($bg_color == 'none') { 
	  $bg = "";

	} elseif ($bg_color == 'primary'){ 
	  $bg = "bg-primary";

	} elseif ($bg_color == 'success'){ 
	  $bg = "bg-success";

	} elseif ($bg_color == 'warning'){ 
	  $bg = "bg-warning";
	} elseif ($bg_color == 'grey'){ 
	  $bg = "section-grey";
	}

?>

<?php if( !empty($text) ): ?>
    <!-- simple-text -->

	<section class="headline-section <?php echo $bg ?> section">
	    <div class="container">
	        <div class="row">
	            <div class="headline-col">
	                <?php echo $text; ?>
	            </div>
	        </div>
	    </div>
	</section>
<?php endif; ?>	