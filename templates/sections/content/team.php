<?php
	$title = get_sub_field('title');
?>
<?php if( have_rows('list') ): $i=0;?>
    <!-- team -->

	<section id="team" class="team-section section">
		<div class="container-fluid">			
		<?php if ($title): ?>		
			<h2 class="section-heading text-center"><?php echo $title; ?></h2>
		<?php endif; ?> 
			<div class="team-row row">					
	        	<?php while ( have_rows('list') ) : the_row(); ?>

		          	<?php $i++;
			          $list_photo = get_sub_field('list_photo');
			          $list_name = get_sub_field('list_name');
			          $list_position = get_sub_field('list_position');
			          $list_description = get_sub_field('list_description');
			          $list_animation = get_sub_field('list_animation');
		          	?>     

					<div class="col-sm-6 col-md-4 col-lg-2 team-col" 
						<?php if ($list_animation!="none"): ?>						
											data-animation="<?php echo $list_animation; ?>"
						<?php endif; ?> 
					>
						<div class="team-member <?php if($i%2==0) echo 'even'; ?>">
							<?php if( !empty($list_photo) ): ?>
								<img src="<?php echo $list_photo['url']; ?>" alt="<?php echo $list_photo['alt']; ?>" />
							<?php endif; ?>	
							<div class="team-member-text">
							<?php if( !empty($list_name) ): ?>
								<h4 class="team-member-name"><?php echo $list_name; ?></h4>
							<?php endif; ?>			
							<?php if( !empty($list_position) ): ?>
								<div class="team-member-position"><?php echo $list_position; ?></div>
							<?php endif; ?>			
							<?php if( !empty($list_description) ): ?>
								<p class="team-member-description"><?php echo $list_description; ?></p>
							<?php endif; ?>								
							</div>
						</div>
					</div>

	       		<?php endwhile; ?>
			</div>
		</div>
	</section>			
<?php endif; ?> 			