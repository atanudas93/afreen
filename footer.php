<?php global $afreen; ?> 


 <footer class="footer">
        <div class="container">
            <div>
                <ul class="foo-socials">
                    <?php if (!empty($afreen['opt-social-network']['Facebook'])):?>
                    <li><a href="<?php echo $afreen['opt-social-network']['Facebook']?>" target="blank">
                    <i class="fab fa-facebook-f"></i> <span>Facebook</span></a></li>
                    <?php endif;?>

                    <?php if (!empty($afreen['opt-social-network']['Twitter'])):?>
                    <li><a href="<?php echo $afreen['opt-social-network']['Twitter']?>"><i class="fab fa-twitter"></i> <span>Twitter</span></a></li>
                    <?php endif;?>

                    <?php if (!empty($afreen['opt-social-network']['Pinterest'])):?>
                    <li><a href="<?php echo $afreen['opt-social-network']['Pinterest']?>"><i class="fab 
                    fa-pinterest-p"></i> <span>Pinterest</span></a></li>
                    <?php endif;?>

                </ul>
            </div>
            <div class="text-center">
                <span class="copyright">&copy; 2019 Afreen, All Right Reserved.</span>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
