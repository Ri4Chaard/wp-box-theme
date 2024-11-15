<section class="py-20 mt-20 relative bg-black">
    <div class="text-center">
        <span class="absolute w-4 h-4 bg-red-600 left-5 top-0"></span>
        <span class="absolute w-4 h-4 bg-red-600 right-5 top-0"></span>

        <span
            class="font-termina inline-block font-extrabold text-transparent bg-clip-text bg-cover bg-center tracking-wider"
            style="font-size: 10vw; line-height: 1; padding: 0; background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/ring.png'); -webkit-background-clip: text; color: transparent;">
            QUESTIONS
        </span>
    </div>

    <div class="font-termina text-center text-[32px] mt-20 font-bold mb-10 uppercase">
        <?php the_field('questions_title') ?>
    </div>

    <div class="container mx-auto mt-10 flex justify-center">
        <div class="flex flex-col gap-5 max-w-[928px]">

            <?php
            $args = array(
                'post_type'      => 'questions',
                'posts_per_page' => -1,
                'order'          => 'ASC'
            );

            $loop = new WP_Query($args);

            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
            ?>

                    <div class="flex flex-col gap-3">
                        <button
                            class="flex items-center border-b border-white justify-between pb-5 w-full text-sm transition-all"
                            onclick="toggleContent(this)">
                            <span><?php the_title() ?></span>

                            <div class="w-8 h-8 bg-red-600 flex items-center justify-center">
                                <svg class="rotate-45 transition-transform" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                                    <path d="M18 6 6 18" />
                                    <path d="m6 6 12 12" />
                                </svg>
                            </div>
                        </button>

                        <div class="max-h-0 opacity-0 hidden overflow-hidden text-sm transition-all ease-in-out duration-300">
                            <?php the_content() ?>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>