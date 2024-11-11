<section class="relative mt-[50px] h-[600px] flex items-center justify-center overflow-hidden">

    <div class="w-[585px] h-full z-10 flex flex-col gap-4 items-center justify-end text-center pb-28">
        <h2 class="text-4xl font-extrabold">LEARN <span class="text-red-600">BOXING FIGHT</span> LIKE CHAMPIONS</h2>
        <p class="text-sm opacity-70 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        <?php
        set_query_var('button_text', 'Book a class');
        // set_query_var('style', 'mt-4');
        get_template_part('inc/ui/button-secondary');
        ?>
    </div>

    <div class="absolute w-full h-full">
        <img class="absolute bottom-0" src="<?php bloginfo('template_directory') ?>/assets/images/Rectangle-79.png" alt="image">
        <img class="absolute right-28 -top-[88px] w-[420px]" src="<?php bloginfo('template_directory') ?>/assets/images/left_image.png" alt="image">
        <img class="absolute left-20 -top-[88px] w-[820px]" src="<?php bloginfo('template_directory') ?>/assets/images/right_image.png" alt="image">
        <img class="absolute bottom-1" src="<?php bloginfo('template_directory') ?>/assets/images/back-2.png" alt="image">
    </div>
</section>