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


            

                    <?php get_template_part('template-part/relatedvideo');?>
                
              





<?php get_footer(); ?>