<a onclick="wbeOpenOverlay()" class="wbebooking cursor-pointer">
    <div id="jezt-buchen-wrapper" class="bg-white text-[#737373] relative h-[202px]">
        <div id="jezt-buchen" class="bg-[#933032] text-white transform -rotate-90 w-[202px] h-[42px] text-center absolute top-20 -left-20 font-lyon text-[14px] leading-[42px] tracking-[0.125em] table-cell align-middle"><?php the_field( 'navigation_booking_banner_label', 'options' ); ?></div>
        <div id="jezt-buchen-info" class="py-9 pl-16 pr-5 border-y border-gold h-full w-full">
            <h4 class="font-walsheimedium font-bold text-[13px] mb-2"><?php the_field( 'navigation_booking_banner_title', 'options' ); ?></h4>
            <span class="inline-block font-walsheimthin text-[13px] leading-[20px] font-normal"><?php the_field( 'navigation_booking_banner_description', 'options' ); ?></span>
        </div>
    </div>
</a>