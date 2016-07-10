<?php
	$title = get_sub_field('content_about_title');
	$description = get_sub_field('content_about_description');
	// $content_about_text = get_sub_field('content_about_text');  // Не потрібне
	$image = get_sub_field('content_about_image'); // всі малюнки як ID щоб можна було задати розмір алт і тд.
?>

<!-- about section -->
<section id="about" class="about-section section">
	<div class="container">

        <?php if ($title): ?>
            <h2 class="section-heading"><?php echo $title; ?></h2>
        <?php endif; ?>
		
		<div class="about-row row">
            
            <?php if ($image): ?>
                <div class="col-about-img" data-animation="fadeIn">
                    <img src="<?php echo $image; ?>" alt="Description Image">
                </div>
            <?php endif; ?>
            

            <?php if ($description): ?>
			<div class="col-about-txt">
				<p class="lead"><?php echo $content_about_description; ?></p>
				<p><?php echo $content_about_text; ?></p>
				<ul class="icon-list">
                    <?php if( have_rows('content_about_list') ): ?>
                        <?php while ( have_rows('content_about_list') ) : the_row(); ?>     
                            <li>
           					    <?php echo  $content_about_list_text = get_sub_field('content_about_list_text'); ?>
                            </li>
                        <?php endwhile; ?>
                   <?php endif; ?> 							
				</ul>
			</div>
            <?php endif; ?>

		</div>
	</div>
</section>