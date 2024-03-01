<div id="footerbar" class="block lg:hidden fixed bottom-0 left-0 w-full border-t border-gold bg-white h-[40px] z-50">
    <div id="buchenfixed" class="absolute w-[65%] py-[7px] px-0 text-center text-gold">
        <a onclick="wbeOpenOverlay()" target="_blank">
            <p class="text-[18px] leading-[27px] tracking-[0.05em] font-bold"><?php the_field( 'navigation_booking_banner_label', 'options' ); ?></p>
        </a>
    </div>
    <div id="iconsfixed" class="w-[130px] float-right">
        <a href="https://www.facebook.com/SchoeneggWengen" target="_blank">
            <div class="float-right border-l border-gold py-[5px] px-0 min-w-[42px] text-center">
                <img class="w-7 inline-block -mt-[1px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/square-facebook.svg" alt="calendar icon" title="calendar icon">
            </div>
        </a>
        <a href="mailto:<?php the_field( 'footer_e-mail', 'options' ); ?>">
            <div class="float-right border-l border-gold py-[5px] px-0 min-w-[42px] text-center">
                <img class="w-7 inline-block -mt-[1px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/square-envelope.svg" alt="calendar icon" title="calendar icon">
            </div>
        </a>
        <a href="tel:<?php the_field( 'footer_phone', 'options' ); ?>">
            <div class="float-right border-l border-gold py-[5px] px-0 min-w-[42px] text-center">
                <img class="w-7 inline-block -mt-[1px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/square-phone.svg" alt="calendar icon" title="calendar icon">
            </div>
        </a>
    </div>
</div>