<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="first-item">
                    <div class="logo">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/logo.svg" alt="1288Realty">
                    </div>
                    <ul>
                        <li><a href="#">Calamba, Philippines</a></li>
                        <li><a href="#">1288realty@company.com</a></li>
                        <li><a href="#">010-020-0340</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Homepage</a></li>
                    <li><a href="#">Model</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Copyright © 2024, All Rights Reserved.
                    </p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


</body>

</html>