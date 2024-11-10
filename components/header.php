      <div class="container transition-all mx-auto px-28 flex items-center justify-between h-[100px] tracking-wider">
          <div>
              LOGO HERE
          </div>

          <div class="flex items-center">
              <?php
                $args = array(
                    'theme_location' => 'top-menu',
                    'before' => '<span class="absolute inset-0 h-[.5px]  top-1/2 transform scale-x-0 group-hover:scale-x-100 transition-all duration-500 origin-left bg-white"></span>',
                    'after' => '',
                    'items_wrap' => '<ul id="%1$s" class="flex mr-12">%3$s</ul>',
                    'add_li_class'  => 'p-5 group relative',
                );

                wp_nav_menu($args);
                ?>

              <?php
                set_query_var('button_text', 'Login');
                get_template_part('components/ui/button');
                ?>

          </div>
      </div>