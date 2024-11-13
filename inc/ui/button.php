<?php
$button_text = get_query_var('button_text', 'Default Text');
$style = get_query_var('style', '');
?>

<button class="<?php echo $style; ?> relative text-sm px-[35px] py-[15px] text-white uppercase transition-all duration-300 hover:bg-white hover:text-orange-600 group hover:duration-300">
    <?php
    $field_text = get_field($button_text);
    echo $field_text ? $field_text : $button_text;
    ?>

    <span class="absolute inset-0 pointer-events-none">
        <span class="absolute -top-0 -left-0 border-t-2 border-l-2 border-white w-3 h-3 duration-300 group-hover:scale-0 group-hover:origin-top-left group-hover:transition-all group-hover:duration-300"></span>

        <span class="absolute -top-0 -right-0 border-t-2 border-r-2 border-white w-3 h-3 duration-300 group-hover:scale-0 group-hover:origin-top-right group-hover:transition-all group-hover:duration-300"></span>

        <span class="absolute -bottom-0 -left-0 border-b-2 border-l-2 border-white w-3 h-3 duration-300 group-hover:scale-0 group-hover:origin-bottom-left group-hover:transition-all group-hover:duration-300"></span>

        <span class="absolute -bottom-0 -right-0 border-b-2 border-r-2 border-white w-3 h-3 duration-300 group-hover:scale-0 group-hover:origin-bottom-right group-hover:transition-all group-hover:duration-300"></span>
    </span>
</button>