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
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <header class="text-center text-blk">
					<?php if ( $content = get_field( 'content', $page_id ) ) { ?>
						<?= $content ?>
					<?php } ?>
                </header>
            </div>
        </div>
    </div>
</section>
<section class="principe">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <header class="text-color-blue">

					<?php if ( $titre_section = get_field( 'titre_section' ) ) { ?>
                        <h2 class="regular">
							<?= $titre_section ?>
                        </h2>
					<?php } ?>
                </header>
				<?php if ( $listes_principes = get_field( 'listes_principes' ) ) { ?>
					<?php foreach ( $listes_principes as $item ) { ?>
                        <article>
                            <h3 class="text-blk">
								<?= $item['titre_principe'] ?>
                            </h3>
							<?= $item['description_principe'] ?>
                        </article>
					<?php }
				} ?>

            </div>
            <div class="col-sm-4">
                <aside>
                    <section class="article">
                        <header>
							<?php if ( $titre_boîte = get_field( 'titre_boîte' ) ) { ?>
                                <p class="text-blk">
									<?= $titre_boîte ?>
                                </p>
							<?php } ?>
                        </header>
						<?php if ( $liste_articles = get_field( 'liste_articles' ) ) { ?>
							<?php foreach ( $liste_articles as $article ) { ?>
                                <article>
                                    <p class="text-color-blue">
										<?= $article['titre_larticle'] ?>
                                    </p>
									<?= $article['description_article'] ?>
                                    <img class="center-block img-fluid" src="<?= $article['image_article']['url'] ?>"
                                         alt="">
                                </article>
							<?php }
						} ?>
                    </section>

                </aside>
            </div>
        </div>
    </div>
</section>
<section class="section-formulaire">
    <div class="container">
        <header class="text-center text-white">
			<?php if ( $titre_section_postuler = get_field( 'titre_section_postuler' ) ) { ?>
                <h2><?= $titre_section_postuler ?></h2>
			<?php } ?>
        </header>
        <div class="wrap-btn-collapse">
			<?php if ( $texte_bouton = get_field( 'texte_bouton', $page_id ) ) { ?>
                <a type="button" class="btn btn-marine" data-toggle="modal" data-target="#ModalAccueil"
                   data-whatever="@mdo"><?= $texte_bouton ?> </a>

			<?php } ?>

            <div class="modal fade" id="ModalAccueil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
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
                       <!--     <button type="button" class="btn btn-marine" data-dismiss="modal">Fermer</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
