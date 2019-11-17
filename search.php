 
<?php get_header();?>
<?php get_template_part('template-part/home-logo');?>
<?php get_template_part('template-part/home-subscribe'); ?>

 <section class="block-pb has-col-mb">
        <div class="container">
            <h4 class="s-category-title text-center heading-title-highlighted">
                <span>Blgo Search</span>
            </h4>
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

 </section >
        </div>

<?php get_footer();?>