	</div>
</section>

    <footer id="footer">


        <?php do_action('theme_before_footer'); ?>
        <?php dynamic_sidebar("footer-widgets"); ?>
        <?php do_action('theme_after_footer'); ?>

        <div class="section dark">
            <div class="row">
                <div class="medium-6 column medium-text-left small-12 small-text-center small-margined">
                    <p><a href="mailto:info@panariapanaderias.es">info@panariapanaderias.es</a></p>
                </div>
                <div class="medium-6 medium-text-right column small-12 small-text-center">
                    <?php //get_template_part('inc/templates/social-icons')?>
                </div>
            </div>
        </div>

        <div class="section brick">
            <div class="row">
                <div class="columns medium-3 medium-text-left small-12 small-text-center">
                    <p><a href="<?php echo site_url(); ?>" class="footer-logo"><i class="icon-panaria"></i></a></p>
                </div>
                <div class="columns medium-9 medium-text-right small-12 small-text-center">
                    <?php
                    // Menú del footer, igual que el principal
                    wp_nav_menu(array(
                        'container' => false,
                        'container_class' => '',
                        'menu_class' => 'footer-menu inline-list text-uppercase',
                        'theme_location' => 'top-bar',
                    ));
                    // Mnú legal
                    theme_legal_menu();
                    ?>
                    <p class="lobster developed">Developed with ❤ by <a title="Web Design" target="_blank" href="http://artvisual.net">artvisual</a></p>
                </div>
            </div>

        </div>

    </footer>

<a class="exit-off-canvas"></a>
	
  <?php do_action('theme_layout_end'); ?>
  </div>
</div>
<?php wp_footer(); ?>
<?php do_action('theme_before_closing_body'); ?>
</body>
</html>