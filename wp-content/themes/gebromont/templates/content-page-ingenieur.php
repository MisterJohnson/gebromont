<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<section class="header" style="background-image:url('<?php echo $thumb['0']; ?>')">
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col align-self-end">
				<?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 no-pad">
                <header class="text-center text-color-blue">
					<?php if ( $content = get_field( 'content', $page_id ) ) { ?>
						<?= $content ?>
					<?php } ?>
                </header>
            </div>
        </div>
    </div>
</section>
<section class="box no-pad">
    <div class="container-fluid">
		<?php

		// check if the flexible content field has rows of data
		if ( have_rows( 'contenu_flexible', $page_id ) ) {
			?>

			<?php // loop through the rows of data
			while ( have_rows( 'contenu_flexible', $page_id ) ) {
				the_row(); ?>

				<?php if ( get_row_layout() == 'texte_image' ) { ?>
                    <!-- descktop -->
                    <div class="d-none d-lg-block box-content">
                        <div class="row">
                            <div class="col-lg-6 no-pad">
                                <div class="content text-center">
										<?php the_sub_field( 'texte' ); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 no-pad">
								<?php $image = get_sub_field( 'image' ); ?>
                                <img class="img-fluid" src="<?= $image['url']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- !descktop -->
                    <!-- mobil -->
                    <div class="d-lg-none box-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="content text-center">
										<?php the_sub_field( 'texte' ); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
								<?php $image = get_sub_field( 'image' ); ?>
                                <img class="img-fluid" src="<?= $image['url']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- !mobil -->
				<?php } elseif ( get_row_layout() == 'imagetexte' ) {
					?>
                    <!-- descktop -->
                    <div class="d-none d-lg-block box-content">
                        <div class="row ">
                            <div class="col-lg-6 no-pad ">
								<?php $image = get_sub_field( 'image' ); ?>
                                <img class="center-block img-fluid" src="<?= $image['url']; ?>" alt="">
                            </div>
                            <div class="col-lg-6 no-pad">
                                <div class="content text-center ">
										<?php the_sub_field( 'texte' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- !descktop -->
                    <!-- mobil -->
                    <div class="d-lg-none box-content">
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="content text-center">
				                        <?php the_sub_field( 'texte' ); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
								<?php $image = get_sub_field( 'image' ); ?>
                                <img class="center-block img-fluid" src="<?= $image['url']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- !mobil -->
				<?php } ?>
			<?php }
		} ?>
    </div>
</section>
<section class="section-formulaire">
    <div class="container">
        <div class="formulaire text-center text-white">
			<?php if ( $formulaire = get_field( 'formulaire', $page_id ) ) { ?>
				<?= $formulaire ?>
				<?php
			} ?>
        </div>
    </div>
</section>
