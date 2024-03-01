<section class="section-impressions py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
            <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-2 xl:col-start-2 hs-grid">
                <div class="col-span-1 md:col-span-12 xl:col-span-12">
                    <h2 class="title__section !mb-4"><?php the_field( 'impressions_title' ); ?></h2>
                </div>
                <?php if (have_rows('impressions_list')) :
                while (have_rows('impressions_list')) : the_row(); ?>
                    <div class="col-span-1 md:col-span-6 xl:col-span-6">
                    <?php 
                    $imageImp = get_sub_field('image');
                    $size = 'medium';
                    $classes = 'w-full';
                    if( $imageImp ) {
                        echo wp_get_attachment_image( $imageImp, $size, false, array('class' => $classes) );
                    } ?>
                    </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>