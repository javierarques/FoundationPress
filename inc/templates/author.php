<!--BEGIN .author-bio-->
<div class="author-bio panel">
			<h3 class="author-title">Escrito por <?php the_author_link(); ?></h3>
			<div class="author-info row">
                <div class="small-2 columns">
                    <?php echo get_avatar( get_the_author_meta('email'), '90' ); ?>
                    
                </div>
                <div class="small-10 columns">
                    <p class="author-description"><?php the_author_meta('description'); ?></p>
                    <p>Website: <a href="<?php the_author_meta('user_url');?>"><?php the_author_meta('user_url');?></a></p>
                    <ul class="inline-list rrss">
                        <?php 
                            $rss_url = get_the_author_meta( 'rss_url' );
                            if ( $rss_url && $rss_url != '' ) {
                                echo '<li class="rss"><a href="' . esc_url($rss_url) . '"><i class="icon-rss"></i></a></li>';
                            }

                            $google_profile = get_the_author_meta( 'googleplus' );
                            if ( $google_profile && $google_profile != '' ) {
                                echo '<li class="google"><a href="' . esc_url($google_profile) . '" rel="author"><i class="icon-google-plus"></i></a></li>';
                            }

                            $twitter_profile = get_the_author_meta( 'twitter' );
                            if ( $twitter_profile && $twitter_profile != '' ) {
                                echo '<li class="twitter"><a href="' . esc_url($twitter_profile) . '"><i class="icon-twitter"></i></a></li>';
                            }

                            $facebook_profile = get_the_author_meta( 'facebook' );
                            if ( $facebook_profile && $facebook_profile != '' ) {
                                echo '<li class="facebook"><a href="' . esc_url($facebook_profile) . '"><i class="icon-facebook"></i></a></li>';
                            }

                            $linkedin_profile = get_the_author_meta( 'linkedin' );
                            if ( $linkedin_profile && $linkedin_profile != '' ) {
                                echo '<li class="linkedin"><a href="' . esc_url($linkedin_profile) . '"><i class="icon-linkedin"></i></a></li>';
                            }
                        ?>
                    </ul>
                </div>
				

			</div>
<!--END .author-bio-->
</div>