

<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php $args = array('post_type' => 'card', 'posts_per_page' => 10);
                         $loop = new WP_Query($args);
                        while ($loop->have_posts()): $loop->the_post();
    ?>

						<div class="col-lg-3">
							<div class="box">
								<div class="box-gray aligncenter">
									<h4><?php the_title();?></h4>
									<div class="icon">
									<i class="<?php echo get_post_meta($post->ID, "card_icon_name", true); ?>"></i>

									</div>
									<p>
									<?php the_excerpt();?>
									</p>

								</div>
								<div class="box-bottom">
									<a href="#">Learn more</a>
								</div>
							</div>
						</div>
						<?php endwhile;
						wp_reset_postdata();?>

				</div>
			</div>
		</div>


