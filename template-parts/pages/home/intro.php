<section class="section-intro py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-8">
				<h1 class="title__section"><?php the_field( 'intro_title' ); ?></h1>
				<div class="text__area"><?php the_field( 'intro_text' ); ?></div>
			</div>
			<div class="col-span-1 md:col-span-3 md:col-start-10">
				<div class="mb-10">
					<?php $tripadvisor = get_field( 'intro_tripadvisor' );
					echo $tripadvisor; ?>
				</div>
				<div class="">
					<?php
					$iframe = get_field( 'intro_trustyou' );
					echo $iframe; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="hs-container hs-divider">
