<section class="relative">
    <div class="container mx-auto pt-20 pb-20 relative">

        <div class="font-termina text-center text-[32px] font-bold mb-10 uppercase">
            <?php the_field('products_title') ?>
        </div>

        <div class="swiper swiper-container-products">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type'      => 'products',
                    'posts_per_page' => -1,
                    'order'          => 'ASC'
                );

                $loop = new WP_Query($args);

                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                        $price = get_field('price');
                        $discount = get_field('discount');

                        if ($price && $discount) {
                            $total_price = $price - $price * ($discount / 100);
                        } else {
                            $total_price = $price;
                        }
                ?>

                        <div class="swiper-slide" style="display: flex; justify-content: center; overflow: visible;">
                            <div class="p-[30px] w-[500px] cursor-pointer hover:shadow-lg">
                                <div class="relative bg-black z-0 mb-5">
                                    <a href="/">
                                        <?php if (has_post_thumbnail()): ?>
                                            <img class="w-auto mx-auto object-contain max-h-[320px] p-5" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                                        <?php else: ?>
                                            <img class="w-auto mx-auto object-contain max-h-[320px] p-5" src="<?php bloginfo('template_directory') ?>/assets/images/products-section/90d7d07990ee9aa1e6ef1c0b314ed52a-300x300.png" alt="">
                                        <?php endif; ?>
                                    </a>

                                    <?php if ($discount): ?>
                                        <div class="absolute top-5 left-5 z-50 w-[50px] h-[50px] rounded-full border-2 border-white flex items-center justify-center">
                                            <p>-<?php echo $discount ?>%</p>
                                        </div>
                                    <?php endif ?>

                                    <button class="group block absolute top-10 right-5 z-50">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            class="lucide lucide-heart group-hover:fill-white transition-colors duration-300"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center gap-[10px]">
                                    <a href="/" class="flex-1">
                                        <div class="flex flex-col gap-1">
                                            <div class="font-termina text-sm">
                                                <?php the_title() ?>
                                            </div>

                                            <div class="text-xs">
                                                <?php the_content() ?>
                                            </div>

                                            <div class="font-termina text-sm flex items-center gap-[10px]">
                                                <p><?php echo number_format($total_price, 2); ?>$</p>
                                                <?php if ($discount): ?>
                                                    <p class="opacity-70 line-through"><?php echo number_format($price, 2) ?>$</p>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="flex-1 self-end">
                                        <?php
                                        set_query_var('button_text', "Add to cart");
                                        set_query_var('style', 'text-xs px-0 py-[11px] w-full');
                                        get_template_part('inc/ui/button-outline');
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
        <div class="absolute top-[10vh] right-0 flex gap-8">
            <button class="swiper-button-prev products-prev" style="position:relative; color: #dc2626; border: 2px solid #dc2626; width: 60px; height: 60px;"></button>
            <button class="swiper-button-next products-next" style="position:relative; color: #dc2626; border: 2px solid #dc2626; width: 60px; height: 60px;"></button>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-red-700 to-transparent pointer-events-none"></div>
</section>