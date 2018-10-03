<header class="banner">
    <div class="container">
        <div class="row section-logo">
                <a class="brand" href="<?= esc_url( home_url( '/' ) ); ?>">
					<?php if ( $logo = get_field( 'logo', 'option' ) ) { ?>
                        <img class="img-fluid"
                             src="<?= $logo['url'] ?>"
                             alt="">
					<?php } ?>
                </a>
                <div class="adresse">
		            <?php if ( $nom = get_field( 'nom', 'option' ) ) { ?>
                        <p>
				            <?= $nom ?>
                        </p>
		            <?php } ?>
		            <?php if ( $adresse = get_field( 'adresse', 'option' ) ) { ?>
                        <p>
				            <?= $adresse ?>
                        </p>
		            <?php } ?>
                </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <nav class="nav-primary">
					<?php
					if ( has_nav_menu( 'primary_navigation' ) ) :
						wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'nav' ] );
					endif;
					?>
                </nav>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="wrap-list-rezo">
                    <ul class="list-rezo">
						<?php if ( $facebook = get_field( 'facebook', 'option' ) ) { ?>
                            <li class="rezo-item"><a target="_blank" class="btn btn-round" href="<?= $facebook ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a></li>
						<?php } ?>
						<?php if ( $twitter = get_field( 'twitter', 'option' ) ) { ?>
                            <li class="rezo-item"><a target="_blank" class="btn btn-round" href="<?= $twitter ?>">
                                    <i class="fab fa-twitter"></i>
                                </a></li>
						<?php } ?>
						<?php if ( $linkedin = get_field( 'linkedin', 'option' ) ) { ?>
                            <li class="rezo-item"><a target="_blank" class="btn btn-round" href="<?= $linkedin ?>">
                                    <i class="fab fa-linkedin-in"></i>
                                </a></li>
						<?php } ?>
						<?php if ( $youtube = get_field( 'youtube', 'option' ) ) { ?>
                            <li class="rezo-item"><a target="_blank" class="btn btn-round" href="<?= $youtube ?>">
                                    <i class="fab fa-youtube"></i>
                                </a></li>
						<?php } ?>
						<?php if ( $ge_reports = get_field( 'ge_reports', 'option' ) ) { ?>
                            <li class="rezo-item"><a target="_blank" class="btn btn-round" href="<?= $ge_reports ?>">
                                    <i class="fab icon-ge_logo"></i>
                                </a></li>
						<?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
