<?php get_header();

?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
		  <div class="col-lg-8">
			<?php
if (have_posts()): while (have_posts()): the_post();?>

		<article>
		<div class="post-image">
		<div class="post-heading">
		<h3><a href="#"><?php the_title();?></a></h3>
		</div>
		<?php the_post_thumbnail();?>
		</div>
		<p>
		<?php the_content();?>
		</p>
		<div class="bottom-article">
		<ul class="meta-post">
		<li><i class="icon-calendar"></i><a href="#"><?php the_time('F j, Y');?></a></li>
		<li><i class="icon-user"></i><a href="#"><?php echo get_the_author(); ?></a></li>
		<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
		<li><i class="icon-comments"></i><a href="#"><?php echo get_comments_number($post->ID); ?> Comments</a></li>
		</ul>																										<a href="<?php echo get_permalink(); ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
		</div>
		<?php
    endwhile;
    wp_reset_postdata();
endif;

?>
				</article>
				<div id="pagination">
				<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
));
?>
				</div>
			</div>			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
		<form role="search" method="get" class="search-form form-search" action="<?php bloginfo('url');?>">
                        <input type="search" class="search-field form-control" placeholder="Search.." value name="s">
                    </form>

				</div>
	<div class="widget">
		<h5>Categories</h5>
		<ul class="cat">
	<?php
wp_list_categories(array(
    'orderby' => 'id',
    'show_count' => true,
    'title_li' => '',
));?>
	 </ul>



				</div>
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">

					   <?php if (have_posts()): while (have_posts()): the_post();?>
			   <li>
<a href="<?php echo the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url() ?>" class="pull-left" alt="" width="80" height="80"/></a>
<h6><a href="<?php echo the_permalink(); ?>"><?php the_title();?></a></h6>
<p>	<?php the_excerpt();?></p>
	</li>
	<?php
    endwhile;
endif;

?>

					</ul>
				</div>
				<div class="widget">
				<?php 
			   if (is_active_sidebar('sidebar-7')) {
		        dynamic_sidebar('sidebar-7');
                }
				?>
               </div>
				</aside>
			</div>
		</div>
	</div>
	</section>
	<?php get_footer();?>