<?php
	$content_how_it_works_title = get_sub_field('content_how_it_works_title');
?>

<!-- portfolio -->		
<section id="how-it-works" class="how-it-works-section section">
	<div class="container-fluid">
      	
      	<?php if( !empty($content_how_it_works_title) ): ?>
	    <h2 class="section-heading text-center"><?php echo $content_how_it_works_title; ?></h2>
      	<?php endif; ?>		
		
		<div class="hiw-row row">
		<?php if( have_rows('content_how_it_works_list') ): $i=0;?>
		  	<?php while ( have_rows('content_how_it_works_list') ) : the_row(); ?>
		    	<?php 
			    	$i++;
				    $content_how_it_works_list_image = get_sub_field('content_how_it_works_list_image');
				    $content_how_it_works_list_title = get_sub_field('content_how_it_works_list_title');
				    $content_how_it_works_list_text = get_sub_field('content_how_it_works_list_text', false, false);
				    $content_how_it_works_animation = get_sub_field('content_how_it_works_animation');
				?>     
				<div class="hiw-col hiw-col-<?php echo $i; ?>" data-animation="<?php echo $content_how_it_works_animation; ?>">
					<div class="hiw-item">
				     	<?php if( !empty($content_how_it_works_list_image) ): ?>
					     	<?php
								$size = 'large';
								echo wp_get_attachment_image( $content_how_it_works_list_image, $size, false, array( 'class' => 'hiw-item-picture' ) );
					     	?>
				      	<?php endif; ?>														
						
						<div class="hiw-item-text">
							<span class="hiw-item-icon"><?php echo $i; ?></span>
						    <?php if( !empty($content_how_it_works_list_title) ): ?>
							    <h4 class="hiw-item-title"><?php echo $content_how_it_works_list_title; ?></h4>
						    <?php endif; ?>					
				      		<?php if( !empty($content_how_it_works_list_text) ): ?>
					        <p class="hiw-item-description"><?php echo $content_how_it_works_list_text; ?></p>
				      		<?php endif; ?>																	
						</div>
					</div>
				</div>
		   <?php endwhile; ?>
		<?php endif; ?> 	
		</div>
	</div>
</section>