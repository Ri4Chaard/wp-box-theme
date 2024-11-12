<div class="relative container mx-auto px-3 flex flex-col items-center gap-6 pt-20 pb-10">
    <div class="w-full flex gap-10 justify-between">
        <div class="h-full">
            <a href="<?php get_home_url() ?>">
                <img class="w-[124px] h-full" src="<?php bloginfo('template_directory') ?>/assets/logo.svg" alt="image">
            </a>

        </div>
        <div class="flex flex-col gap-5">
            <h3 class="font-termina font-medium uppercase text-[20px]">Opening hours</h3>
            <div class="flex flex-col gap-[14px]">
                <div class="text-sm">
                    <h4 class="font-termina uppercase mb-1">MONDAY - FRIDAY</h4>
                    <p class="opacity-70">07:30 AM - 09:30 PM</p>
                </div>
                <div class="text-sm">
                    <h4 class="font-termina uppercase mb-1">SATURDAY</h4>
                    <p class="opacity-70">08:00 AM - 09:00 PM</p>
                </div>
                <div class="text-sm">
                    <h4 class="font-termina uppercase mb-1">SUNDAY</h4>
                    <p class="opacity-70">CLOSED</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-5">
            <h3 class="font-termina font-medium uppercase text-[20px]">Client care</h3>
        </div>
        <div class="flex flex-col gap-5">
            <h3 class="font-termina font-medium uppercase text-[20px]">Contact us</h3>
            <div class="flex flex-col gap-[14px] text-sm">
                <?php the_field('contact_us') ?>
            </div>
        </div>
    </div>
    <p class="text-xs">© 2024. All Right Reserved</p>
    <button onclick="scrollToTop()" class="absolute -left-32 bottom-[10vh] w-[60px] h-[60px] bg-gray-100 rounded-full flex items-center justify-center">
        <p class="text-black opacity-70">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up">
                <path d="m18 15-6-6-6 6" />
            </svg>
        </p>
    </button>
</div>