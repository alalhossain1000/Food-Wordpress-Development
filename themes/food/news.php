<?php

/*
	
	Template Name: News Page
	
*/

 get_header() ?>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="<?php echo site_url() ?>">Home</a></li>

				<?php while(have_posts()):the_post() ?>
					<li><a href="#"><?php the_title() ?></a></li>
				<?php endwhile ?>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
			<?php 
			$news_query = new WP_Query([
				'post'		=>'post',
				'category_name'	=>'news',
				'posts_per_page'=>3
			]);
			while( $news_query->have_posts()  ): $news_query->the_post()

			?>

				<article>
					<div class="art-header">
						<div class="entry-title"> 
							<h2> <?php the_title() ?>  </h2>
						</div>
						<div class="info">By <a href="#"> <?php the_author() ?> </a> on  <?php the_time('F d,Y'); ?> </div>
					</div>
					<div class="art-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>


				<div class="widget wid-related">
					<div class="wrap-col">
						<div class="wid-header">
							<h5>Related News</h5>
						</div>
						<div class="wid-content">
							<div class="row">
				
							<?php 
							$news_query = new WP_Query([
								'post'		=>'post',
								'category_name'	=>'news',
								'posts_per_page'=>3,
								
							]);
							while( $news_query->have_posts()  ): $news_query->the_post()

							?>



								<div class="col-1-3">
									<div class="wrap-col">
										<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
										<h4><a href="#"><?php the_title() ?></a></h4>
									</div>
								</div>

							<?php endwhile; ?>



							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<?php get_sidebar(); ?>
		</div>
	</div>	
</section>

<?php get_footer(); ?>