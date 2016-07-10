<?php
	$content_carts_title = get_sub_field('content_carts_title');
?>

    <!-- carts -->

<section id="carts" class="benefits-section section-gray section">
	<div class="container">
      <?php if( !empty($content_carts_title) ): ?>
        <h2 class="section-heading text-center"><?php echo $content_carts_title; ?></h2>
      <?php endif; ?>	
		<div class="benefits-row row">
      <?php if( have_rows('content_carts_list') ): $i=0;?>
        <?php while ( have_rows('content_carts_list') ) : the_row(); ?>
          <?php $i++;
          $content_carts_list_title = get_sub_field('content_carts_list_title');
          $content_carts_list_text = get_sub_field('content_carts_list_text');
          $content_carts_list_icon = get_sub_field('content_carts_list_icon');
          $content_carts_list_animation = get_sub_field('content_carts_list_animation');
          ?>     
					<!-- cart <?php echo $i; ?> -->
					<div class="col-sm-6 col-md-4">
						<div class="benefit">
      <?php if( !empty($content_carts_list_icon) ): ?>
	             <span class="benefit-icon fa <?php echo $content_carts_list_icon; ?>" data-animation="<?php echo $content_carts_list_animation; ?>"></span>	
      <?php endif; ?>
      <?php if( !empty($content_carts_list_title) ): ?>
	             <h4 class="benefit-title"><?php echo $content_carts_list_title; ?></h4>	
      <?php endif; ?>					
      <?php if( !empty($content_carts_list_text) ): ?>
	            	<p class="benefit-description"><?php echo $content_carts_list_text; ?></p>
      <?php endif; ?>								
						</div>
					</div>
       <?php endwhile; ?>
     <?php endif; ?> 	
		</div>
	</div>
</section>