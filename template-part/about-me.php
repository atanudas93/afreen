<?php
get_header();
/*Template Name: about-me*/
?>


<?php get_template_part('template-part/home-logo');?>
<?php get_template_part('template-part/home-subscribe'); ?>



<?php global $afreen;?>
    <section class="block-pb">
        <div class="container">
            <div class="text-widget">
            	<div class="about-avater">
                <figure>
                    <img src="<?php echo $afreen['aboutme_img']['url'];?>" alt="" class="img-fluid">
                </figure>
            </div>
                <h1 class="single-heading"><?php echo $afreen['aboutme_title'];?></h1>
                
                <p>
               			<?php echo $afreen['aboutme_desc'];?>
                </p>
            </div>
           
        </div>
    </section>
<?php get_footer(); ?>