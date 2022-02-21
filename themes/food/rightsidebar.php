<?php 
 /*
  Template Name: Right Sidebar
  */
get_header(); ?>


<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="<?php echo site_url() ?>">Home</a></li>
				<li><a href="#">Blog</a></li>
			</ul>
		</div>
            
                <div id="sidebar" class="col-1-3">
			<?php get_sidebar(); ?>
		</div>
            
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
                            
                                        <?php 

                                                         while(have_posts()):the_post();

                                          ?>
                                          <article>
                                                 <?php the_content() ?>
                                         </article>
                                     <?php endwhile; ?>  
			</div>
		</div>
		
	</div>
</section>

<?php get_footer(); ?>