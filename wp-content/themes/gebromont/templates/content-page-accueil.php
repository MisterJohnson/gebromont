<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

<section class="header" style="background-image:url('<?php echo $thumb['0']; ?>')">
    <div class="container">
        <div class="row">
            <div class="col align-self-start"><?php the_content(); ?></div>
            <div class="col ">
            </div>
        </div>
    </div>
</section>
<section class="mozaique">
    <div class="container-fluid no-pad">
		<?php if ( $banner_home = get_field( 'banner_home' ) ) { ?>
            <img class="img-fluid" src="<?= $banner_home['url'] ?>" alt="">
		<?php } ?>
        <!--     <div class="row">
            <div class="col-sm-4 gr-1 moz-pad">
                    <ul class="moz-list-img_1">
                        <div class="row">
							<?php if ( $moz_list_img = get_field( "images_gr_1" ) ) { ?>
								<?php foreach ( $moz_list_img as $img ) {
			?>
                                    <div class="col-sm-4 moz-pad">
                                        <li class="moz-item-list-img"><img class="img-fluid"
                                                                           src="<?php echo $img["url"] ?>"
                                                                           alt=""></li>
                                    </div>
									<?php
		}
		}
		?>
                        </div>
                        <div class="row">
							<?php if ( $moz_list_img_gr_2 = get_field( "images_groupe_2" ) ) { ?>
								<?php foreach ( $moz_list_img_gr_2 as $img_2 ) {
			?>
                                    <div class="col-sm-4 moz-pad">
                                        <li class="moz-item-list-img"><img class="img-fluid"
                                                                           src="<?php echo $img_2["url"] ?>"
                                                                           alt=""></li>
                                    </div>

									<?php
		}
		}
		?>
                        </div>
                    </ul>
            </div>
            <div class="col-sm-4 gr-2 moz-pad">
                <div class="wrap-content-gr-2">
                    <div class="col-sm-8 moz-pad">
						<?php if ( $bloc_texte = get_field( "bloc_texte" ) ) { ?>
                            <div class="bloc-texte">
									<?= $bloc_texte ?>
                            </div>
						<?php } ?>
                    </div>
                    <div class="col-sm-4 moz-pad bloc-img">
						<?php if ( $image_1 = get_field( 'image_1' ) ) { ?>
                            <img class="img-fluid" src="<?= $image_1['url'] ?>" alt="">
						<?php } ?>
						<?php if ( $image_2 = get_field( 'image_2' ) ) { ?>
                            <img class="img-fluid" src="<?= $image_2['url'] ?>" alt="">
						<?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 gr-3 moz-pad">
                <div class="row row-top">
                    <div class="col-sm-4 moz-pad">
						<?php if ( $lien = get_field( 'lien' ) ) { ?>
                            <a href="<?= $lien ?>" class="bloc-lien">
								<?php if ( $texte = get_field( 'texte' ) ) { ?>
                                   <?= $texte ?>
								<?php } ?>
								<?php if ( $image = get_field( 'image' ) ) { ?>
                                    <img class="img-fluid" src="<?= $image['url'] ?>" alt="">
								<?php } ?>
                            </a>
						<?php } ?>
                    </div>
                    <div class="col-sm-8 moz-pad">
						<?php if ( $bloc_texte_droit = get_field( 'bloc_texte_droit' ) ) { ?>
                            <div class="bloc_texte_droit">
									<?= $bloc_texte_droit ?>
                            </div>
						<?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 moz-pad">
						<?php if ( $bloc_texte_gauche = get_field( 'bloc_texte_gauche' ) ) { ?>
                            <div class="bloc_texte_gauche">
		                            <?= $bloc_texte_gauche ?>
                            </div>
						<?php } ?>
                    </div>
                    <div class="col-sm-4 moz-pad">
						<?php if ( $image_3 = get_field( 'image_3' ) ) { ?>
                            <img class="img-fluid" src="<?= $image_3['url'] ?>" alt="">
						<?php } ?>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>
<section class="carousel">
    <div class="container">
        <div class="row">
            <header class="text-center">
				<?php if ( $titre_carousel = get_field( 'titre_carousel' ) ) { ?>
                    <h2 class="text-color-blue">
						<?= $titre_carousel ?>
                    </h2>
				<?php } ?>
            </header>

			<?php if ( $carousel = get_field( 'carousel' ) ) { ?>
                <div id="carouselGEemploye" class="carousel slide" data-ride="carousel">
					<?php
					$i     = 0;
					$first = true;
					?>
                    <ol class="carousel-indicators">
						<?php foreach ( $carousel as $item ) {
							$i ++; ?>
                            <li data-target="#carouselGEemploye" data-slide-to="<?= $i - 1 ?>"
                                class="<?php if ( $first )
								    echo 'active' ?> "><h5 class="text-color-blue">
									<?= $item['nom_employe'] ?><br><?= $item['poste'] ?>
                                </h5>
                            </li>
							<?php $first = false;
						} ?>
                    </ol>
                  <div style="cursor: pointer;margin: -10px auto;position:relative;bottom:50px;z-index:1050;">
                    <?php if ( $texte_bouton = get_field( 'texte_bouton' ) ) { ?>
                      <a style="margin: 0 auto;" type="button" class="btn btn-blue" data-toggle="modal" data-target="#ModalAccueil"
                         data-whatever="@mdo"><?= $texte_bouton ?> </a>

                    <?php } ?>

                    <div class="modal fade" id="ModalAccueil" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="formulaire text-center text-white">
                              <?php if ( $formulaire = get_field( 'formulaire', $page_id ) ) { ?>
                                <?= $formulaire ?>
                                <?php
                              } ?>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-marine" data-dismiss="modal">Fermer</button>-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="carousel-inner">
						<?php
						$i     = 0;
						$first = true;
						?>
						<?php foreach ( $carousel as $item ) {
							$i ++; ?>
                            <div class="carousel-item <?php if ( $first )
								echo 'active' ?>">
                                <div class=" carousel-caption d-none d-md-block text-center text-gray">
                                    <?= $item['commentaire'] ?>
                                </div>
                                <img class="d-block w-100" src="<?= $item['slide']["url"] ?>" alt="First slide">
                            </div>
							<?php $first = false;
						} ?>
                    </div>
                </div>
			<?php } ?>
        </div>
    </div>
</section>
<section class="avantage">
    <div class="container">
        <header class=" text-center">
			<?php if ( $titre_section = get_field( 'titre_section' ) ) { ?>
                <h2 class="text-color-blue"><?= $titre_section ?></h2>
			<?php } ?>
			<?php if ( $s_titre_section = get_field( 's_titre_section' ) ) { ?>
                <p><?= $s_titre_section ?></p>
			<?php } ?>
        </header>
        <div class="row">
            <div class="section-img-avantage">
                <aside class="aside-top">
					<?php if ( $text_img_box_top = get_field( 'text_img_box_top' ) ) { ?>
                        <h3 class="text-color-blue">
							<?= $text_img_box_top ?>
                        </h3>
					<?php } ?>
                </aside>
				<?php if ( $img_top = get_field( 'img_top' ) ) { ?>
                    <img class="img-fluid" src="<?= $img_top['url'] ?>" alt="">
				<?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 no-pad">
                <div class="section-img-avantage ">
                    <aside class="aside-left">
						<?php if ( $text_img_box_gauche = get_field( 'text_img_box_gauche' ) ) { ?>
                            <h3 class="text-color-blue">
								<?= $text_img_box_gauche ?>
                            </h3>
						<?php } ?>
                    </aside>
					<?php if ( $img_gauche = get_field( 'img_gauche' ) ) { ?>
                        <img class="img-fluid" src="<?= $img_gauche['url'] ?>" alt="">
					<?php } ?>
                </div>
            </div>
            <div class="col-sm-6 no-pad">
                <div class="section-img-avantage">
                    <aside class="aside-right">
						<?php if ( $text_img_box_droit = get_field( 'text_img_box_droit' ) ) { ?>
                            <h3 class="text-color-blue">
								<?= $text_img_box_droit ?>
                            </h3>
						<?php } ?>
                    </aside>
					<?php if ( $img_droit = get_field( 'img_droit' ) ) { ?>
                        <img class="img-fluid" src="<?= $img_droit['url'] ?>" alt="">
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <header class="text-center">
			<?php if ( $titre_section_propos = get_field( 'titre_section_propos' ) ) { ?>
                <h2><?= $titre_section_propos ?></h2>
			<?php } ?>
        </header>
		<?php if ( $texte_btn = get_field( 'texte_btn' ) ) { ?>
			<?php if ( $lien_bouton = get_field( 'lien_bouton' ) ) { ?>
                <a class="btn btn-marine" href="<?= $lien_bouton ?>"><?= $texte_btn ?></a>
			<?php }
		} ?>
    </div>
</section>
