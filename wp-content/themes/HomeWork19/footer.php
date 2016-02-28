<footer class="f-page">
    <div class="container clearfix">
        <div class="foot-block">
            <div class="lorem">
                <div class="logo"><a href="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo2.png" alt="Deliver"/></a></div>
                <div class="foot-social">
                    <div class="social-icon fr"><a href="http://twitter.com"><img class="social" src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="Twitter"/></a></div>
                    <div class="social-icon sec"><a href="http://facebook.com"><img class="social" src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="Facebook"/></a></div>
                    <div class="social-icon"><a href="#"><img class="social" src="<?php bloginfo('template_directory'); ?>/img/rss.png" alt="RSS"/></a></div>
                </div>
                <p class="foot-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum gravida quam quis nunc rutrum placerat.
                    Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.
                </p>
            </div>
            <div class="contact">
                <h3 class="contact-title">Contact info</h3>
                <span class="contact-address">222 Ave C South</span>
                <span class="contact-address">Saskatoon, Saskatchewan</span>
                <span class="contact-address">Canada S7K 2N5</span><br/>
                <span class="contact-address mail"><a href="info@deliver.ca">info@deliver.ca</a></span>
                <span class="contact-number">1.306.222.3456</span>
            </div>
            <div class="quick-links">
                <h3 class="contact-title">Quick links</h3>
                <ul>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Archive</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Dropdown</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="newsletter">
                <h3 class="contact-title">Newsletter</h3>
                <span class="foot-text">Lorem ipsum dolor sit amet dolor consectetur adipiscing elit.</span>
                <form>
                    <input class="foot-form" type="email" placeholder="Email"/>
                    <input class="foot-sub" type="submit" value="OK">
                </form>
            </div>
            <div class="line"></div>
            <span class="copy">&copy <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?>. All Rights Reserved.</span>
            <ul class="foot-nav">
                <li><a href="#">About /</a></li>
                <li><a href="#">Privacy policy /</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>