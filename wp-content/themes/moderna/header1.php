<?php
/*Template Name:Potfolio
 */
?>


<?php get_header();
?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Portfolio</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all"><a href="?work_cat=all">All</a></li>

						  <?php
$taxonomies = get_terms(array(
    'taxonomy' => 'worktag',
    'hide_empty' => true,
));
foreach ($taxonomies as $taxonomy) {
    ?>
								<li class="<?php echo $taxonomy->slug ?>"><a href="?work_cat=<?php echo $taxonomy->slug ?>" title><?php echo $taxonomy->name; ?></a></li>
								 <?php
}
?>

				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio" style="height:450px;">
					   <?php
$work_tag = $_GET['work_cat'];

if ($work_tag == 'all' || empty($work_tag)) {

    $work_tag = array();
    foreach ($taxonomies as $taxonomy) {

        $work_tag[] = $taxonomy->slug;

    }

}

$args = array('post_type' => 'work',
    'posts_per_page' => 10,
    'tax_query' => array(array(
        'taxonomy' => 'worktag',
        'field' => 'slug',
        'terms' => $work_tag,
    )),
);

$work_obj = new WP_Query($args);

while ($work_obj->have_posts()): $work_obj->the_post();

    ?>
							<!-- Item Project and Filter Name -->
						    <li class="item-thumbs col-lg-3 design" data-id="<?php the_id();?>"  data-type="<?php echo $work_tag; ?>">
							<!-- Fancybox - Gallery Enabled - Title - Full Image -->
							<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php the_title();?>" href="<?php echo get_the_post_thumbnail_url(); ?>">
							<span class="overlay-img"></span>
							<span class="overlay-img-thumb font-icon-plus"></span>
							</a>
							<!-- Thumb Image and Description -->
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_content();?>">
							</li>
							<!-- End Item Project -->

							<!-- End Item Project -->

					          <?php

endwhile;
wp_reset_postdata();?>
					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php get_footer();?>
