<?php
/*Template Name:Contact
 */
get_header();
?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		<iframe src="<?php echo get_theme_mod('map-setting'); ?>">
		</iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Get in touch with us by filling <strong>contact form below</strong></h4>
                        <?php
if (have_posts()): while (have_posts()): the_post();?>
				                <p>
								<?php the_content();?>
								</p>
								<?php
    endwhile;
endif;
wp_reset_postdata();

?>
			</div>
		</div>
	</div>
	</section>
	<?php get_footer();?>