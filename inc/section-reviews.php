<section class="py-20 relative">
    <span class="absolute w-4 h-4 bg-red-600 left-5 top-0"></span>
    <span class="absolute w-4 h-4 bg-red-600 right-5 top-0"></span>

    <div class="font-termina text-center text-[32px] font-bold mb-10 uppercase">
        <?php the_field('reviews_title') ?>
    </div>

    <div class="container mx-auto flex">
        <div class="basis-1/2">
            <?php $reviews_image = get_field('reviews_thumbnail') ?>
            <img
                class="w-full h-full object-cover"
                src="<?php echo $reviews_image ? $reviews_image : get_template_directory_uri() . '/assets/images/reviews-section/Photo.png'; ?>"
                alt="">

        </div>
        <div class="basis-1/2 swiper swiper-container-reviews relative" style="padding-left: 80px">
            <div class="swiper-wrapper">

                <?php
                $args = array(
                    'post_type'      => 'reviews',
                    'posts_per_page' => -1,
                    'order'          => 'ASC'
                );

                $loop = new WP_Query($args);

                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                ?>

                        <div class="swiper-slide" style="width: 688px">
                            <div class="flex flex-col justify-between w-[calc(100%-180px)] h-full">
                                <div class="pt-[140px] text-sm">
                                    <?php the_content() ?>
                                </div>

                                <div class="flex flex-col gap-[18px]">
                                    <div class="flex flex-col gap-1">
                                        <div class="font-termina text-[20px] font-medium">
                                            <?php the_title() ?>
                                        </div>

                                        <div class="text-xs opacity-70">
                                            <?php the_field('user_platform') ?>
                                        </div>

                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <?php the_field('user_tag') ?>

                                        <div class="flex items-center justify-between gap-[18px]">
                                            <?php if (get_field('user_tiktok')): ?>
                                                <a class="w-8 h-8 p-[6px] flex items-center justify-center" href="<?php the_field('user_tiktok') ?>">
                                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26" fill="unset">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0155 0.169434C16.4497 3.72408 18.4823 5.84051 22 6.05696V10.0301C19.9525 10.2225 18.1616 9.54908 16.0796 8.34656V15.8118C16.0796 25.3069 5.46246 28.2651 1.20473 21.4685C-1.53837 17.0961 0.143997 9.40478 8.94067 9.10656V13.325C8.25145 13.4341 7.57189 13.595 6.90802 13.806C4.93456 14.4457 3.84915 15.6627 4.15504 17.7935C4.75201 21.8773 12.4337 23.0846 11.7923 15.1095V0.183878H16.0352L16.0155 0.169434Z"></path>
                                                    </svg>
                                                </a>
                                            <?php endif ?>

                                            <?php if (get_field('user_facebook')): ?>
                                                <a class="w-8 h-8 p-[6px] flex items-center justify-center" href="<?php the_field('user_facebook') ?>">
                                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="unset">
                                                        <path d="M9.9998 0C4.47711 0 0 4.47711 0 9.9998C0 14.6893 3.22874 18.6244 7.58425 19.7052V13.0557H5.52229V9.9998H7.58425V8.68303C7.58425 5.27949 9.12462 3.70193 12.4662 3.70193C13.0997 3.70193 14.1929 3.82632 14.6401 3.95032V6.72026C14.4041 6.69547 13.9941 6.68307 13.4849 6.68307C11.8454 6.68307 11.2118 7.30425 11.2118 8.91902V9.9998H14.4781L13.9169 13.0557H11.2118V19.9264C16.1633 19.3284 20 15.1125 20 9.9998C19.9996 4.47711 15.5225 0 9.9998 0Z"></path>
                                                    </svg>
                                                </a>
                                            <?php endif ?>

                                            <?php if (get_field('user_instagram')): ?>
                                                <a class="w-8 h-8 p-[6px] flex items-center justify-center" href="<?php the_field('user_instagram') ?>">
                                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 25 26" fill="unset">
                                                        <path d="M12.5 2.41879C15.8295 2.41879 16.228 2.4188 17.544 2.4922C18.3357 2.4991 19.1201 2.64462 19.8616 2.92216C20.3983 3.13059 20.8857 3.44848 21.2928 3.85561C21.7 4.26273 22.0179 4.75014 22.2263 5.28685C22.5038 6.02833 22.6493 6.81272 22.6562 7.60441C22.7192 8.92047 22.7297 9.31896 22.7297 12.6484C22.7297 15.9779 22.7296 16.3764 22.6562 17.6925C22.6493 18.4842 22.5038 19.2685 22.2263 20.01C22.0179 20.5467 21.7 21.0342 21.2928 21.4413C20.8857 21.8484 20.3983 22.1663 19.8616 22.3747C19.1201 22.6523 18.3357 22.7978 17.544 22.8047C16.228 22.8676 15.8347 22.8781 12.5 22.8781C9.16527 22.8781 8.77203 22.8781 7.45597 22.8047C6.66428 22.7978 5.87992 22.6523 5.13844 22.3747C4.60173 22.1663 4.11429 21.8484 3.70716 21.4413C3.30004 21.0342 2.98215 20.5467 2.77372 20.01C2.49618 19.2685 2.35066 18.4842 2.34376 17.6925C2.28084 16.3764 2.27035 15.9779 2.27035 12.6484C2.27035 9.31896 2.27036 8.92047 2.34376 7.60441C2.35066 6.81272 2.49618 6.02833 2.77372 5.28685C2.98215 4.75014 3.30004 4.26273 3.70716 3.85561C4.11429 3.44848 4.60173 3.13059 5.13844 2.92216C5.87992 2.64462 6.66428 2.4991 7.45597 2.4922C8.77203 2.42929 9.17052 2.41879 12.5 2.41879ZM12.5 0.169434C9.11284 0.169434 8.68814 0.169409 7.35634 0.242815C6.32051 0.26423 5.29578 0.461041 4.32571 0.824844C3.48975 1.14329 2.7306 1.6349 2.09805 2.26745C1.4655 2.9 0.973856 3.65918 0.65541 4.49514C0.291608 5.46522 0.0948281 6.48991 0.0734136 7.52574C0.0157375 8.85754 0 9.28224 0 12.6694C0 16.0566 7.68028e-06 16.4813 0.0734136 17.8131C0.0948281 18.8489 0.291608 19.8736 0.65541 20.8437C0.973856 21.6797 1.4655 22.4388 2.09805 23.0714C2.7306 23.7039 3.48975 24.1955 4.32571 24.514C5.29578 24.8778 6.32051 25.0746 7.35634 25.096C8.68814 25.1537 9.11284 25.1694 12.5 25.1694C15.8872 25.1694 16.3119 25.1694 17.6437 25.096C18.6795 25.0746 19.7042 24.8778 20.6743 24.514C21.5103 24.1955 22.2694 23.7039 22.902 23.0714C23.5345 22.4388 24.0261 21.6797 24.3446 20.8437C24.7084 19.8736 24.9052 18.8489 24.9266 17.8131C24.9843 16.4813 25 16.0566 25 12.6694C25 9.28224 25 8.85754 24.9266 7.52574C24.9052 6.48991 24.7084 5.46522 24.3446 4.49514C24.0261 3.65918 23.5345 2.9 22.902 2.26745C22.2694 1.6349 21.5103 1.14329 20.6743 0.824844C19.7042 0.461041 18.6795 0.26423 17.6437 0.242815C16.3119 0.185139 15.8872 0.169434 12.5 0.169434Z"></path>
                                                        <path d="M12.4991 6.23566C11.2318 6.23566 9.99305 6.61141 8.93938 7.31545C7.88571 8.01949 7.06447 9.02019 6.57952 10.191C6.09457 11.3618 5.96769 12.6501 6.21492 13.893C6.46214 15.1358 7.07235 16.2775 7.96843 17.1736C8.8645 18.0697 10.0062 18.6799 11.2491 18.9271C12.492 19.1743 13.7803 19.0474 14.951 18.5625C16.1218 18.0775 17.1225 17.2563 17.8266 16.2026C18.5306 15.149 18.9064 13.9102 18.9064 12.6429C18.9064 10.9436 18.2313 9.31388 17.0297 8.11228C15.8281 6.91068 14.1984 6.23566 12.4991 6.23566ZM12.4991 16.8009C11.6767 16.8009 10.8728 16.557 10.189 16.1001C9.50528 15.6433 8.97237 14.9939 8.65766 14.2341C8.34296 13.4743 8.2606 12.6383 8.42104 11.8318C8.58147 11.0252 8.97748 10.2843 9.55898 9.70284C10.1405 9.12134 10.8814 8.72533 11.6879 8.56489C12.4945 8.40446 13.3305 8.48682 14.0902 8.80152C14.85 9.11622 15.4994 9.64913 15.9563 10.3329C16.4131 11.0167 16.657 11.8206 16.657 12.6429C16.657 13.7457 16.2189 14.8033 15.4392 15.583C14.6594 16.3628 13.6018 16.8009 12.4991 16.8009Z"></path>
                                                        <path d="M19.1597 7.48358C19.9879 7.48358 20.6593 6.8122 20.6593 5.98401C20.6593 5.15581 19.9879 4.48444 19.1597 4.48444C18.3315 4.48444 17.6602 5.15581 17.6602 5.98401C17.6602 6.8122 18.3315 7.48358 19.1597 7.48358Z"></path>
                                                    </svg>
                                                </a>
                                            <?php endif ?>

                                            <?php if (get_field('user_twitter')): ?>
                                                <a class="w-8 h-8 p-[6px] flex items-center justify-center" href="<?php the_field('user_twitter') ?>">
                                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="unset">
                                                        <path d="M17.3263 0H20.6998L13.3297 8.42349L22 19.886H15.2112L9.89404 12.934L3.80995 19.886H0.434432L8.31743 10.8761L0 0H6.96111L11.7674 6.35433L17.3263 0ZM16.1423 17.8668H18.0116L5.94539 1.91313H3.93946L16.1423 17.8668Z"></path>
                                                    </svg>
                                                </a>
                                            <?php endif ?>
                                        </div>
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

            <div class="font-termina text-[32px] font-bold swiper-pagination reviews-pagination absolute" style="width: auto; color: #dc2626; display: flex; justify-content: flex-end; top: 0; right: 0; bottom:auto"></div>
            <div class="absolute bottom-0 right-0 flex gap-8">
                <button class="swiper-button-prev reviews-prev transition-colors" style="position:relative; width: 60px; height: 60px;"></button>
                <button class="swiper-button-next reviews-next transition-colors" style="position:relative; width: 60px; height: 60px;"></button>
            </div>
        </div>
    </div>
</section>

<style>
    .swiper-button-prev {
        color: #DC2626;
        border: 2px solid #DC2626;
    }

    .swiper-button-next {
        color: #DC2626;
        border: 2px solid #DC2626;
    }

    .swiper-button-prev::after {
        font-size: 24px;
    }

    .swiper-button-next::after {
        font-size: 24px;
    }

    .swiper-button-prev.swiper-button-disabled {
        opacity: 100;
        color: #73706F;
        border-color: #73706F;
    }

    .swiper-button-next.swiper-button-disabled {
        opacity: 100;
        color: #73706F;
        border-color: #73706F;
    }
</style>