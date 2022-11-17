<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Slider -->
         <div id="main-slider" class="flexslider">
            <ul class="slides">

<?php $args = array('post_type' => 'slider', 'posts_per_page' => 10);
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();
    ?>	  <li>
					<?php the_post_thumbnail();?>
		                <div class="flex-caption">
		                    <h3><?php the_title();?></h3>
							<p><?php the_excerpt();?></p>
							<a href="<?php the_permalink();?>" class="btn btn-theme">Learn More</a>
		                </div>
		              </li>
					<?php endwhile;
                    wp_reset_postdata();
                    ?>
                    
			</div>
		</div>
	</div>
