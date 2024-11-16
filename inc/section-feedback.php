<section class="pt-20 relative">
    <span class="absolute w-4 h-4 bg-red-600 left-5 top-0"></span>
    <span class="absolute w-4 h-4 bg-red-600 right-5 top-0"></span>

    <div class="container mx-auto flex items-center justify-between">
        <div class="flex flex-col gap-7 basis-1/2 max-w-[510px] pr-5">
            <div class="flex flex-col gap-4">
                <div class="font-termina text-left text-[32px] font-bold uppercase">
                    <?php the_field('feedback_title') ?>
                </div>

                <div class="text-sm">
                    <?php the_field('feedback_text') ?>
                </div>
            </div>

            <div>
                <form class="flex flex-col gap-7">
                    <div class="flex flex-col">
                        <label for="name" class="mb-[6px] text-xs">
                            Name
                        </label>
                        <input id="name" type="text" class="p-[10px] bg-black border border-gray-600 transition-all hover:border-white" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="mb-[6px] text-xs">
                            Email
                        </label>
                        <input id="email" type="text" class="p-[10px] bg-black border border-gray-600 transition-all hover:border-white" required>
                    </div>
                    <?php
                    set_query_var('button_text', "Send");
                    set_query_var('style', '');
                    get_template_part('inc/ui/button-secondary');
                    ?>
                </form>
            </div>
        </div>
        <div class="basis-1/2">
            <img class="object-contain w-auto rounded-[20px]" src="<?php bloginfo('template_directory') ?>/assets/images/instagram-section/Photo-1-2.png" alt="<?php get_template_directory() ?>">
        </div>
    </div>

</section>