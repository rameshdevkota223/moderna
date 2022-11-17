<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<?php $args = array('post_type' => 'work', 'posts_per_page' => 3);
                        $loop = new WP_Query($args);
                         while ($loop->have_posts()): $loop->the_post();
    ?>
							<li class="col-lg-3 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
							<!-- Fancybox - Gallery Enabled - Title - Full Image -->
							<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php the_title();?>" href="<?php echo get_the_post_thumbnail_url(); ?>">
							<span class="overlay-img"></span>
							<span class="overlay-img-thumb font-icon-plus"></span>
							</a>
							<!-- Thumb Image and Description -->
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_content();?>">
							<?php //the_post_thumbnail();?>

						</div>
							</li>
							<?php endwhile;
                              wp_reset_postdata();?>
						<!-- Item Project and Filter Name -->

					</ul>
					</section>
				</div>
			</div>
		</div>