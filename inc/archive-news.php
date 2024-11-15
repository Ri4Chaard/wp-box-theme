<div class="flex flex-col gap-10">
    <?php
    $args = array(
        'post_type'      => 'news',
        'posts_per_page' => -1,
        'order'          => 'ASC'
    );

    $loop = new WP_Query($args);
    $index = 1;

    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post();
    ?>
            <div class="flex mt-[50px]">
                <div class="flex flex-col items-center justify-center basis-1/2 relative <?php if ($index % 2 === 0): ?>order-2<?php endif ?>">

                    <span class="absolute w-4 h-4 bg-red-600 left-5 top-0"></span>
                    <span class="absolute w-4 h-4 bg-red-600 right-5 top-0"></span>
                    <span class="absolute w-4 h-4 bg-red-600 left-5 bottom-0"></span>
                    <span class="absolute w-4 h-4 bg-red-600 right-5 bottom-0"></span>

                    <div class="max-w-[464px] text-center">
                        <div class="font-termina text-[20px] uppercase font-medium mb-4 leading-none">
                            <?php the_title() ?>
                        </div>
                        <div class="text-sm">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
                <div class="basis-1/2">
                    <?php if (has_post_thumbnail()): ?>
                        <img class="w-full max-h-[460px] object-cover" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                        <img class="w-full max-h-[460px] object-cover" src="<?php bloginfo('template_directory') ?>/assets/images/news-section/Rectangle-27.png" alt="">
                    <?php endif; ?>
                </div>
            </div>
    <?php
            $index++;
        endwhile;
    endif;

    wp_reset_postdata();
    ?>
</div>