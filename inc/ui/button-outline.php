<?php
$button_text = get_query_var('button_text', 'Default Text');
$style = get_query_var('style', '');
?>

<button class="<?php echo $style; ?> px-[66px] py-[12px] flex items-center justify-center relative border-2 border-white text-white transition-all duration-300 hover:text-orange-600 hover:bg-white hover:duration-300>">
    <p class="relative z-10 uppercase">
        <?php
        $field_text = get_field($button_text);
        echo $field_text ? $field_text : $button_text;
        ?>
    </p>
</button>