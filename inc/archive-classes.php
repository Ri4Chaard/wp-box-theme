<div id="post-slider" class="flex w-full transition-transform duration-300 ease-in-out">
    <?php
    $args = array(
        'post_type'      => 'classes',
        'posts_per_page' => -1, // Загружаем все посты
        'order'          => 'ASC'
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) :
        $post_index = 0;
        while ($loop->have_posts()) : $loop->the_post();
    ?>
            <div class="slide min-w-full">
                <h2 class="text-2xl font-semibold mb-4"><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            </div>
    <?php
            $post_index++;
        endwhile;
    endif;

    wp_reset_postdata();
    ?>
</div>

<!-- Индикатор индекса и кнопки -->
<div class="flex justify-between items-center mt-4">
    <span id="slide-index" class="absolute top-0 right-0">1 из <?php echo $post_index; ?></span>
    <div>
        <button id="prev-btn" class="disabled:opacity-50 disabled:cursor-not-allowed mr-2">Prev</button>
        <button id="next-btn" class="disabled:opacity-50 disabled:cursor-not-allowed">Next</button>
    </div>
</div>