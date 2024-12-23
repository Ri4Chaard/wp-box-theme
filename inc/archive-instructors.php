<div class="swiper swiper-container-instructors">
    <div class="swiper-wrapper">
        <?php
        $args = array(
            'post_type'      => 'instructors',
            'posts_per_page' => -1,
            'order'          => 'ASC'
        );

        $loop = new WP_Query($args);

        if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post();
        ?>
                <div class="swiper-slide" style="display: flex; justify-content: center;">
                    <div class="text-center max-w-[464px] text-sm flex flex-col gap-4">
                        <div class="slide-image overflow-hidden">
                            <?php if (has_post_thumbnail()): ?>
                                <img class="w-full object-cover" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img class="w-full object-cover" src="<?php bloginfo('template_directory') ?>/assets/images/classes-section/Rectangle-2.png" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="slide-content flex flex-col gap-4">
                            <div>
                                <h3 class="font-termina text-left"><?php the_title(); ?></h3>
                                <div class="text-left text-[12px] opacity-70">
                                    <?php the_field('instructor_tag') ?>
                                </div>
                            </div>
                            <div class="text-justify">
                                <?php the_content() ?>
                            </div>
                            <div class="flex items-center justify-between">
                                <?php
                                $features = explode("\n", get_field('instructor_features'));
                                foreach ($features as $feature) {
                                    echo '<div class="text-sm px-5 py-[10px]  border border-red-700 rounded-md">' . esc_html($feature) . '</div>';
                                }
                                ?>
                            </div>
                            <div class="flex items-center justify-between gap-6">
                                <?php
                                set_query_var('button_text', "Book a class");
                                set_query_var('style', 'flex-1');
                                get_template_part('inc/ui/button-secondary');
                                ?>

                                <?php
                                set_query_var('button_text', "More info");
                                set_query_var('style', '');
                                get_template_part('inc/ui/button');
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
        <?php
            endwhile;
        endif;

        wp_reset_postdata();
        ?>
    </div>
</div>

<div class="font-termina text-[32px] font-bold swiper-pagination instructors-pagination absolute" style="width: auto; color: #dc2626; display: flex;"></div>

<div class="absolute bottom-20 right-0 flex gap-8">
    <button class="swiper-button-prev instructors-prev transition-colors" style="position:relative; width: 60px; height: 60px;"></button>
    <button class="swiper-button-next instructors-next transition-colors" style="position:relative; width: 60px; height: 60px;"></button>
</div>

<style>
    .swiper-container-instructors .slide-image {
        transform: scale(90%);
        transition: all 300ms ease-in-out;
    }

    .swiper-container-instructors .slide-content {
        opacity: 0;
        transform: translateY(-15px);
        transition: all 300ms ease-in-out;
    }

    .swiper-container-instructors .swiper-slide-active .slide-content {
        opacity: 100;
        transition: all 300ms ease-in-out;
        transform: translateY(0);
    }

    .swiper-container-instructors .swiper-slide-active .slide-image {
        transform: scale(100%);
        transition: all 300ms ease-in-out;
    }
</style>