<?php
	$content_about_title = get_sub_field('content_about_title');
	$content_about_description = get_sub_field('content_about_description');
  	$content_about_image = get_sub_field('content_about_image');
	$content_about_animation = get_sub_field('content_about_animation');
?>

    <!-- about -->

<section id="about" class="about-section section">
	<div class="container">
				<?php if( !empty($content_about_title) ): ?>
					<h2 class="section-heading text-center"><?php echo $content_about_title; ?></h2>
				<?php endif; ?>		
		<div class="about-row row">
			<div class="about-image col-md-6" data-animation="<?php echo $content_about_animation; ?>">
				<?php if( !empty($content_about_image) ): ?>
					<img src="<?php echo $content_about_image['url']; ?>" alt="<?php echo $content_about_image['alt']; ?>" />
					<?php 
						//$image = get_field('artist_feature_image');
						$size = 'large'; // (thumbnail, medium, large, full or custom size)
						echo wp_get_attachment_image( $content_about_image, $size );
					?>
				<?php endif; ?>			
			</div>
			<div class="about-text col-md-6">
				<?php if( !empty($content_about_description) ): ?>
					<?php echo $content_about_description; ?>
				<?php endif; ?>				
			</div>
		</div>
	</div>
</section>