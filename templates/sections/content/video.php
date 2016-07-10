<?php
	$title = get_sub_field('title');
	$video = get_sub_field('video');
?>

<!-- video -->
<?php if ($video): ?>
	<section id="video" class="video-section section-gray section">
		<div class="container">
			<?php if ($title): ?>
				<h2 class="section-heading text-center"><?php echo $title; ?></h2>
			<?php endif; ?> 
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="video-embed embed-responsive embed-responsive-16by9">
						<iframe class="video-async embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>	
<?php endif; ?> 		