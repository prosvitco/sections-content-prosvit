<?php
	$content_portfolio_title = get_sub_field('content_portfolio_title');
	$content_portfolio_animation = get_sub_field('content_portfolio_animation');
?>

<!-- portfolio -->		

<section id="portfolio" class="portfolio-section section">
	<div class="container-fluid">
      <?php if( !empty($content_portfolio_title) ): ?>
        <h2 class="section-heading text-center"><?php echo $content_portfolio_title; ?></h2>
      <?php endif; ?>	
		<div class="portfolio-row row">
      <?php if( have_rows('content_portfolio_list') ): $i=0;?>
        <?php while ( have_rows('content_portfolio_list') ) : the_row(); ?>
          <?php $i++;
          $content_portfolio_list_image = get_sub_field('content_portfolio_list_image');
          $content_portfolio_list_title = get_sub_field('content_portfolio_list_title');
          $content_portfolio_list_text = get_sub_field('content_portfolio_list_text');
          ?>     
					<div class="col-sm-6 col-md-3" data-animation="<?php echo $content_portfolio_animation; ?>">
						<div class="portfolio-item">
							<img class="portfolio-item-picture" src="<?php echo $content_portfolio_list_image; ?>" alt="">
							<div class="portfolio-item-overlay"></div>
							<div class="portfolio-item-text">
      <?php if( !empty($content_portfolio_list_title) ): ?>
        <h4 class="portfolio-item-title"><?php echo $content_portfolio_list_title; ?></h4>
      <?php endif; ?>	
      <?php if( !empty($content_portfolio_list_text) ): ?>
        <p class="portfolio-item-description"><?php echo $content_portfolio_list_text; ?></p>
      <?php endif; ?>																
							</div>
						</div>
					</div>
       <?php endwhile; ?>
     <?php endif; ?> 	
		</div>
	</div>
</section>