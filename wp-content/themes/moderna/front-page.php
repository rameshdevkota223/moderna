<?php get_header();?>

	<section id="featured">
	<!-- start slider -->

	<?php
get_template_part('template-parts/content', 'slider');
?>
	 <!-- End slider -->
	</section>


	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">

			  <!-- card part -->
	<?php
get_template_part('template-parts/content-card');
?>
            <!--End card part -->

		<!-- divider -->
		<?php
get_template_part('template-parts/content-driver');
?>
		 <!-- end divider -->


		<!-- Portfolio Projects -->
		<?php
get_template_part('template-parts/content-potfolio');
?>
        <!--End Portfolio Projects -->
	</div>
	</section>

	<?php get_footer();?>