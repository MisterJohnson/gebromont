<!-- Descktop -->
<div class="d-none d-sm-block">
    <div class="row ">

        <div class="col-sm-6 ">
			<?php the_content(); ?>
        </div>
        <div class="col-sm-6">
            <header>
                <div class="wrap-text">
                    <h1>
						<?php the_field( 'texte' ); ?>
                    </h1>
                </div>
            </header>
        </div>

    </div>
</div>

<!-- ! Descktop -->
<!-- mobil -->
<div class="d-xs-block d-sm-none">
    <div class="row ">

        <div class="col-sm-6 ">
            <header>
                <div class="wrap-text">
                    <h1>
						<?php the_field( 'texte' ); ?>
                    </h1>
                </div>
            </header>
        </div>
        <div class="col-sm-6 ">
			<?php the_content(); ?>
        </div>


    </div>
</div>

<!-- ! mobil -->
