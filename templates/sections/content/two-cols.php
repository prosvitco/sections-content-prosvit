<?php
	$title = get_sub_field('title');
	$description = get_sub_field('description');
    $image = get_sub_field('image');
    $animation_left = get_sub_field('animation_left');
	$animation_right = get_sub_field('animation_right');
?>

    <!-- two-cols -->

<section id="two-cols-description" class="two-cols-description-section section-accent section">
    <div class="container-fluid two-cols-description-row">

        <div class="two-cols-description-text" data-animation="<?php echo $animation_left; ?>">
            <div class="two-cols-description-text-inner">
                <?php if ($title): ?>
                    <h2 class="section-heading text-left"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if ($description): ?>
                    <?php echo $description; ?>
                <?php endif; ?>                
            </div>
        </div>
    <?php if ($image): ?>
        <div class="two-cols-description-image" data-animation="<?php echo $animation_right; ?>">
            <?php 
                //$image = get_field('artist_feature_image');
                $size = '4x3'; // (thumbnail, medium, large, full or custom size)
                echo wp_get_attachment_image( $image, $size );
            ?>
        </div>
    <?php endif; ?>        

    </div>
</section>