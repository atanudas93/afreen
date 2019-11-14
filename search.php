 
<?php get_header();?>
<?php get_template_part('template-part/home-logo');?>
<?php get_template_part('template-part/home-subscribe'); ?>

 
 <div class="row my-blogpost" id="blogContent">

             <?php
                if (have_posts()) :
                while (have_posts()) :
               the_post();
                ?>
                    <?php get_template_part('template-part/searchcontent');?>
                
                     <?php
                endwhile;
                endif;
                ?>
                  
              
            </div>



<?php get_footer();?>