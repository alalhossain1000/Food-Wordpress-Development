<?php get_header(); ?>


<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="<?php echo site_url() ?>">Home</a></li>
				<li><a href="#">Blog</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
                            
                                        <?php 

                                                         while(have_posts()):the_post();

                                          ?>
                                         <article>
                                                 <div class="art-header">
                                                         <a href="#"><h3><?php the_title(); ?> </h3></a>
                                                         <div class="info">Posted on <?php the_time('M d, Y') ?> in: <?php the_tags(',') ?></div>
                                                 </div>
                                                 <div class="art-content">
                                                         <?php the_post_thumbnail(); ?>
                                                         <p> <?php echo wp_trim_words(get_the_content(),40,"........."  ) ?> </p>
                                                 </div>
                                                 <a class="button button02" href="<?php the_permalink(); ?>">MORE</a>
                                         </article>
                                     <?php endwhile; ?>  
			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>