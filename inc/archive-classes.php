<div id="post-slider" class="flex w-full transition-transform duration-300 ease-in-out">
    <?php
    $args = array(
        'post_type'      => 'classes',
        'posts_per_page' => -1,
        'order'          => 'ASC'
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) :
        $post_index = 0;
        while ($loop->have_posts()) : $loop->the_post();
    ?>
            <div class="min-w-full flex items-center justify-center">
                <div class="slide before:bg-[#1F1F1F] before:absolute before:block before:w-[750px] before:h-full">
                    <div class="p-10 pr-0 relative ">
                        <h2 class="font-termina uppercase text-xl font-medium mb-5"><?php the_title(); ?></h2>
                        <div class="flex gap-5">
                            <div class="flex gap-6 mb-10">
                                <div class="max-w-[400px] flex flex-col gap-10">
                                    <div class="text-sm opacity-70">
                                        <?php the_content(); ?>
                                    </div>

                                    <div class="flex flex-col gap-6">
                                        <div class="flex flex-col gap-5">
                                            <h3 class="font-termina uppercase text-sm">Good for:</h3>

                                            <ul class="flex flex-col gap-[14px]">
                                                <?php
                                                $features = explode("\n", get_field('good_for'));
                                                foreach ($features as $feature) {
                                                    echo '<div class="ml-[22px] flex items-center gap-3">';
                                                    echo '<div class="w-[10px] h-[10px] bg-red-600"></div>';
                                                    echo '<li class="text-sm">' . esc_html($feature) . '</li>';
                                                    echo '</div>';
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                        <div class="flex flex-col gap-5">
                                            <h3 class="font-termina uppercase text-sm">Timetable:</h3>

                                            <ul class="flex flex-col gap-[14px]">
                                                <?php
                                                $features = explode("\n", get_field('timetable'));
                                                foreach ($features as $feature) {
                                                    echo '<div class="ml-[22px] flex items-center gap-3">';
                                                    echo '<div class="w-[10px] h-[10px] bg-gray-500"></div>';
                                                    echo '<li class="text-sm">' . esc_html($feature) . '</li>';
                                                    echo '</div>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <?php if (has_post_thumbnail()): ?>
                                    <img class="max-w-[500px] object-cover" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                                <?php else: ?>
                                    <img class="max-w-[500px] object-cover" src="<?php bloginfo('template_directory') ?>/assets/images/classes-section/Rectangle-2.png" alt="">
                                <?php endif; ?>
                            </div>

                            <?php
                            $trainer = get_field('class_instructor');

                            if ($trainer):
                                $trainer_name = get_the_title($trainer->ID);
                                $trainer_image = get_the_post_thumbnail_url($trainer->ID, 'full');

                                global $post;
                                $original_post = $post;

                                $post = $trainer;
                                setup_postdata($post);

                                $instructor_tag = get_field('instructor_tag');
                            ?>
                                <div class="h-fit p-6 bg-[#1F1F1F]">
                                    <?php if ($trainer_image): ?>
                                        <img class="max-w-[300px] object-cover mb-4" src="<?php echo esc_url($trainer_image); ?>" alt="<?php echo esc_attr($trainer_name); ?>">
                                    <?php endif; ?>

                                    <div class="text-sm flex items-center justify-between">
                                        <div class="flex flex-col gap-1">
                                            <div><?php echo esc_html($trainer_name); ?></div>
                                            <div class="opacity-70"><?php echo esc_html($instructor_tag); ?></div>
                                        </div>

                                        <button class="underline transition-all hover:text-red-600">
                                            More info
                                        </button>
                                    </div>
                                </div>

                            <?php
                                $post = $original_post;
                                wp_reset_postdata();
                            endif;
                            ?>

                        </div>

                        <div class="flex items-center gap-6">
                            <?php
                            set_query_var('button_text', "More info");
                            set_query_var('style', 'w-[400px]');
                            get_template_part('inc/ui/button-secondary');
                            ?>

                            <?php
                            set_query_var('button_text', "See all categories");
                            set_query_var('style', '');
                            get_template_part('inc/ui/button');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php
            $post_index++;
        endwhile;
    endif;

    wp_reset_postdata();
    ?>
</div>

<div class="flex justify-between items-center mt-4">
    <span id="slide-index" class="font-termina font-bold text-red-600 absolute top-0 right-0 text-[32px]">1/<?php echo $post_index; ?></span>
    <div class="absolute right-0 bottom-12 flex items-center gap-[12px]">
        <button id="prev-btn" class="w-[60px] h-[60px] transition-all duration-300 flex items-center justify-center border-2 border-red-600 text-red-600 bg-transparent disabled:border-gray-500 disabled:text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left">
                <path d="m15 18-6-6 6-6" />
            </svg>
        </button>

        <button id="next-btn" class="w-[60px] h-[60px] transition-all duration-300 flex items-center justify-center border-2 border-red-600 text-red-600 bg-transparent disabled:border-gray-500 disabled:text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </button>
    </div>
</div>