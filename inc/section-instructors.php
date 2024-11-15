<section class="mt-20 pt-[60px] pb-20 relative">
    <span class="absolute w-4 h-4 bg-red-600 left-5 top-0"></span>
    <span class="absolute w-4 h-4 bg-red-600 right-5 top-0"></span>
    <div class="container mx-auto relative z-50">


        <div class="font-termina text-center text-[32px] font-bold mb-[90px] uppercase">
            <?php the_field('instructors_title') ?>
        </div>

        <?php
        get_template_part('inc/archive-instructors');
        ?>
    </div>

</section>