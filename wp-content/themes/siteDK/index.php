<?php get_header(); ?>
			<!-- end header -->
			<!-- begin content-->	
			<div class="contents">
				<div class="content_centr">
					<div class="slide-img-wrap">
						<img src="<?php bloginfo('template_url') ?>/img/slide-img-1.png" alt="">
					</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	


					
					<div class="blok-1">
						<h3><?php the_title(); ?>    <span><?php the_time('j.m.Y') ?></span> </h3> 
					
						<?php the_post_thumbnail('spec_thumb', 'class=foto_news'); ?>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="more">Подробнее >></a>
					</div>
					
						

<?php endwhile; ?>
	<div class="pagination">

		<?php
		//	global $wp_query;

			$big = 999999999; // need an unlikely integer

			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
				) );
		?>

	</div>
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

				</div>

<?php get_sidebar(); ?>


			</div>
		</div>
	</div>
	<!-- end contentcontent-->



	<div class="hidden"></div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Load Scripts Start -->
	<script>var scr = {"scripts":[
		{"src" : "<?php bloginfo('template_url') ?>/js/libs.js", "async" : false},
		{"src" : "<?php bloginfo('template_url') ?>/js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Load Scripts End -->

</body>
</html>
