<?php
get_header();

?>

    <?php get_template_part('template-part/home-logo');?>
	<?php get_template_part('template-part/home-subscribe'); ?>


 <?php
                if (have_posts()) :
                while (have_posts()) :
               the_post();
                ?>


	<?php get_template_part('template-part/singlepost'); ?>



  <?php
                endwhile;
                endif;
                ?>


                  <section class="block-py bg-gray-secondary">
                    <div class="container">
                      <h3 class="s-category-title text-center">RELATED POSTS</h3>
                          <div class="row no-gutters">
                     <?php
                $blog = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'orderby' => 'rand', 'paged' =>$paged));

                if ($blog->have_posts()) :
                while ($blog->have_posts()) :
                $blog->the_post();
                ?>


                    <?php get_template_part('template-part/singlepostfeature');?>
                
                    <?php
                endwhile;
                endif;
                ?>

                   </div>
                 </div>
                </section>

<?php get_footer(); ?>