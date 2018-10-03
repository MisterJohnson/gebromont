<footer class="content-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <header>
					<?php if ( $titre = get_field( 'titre', 'option' ) ) { ?>
                        <h3>
							<?= $titre ?>
                        </h3>
					<?php } ?>
                </header>
                <hr>
				<?php if ( $description = get_field( 'description', 'option' ) ) { ?>
					<?= $description ?>
				<?php } ?>

            </div>
            <div class="col-sm-4">
                <nav class="nav-footer">
					<?php
					if ( has_nav_menu( 'footer_navigation' ) ) :
						wp_nav_menu( [ 'theme_location' => 'footer_navigation', 'menu_class' => 'nav' ] );
					endif;
					?>
                </nav>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <p class="copyright">
                    © <?= date( Y ) ?> Tous droits réservés <a target="_blank"
                                                               href="https://aeroemploi.ca/">aeroemploi.ca</a>
                </p>
            </div>
        </div>
    </div>
</footer>
