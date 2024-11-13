<?php
$button_text = get_query_var('button_text', 'Default Text');
$style = get_query_var('style', '');
?>

<div class="<?php echo $style; ?> flex items-center justify-center relative border-2 border-white text-white transition-all duration-300 hover:text-orange-600 group hover:duration-300">
    <button class="px-[66px] py-[12px]">
        <p class="relative z-10 uppercase text-sm">
            <?php
            $field_text = get_field($button_text);
            echo $field_text ? $field_text : $button_text;
            ?>
        </p>
        <span class="absolute inset-0 transform scale-x-0 group-hover:scale-x-100 transition-all duration-300 origin-left bg-white z-0"></span>
    </button>
</div>