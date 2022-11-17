<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
				<?php dynamic_sidebar('sidebar-4');?>
					<!-- <h5 class="widgetheading">Get in touch with us</h5>
					<address>
					<strong>Moderna company Inc</strong><br>
					 Modernbuilding suite V124, AB 01<br>
					 Someplace 16425 Earth </address>
					<p>
						<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p> -->
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">

	         <?php 
			   if (is_active_sidebar('sidebar-2')) {
		        dynamic_sidebar('sidebar-2');
                }
				?>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="widget">
				<?php 
			   if (is_active_sidebar('sidebar-3')) {
		        dynamic_sidebar('sidebar-3');
                }
				?>

				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<!-- <h5 class="widgetheading">Flickr photostream</h5> -->
					<?php dynamic_sidebar('sidebar-5');?>
					<div class="flickr_badge">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
					</div>
					<div class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
						<?php echo get_theme_mod('footer-text1'); ?>

							<!-- <span>&copy; Moderna 2014 All right reserved. </span> <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste -->
						</p>
                        <!--
                            All links in the footer should remain intact.
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Moderna
                        -->
					</div>
				</div>
				<div class="col-lg-6">


					<ul class="social-network">

						<li><a href="<?php echo get_theme_mod('fblink-setting'); ?>" target=”_blank” data-placement="top" title="Facebook"><i class="<?php echo get_theme_mod('fb-setting'); ?>"></i></a></li>
						<li><a href="<?php echo get_theme_mod('twitterlink-setting'); ?>" target=”_blank” data-placement="top" title="Twitter"><i class="<?php echo get_theme_mod('twitter-setting'); ?>"></i></a></li>
						<li><a href="<?php echo get_theme_mod('linkinlink-setting'); ?>" target=”_blank” data-placement="top" title="Linkedin"><i class="<?php echo get_theme_mod('linkin-setting'); ?>"></i></a></li>
						<li><a href="<?php echo get_theme_mod('pinterestlink-setting'); ?>" target=”_blank” data-placement="top" title="Pinterest"><i class="<?php echo get_theme_mod('pinterest-setting'); ?>"></i></a></li>
						<li><a href="<?php echo get_theme_mod('googlelink-setting'); ?>" target=”_blank” data-placement="top" title="Google plus"><i class="<?php echo get_theme_mod('google-setting'); ?>"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<?php
// Define args
$args = array('post_type' => 'sliders');

// Execute query
$cpt_query = new WP_Query($args);

// Create cpt loop, with a have_posts() check!
if ($cpt_query->have_posts()):
    while ($cpt_query->have_posts()): $cpt_query->the_post();?>

						    <?php the_title();?>

						<?php endwhile;
endif;
?>

<?php wp_footer();?>
</body>
</html>