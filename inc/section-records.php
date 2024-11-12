<?php
function display_record_section($text_setting, $image_setting, $default_image, $is_image_left = true)
{
    $text = get_theme_mod($text_setting, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.');
    $image_id = get_theme_mod($image_setting);
    $image_url = $image_id ? wp_get_attachment_url($image_id) : $default_image;

?>
    <div class="flex items-center">
        <?php if ($is_image_left): ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="Boxing Record Image" class="w-1/2 object-cover h-auto" />
            <p class="w-1/2 pl-5 text-sm opacity-70"><?php echo esc_html($text); ?></p>
        <?php else: ?>
            <p class="w-1/2 pr-5 text-sm opacity-70"><?php echo esc_html($text); ?></p>
            <img src="<?php echo esc_url($image_url); ?>" alt="Boxing Record Image" class="w-1/2 object-cover h-auto" />
        <?php endif; ?>
    </div>
<?php
}

?>


<section class="bg-black text-white">
    <div class="font-termina text-center text-[32px] font-bold text-white mb-[90px] uppercase">
        <?php the_field('records_title'); ?>
    </div>

    <div class="container mx-auto grid grid-cols-3 gap-5">
        <?php display_record_section(
            'record_text_1',
            'record_image_1',
            get_template_directory_uri() . '/assets/images/records-section/Rectangle-67-1.png',
            true
        ); ?>

        <div class="flex flex-col items-end">
            <div class="pr-10">
                <p class="font-termina text-[44px] font-bold text-red-600"><?php echo esc_html(get_theme_mod('record_number_1', '200+')); ?></p>
                <p class="text-sm"><?php echo esc_html(get_theme_mod('record_label_1', 'visitors')); ?></p>
            </div>
        </div>

        <?php display_record_section(
            'record_text_2',
            'record_image_2',
            get_template_directory_uri() . '/assets/images/records-section/Rectangle-68.png',
            false
        ); ?>

        <!-- CENTER -->

        <div class="flex flex-col items-center justify-center">
            <div class="pl-40">
                <p class="font-termina text-[44px] font-bold text-red-600"><?php echo esc_html(get_theme_mod('record_number_2', '11+')); ?></p>
                <p class="text-sm"><?php echo esc_html(get_theme_mod('record_label_2', 'world titles')); ?></p>
            </div>
        </div>

        <div class="relative w-[450px] h-[450px] mx-auto">
            <img class="absolute scale-[1.7]" src="<?php bloginfo('template_directory'); ?>/assets/images/records-section/Group-89.png" alt="center-image">
        </div>

        <div class="flex flex-col items-center justify-center">
            <div class="pr-40">
                <p class="font-termina text-[44px] font-bold text-red-600"><?php echo esc_html(get_theme_mod('record_number_3', '23+')); ?></p>
                <p class="text-sm"><?php echo esc_html(get_theme_mod('record_label_3', 'trainers')); ?></p>
            </div>
        </div>

        <!-- CENTER END -->

        <?php display_record_section(
            'record_text_3',
            'record_image_3',
            get_template_directory_uri() . '/assets/images/records-section/Rectangle-58.png',
            true
        ); ?>

        <div class="flex flex-col items-start justify-end">
            <div class="pl-10">
                <p class="font-termina text-[44px] font-bold text-red-600"><?php echo esc_html(get_theme_mod('record_number_4', '5+')); ?></p>
                <p class="text-sm"><?php echo esc_html(get_theme_mod('record_label_4', 'types of training')); ?></p>
            </div>
        </div>

        <?php display_record_section(
            'record_text_4',
            'record_image_4',
            get_template_directory_uri() . '/assets/images/records-section/Rectangle-66.png',
            false
        ); ?>


    </div>

</section>