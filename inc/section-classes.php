<section class="relative overflow-hidden">
    <div class="container mx-auto relative z-50 pt-[60px] pb-20 overflow-hidden">
        <div class="font-termina text-center text-[32px] font-bold mb-[90px] uppercase">
            <?php the_field('classes_title',); ?>
        </div>

        <div class="relative z-50">
            <?php
            get_template_part('inc/archive-classes');
            ?>
        </div>
    </div>
    <img
        class="absolute opacity-40 -top-28 left-0 right-0 bottom-0 z-0 w-screen filter blur-[2px]"
        src="<?php bloginfo('template_directory') ?>/assets/images/classes-section/Rectangle-22-1.png"
        alt="">
</section>