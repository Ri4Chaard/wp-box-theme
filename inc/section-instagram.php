<section class="py-20 relative bg-black">
    <span class="absolute w-4 h-4 bg-red-600 left-5 top-0"></span>
    <span class="absolute w-4 h-4 bg-red-600 right-5 top-0"></span>

    <div class="font-termina text-center text-[32px] font-bold mb-10 uppercase">
        <?php the_field('instagram_title'); ?>
    </div>

    <div class="grid grid-cols-3">
        <?php
        for ($index = 1; $index <= 6; $index++) :
            $instagram_image = get_field("instagram_image_$index");
        ?>
            <div class="flex justify-center">
                <img
                    class="w-full h-full object-cover grayscale"
                    src="<?php echo $instagram_image ? $instagram_image : get_template_directory_uri() . '/assets/images/instagram-section/Photo-1-2.png'; ?>"
                    alt="<?php echo $index; ?>">
            </div>
        <?php endfor; ?>
    </div>
</section>