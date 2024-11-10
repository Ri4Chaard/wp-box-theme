      <div class="container transition-all mx-auto px-28 flex items-center justify-between h-[100px] tracking-wider">
          <div>
              LOGO HERE
          </div>

          <div class="flex items-center">
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
                get_template_part('components/ui/button');
                ?>

          </div>
      </div>