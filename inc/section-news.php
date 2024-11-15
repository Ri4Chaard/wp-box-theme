<section class="container mx-auto pt-20 pb-20">
    <div class="font-termina text-center text-[32px] font-bold mb-10 uppercase">
        <?php the_field('news_title') ?>
    </div>

    <?php
    get_template_part('inc/archive-news');
    ?>
</section>