<?php get_header(); ?>


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

                                                         while(have_posts()):the_post();

                                          ?>
                                         <article>
                                                 <div class="art-header">
                                                         <a href="#"><h3><?php the_title(); ?> </h3></a>
                                                         <div class="info">Posted on <?php the_time('M d, Y') ?> in: <?php the_tags(',') ?></div>
                                                 </div>
                                                 <div class="single-thum">
                                                         <?php the_post_thumbnail(); ?>
                                                         <p> <?php the_content(); ?> </p>
                                                 </div>
                                                 
                                         </article>
                                     <?php endwhile; ?>  
                            
                            
                            <?php 
                             comments_template();
                            ?>
			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>