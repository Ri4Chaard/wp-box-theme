      <div class="container transition-all mx-auto flex items-center justify-between h-[100px] tracking-wider">
          <div class="h-full">
              <a href="<?php get_home_url() ?>">
                  <img class="w-[124px] h-full" src="<?php bloginfo('template_directory') ?>/assets/logo.svg" alt="image">
              </a>

          </div>

          <div class="flex items-center">
              <p>Search</p>

              <?php
                $args = array(
                    'theme_location' => 'top-menu',
                    'link_before' => '<span class="absolute m-5 inset-0 h-[.5px] -top-1/3 transform scale-x-0 group-hover:scale-x-100 transition-all duration-500 origin-left bg-white"></span>',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="flex mr-12">%3$s</ul>',
                    'list_item_class'  => 'nav-item relative',
                    'link_class'  => 'group p-5 ',
                );

                wp_nav_menu($args);
                ?>

              <?php
                set_query_var('button_text', 'Login');
                get_template_part('inc/ui/button');
                ?>

          </div>
      </div>