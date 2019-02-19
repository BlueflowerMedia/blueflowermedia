<?php
Class flue_flower_Walker extends Walker_Nav_Menu {

    /**
     * Starts the list before the elements are added.
     * @see Walker::start_lvl()
     * @since 3.0.0
     * @param string $flue_flower_output Passed by reference. Used to append additional content.
     * @param int $flue_flower_depth Depth of menu item. Used for padding.
     * @param array $flue_flower_args An array of arguments. @see wp_nav_menu()
     */

    public function start_lvl( &$flue_flower_output , $flue_flower_depth = 0 , $flue_flower_args = array() ) {
        $flue_flower_indent = str_repeat( "\t" , $flue_flower_depth );
        $flue_flower_output .= "\n$flue_flower_indent<ul class=\"sub-menu\">\n";
    }

    /**
     * Ends the list of after the elements are added.
     * @see Walker::end_lvl()
     * @since 3.0.0
     * @param string $flue_flower_output Passed by reference. Used to append additional content.
     * @param int $flue_flower_depth Depth of menu item. Used for padding.
     * @param array $flue_flower_args An array of arguments. @see wp_nav_menu()
     */

    public function end_lvl( &$flue_flower_output , $flue_flower_depth = 0 , $flue_flower_args = array() ) {
        $flue_flower_indent = str_repeat( "\t" , $flue_flower_depth );
        $flue_flower_output .= "$flue_flower_indent</ul>\n";
    }

    /**
     * Start the element output.
     * @see Walker::start_el()
     * @since 3.0.0
     * @since 4.4.0 'nav_menu_item_args' filter was added.
     * @param string $flue_flower_output Passed by reference. Used to append additional content.
     * @param object $flue_flower_item Menu item data object.
     * @param int $flue_flower_depth Depth of menu item. Used for padding.
     * @param array $flue_flower_args An array of arguments. @see wp_nav_menu()
     * @param int $flue_flower_id Current item ID.
     */

    public function start_el( &$flue_flower_output , $flue_flower_item , $flue_flower_depth = 0 , $flue_flower_args = array() , $flue_flower_id = 0 ) {
        $flue_flower_indent = ( $flue_flower_depth ) ? str_repeat( "\t" , $flue_flower_depth ) : '';
        $flue_flower_classes = empty( $flue_flower_item->classes ) ? array() : (array)$flue_flower_item->classes;
        $flue_flower_classes[ ] = 'menu-item-' . $flue_flower_item->ID;
        while( have_posts() ):
            the_post();
            global $post;
            $flue_flower_onePage = esc_attr( get_post_meta( $post->ID , 'w-is-one-page' , true ) );
            if( 'on' == $flue_flower_onePage ) {
                $flue_flower_permalink = get_the_permalink();
            }
        endwhile;

        /**
         * Filter the arguments for a single nav menu item.
         * @since 4.4.0
         * @param array $flue_flower_args An array of arguments.
         * @param object $flue_flower_item Menu item data object.
         * @param int $flue_flower_depth Depth of menu item. Used for padding.
         */

        $flue_flower_args = apply_filters( 'nav_menu_item_args' , $flue_flower_args , $flue_flower_item , $flue_flower_depth );

        /**
         * Filter the CSS class(es) applied to a menu item's list item element.
         * @since 3.0.0
         * @since 4.1.0 The `$flue_flower_depth` parameter was added.
         * @param array $flue_flower_classes The CSS classes that are applied to the menu item's `<li>` element.
         * @param object $flue_flower_item The current menu item.
         * @param array $flue_flower_args An array of {@see wp_nav_menu()} arguments.
         * @param int $flue_flower_depth Depth of menu item. Used for padding.
         */

        $flue_flower_class_names = join( ' ' , apply_filters( 'nav_menu_css_class' , array_filter( $flue_flower_classes ) , $flue_flower_item , $flue_flower_args , $flue_flower_depth ) );

        //enqueue inline style css
        wp_enqueue_style( 'flue_flower_inline-style' , get_template_directory_uri() . '/inline-style.css' );
        $flue_flower_custom_inline_style = '';

        //add mega menu class in parent class li
        if( $flue_flower_depth == 0 ) {
            $flue_flower_megaMenu = esc_attr( get_post_meta( $flue_flower_item->ID , 'w-mega-menu' , true ) );
            $flue_flower_megaMenuColumn = esc_attr( get_post_meta( $flue_flower_item->ID , 'w-mega-menu-column' , true ) );
            if( $flue_flower_megaMenu == 1 ) {
                $flue_flower_class_names .= ' mega-menu mega-menu' . $flue_flower_item->ID;
            }
            if( $flue_flower_megaMenuColumn != '' && $flue_flower_megaMenuColumn == 2 ) {
                $flue_flower_custom_inline_style .= 'ul#primary-menu > li.mega-menu' . $flue_flower_item->ID . ' > .sub-menu > li { width: 47%; margin-right: 3% !important; }';
            } else if( $flue_flower_megaMenuColumn != '' && $flue_flower_megaMenuColumn == 3 ) {
                $flue_flower_custom_inline_style .= 'ul#primary-menu > li.mega-menu' . $flue_flower_item->ID . ' > .sub-menu > li { width: 31%; margin-right: 2% !important; }';
            } else if( $flue_flower_megaMenuColumn != '' && $flue_flower_megaMenuColumn == 4 ) {
                $flue_flower_custom_inline_style .= 'ul#primary-menu > li.mega-menu' . $flue_flower_item->ID . ' > .sub-menu > li { width: 23%; margin-right: 2% !important; }';
            } else if( $flue_flower_megaMenuColumn != '' && $flue_flower_megaMenuColumn == 5 ) {
                $flue_flower_custom_inline_style .= 'ul#primary-menu > li.mega-menu' . $flue_flower_item->ID . ' > .sub-menu > li { width: 18.5%; margin-right: 1.5% !important; }';
            }
        }

        if( $flue_flower_depth == 1 ) {
            $flue_flower_navImage = esc_attr( get_post_meta( $flue_flower_item->ID , 'w-mega-menu-img' , true ) );
            if( $flue_flower_navImage != '' ) {
                $flue_flower_class_names .= ' mega-menu-add-image';
            }
        }

        $flue_flower_class_names = $flue_flower_class_names ? ' class="' . esc_attr( $flue_flower_class_names ) . '"' : '';

        /**
         * Filter the ID applied to a menu item's list item element.
         * @since 3.0.1
         * @since 4.1.0 The `$flue_flower_depth` parameter was added.
         * @param string $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param object $flue_flower_item The current menu item.
         * @param array $flue_flower_args An array of {@see wp_nav_menu()} arguments.
         * @param int $flue_flower_depth Depth of menu item. Used for padding.
         */

        $flue_flower_id = apply_filters( 'nav_menu_item_id' , 'menu-item-' . $flue_flower_item->ID , $flue_flower_item , $flue_flower_args , $flue_flower_depth );

        $flue_flower_id = $flue_flower_id ? ' id="' . esc_attr( $flue_flower_id ) . '"' : '';

        wp_add_inline_style( 'flue_flower_inline-style' , $flue_flower_custom_inline_style );

        $flue_flower_output .= $flue_flower_indent . '<li' . $flue_flower_id . $flue_flower_class_names . '>';

        $atts = array();
        $atts[ 'title' ] = !empty( $flue_flower_item->attr_title ) ? $flue_flower_item->attr_title : '';
        $atts[ 'target' ] = !empty( $flue_flower_item->target ) ? $flue_flower_item->target : '';
        $atts[ 'rel' ] = !empty( $flue_flower_item->xfn ) ? $flue_flower_item->xfn : '';
        $atts[ 'href' ] = !empty( $flue_flower_item->url ) ? $flue_flower_item->url : '';

        /**
         * Filter the HTML attributes applied to a menu item's anchor element.
         * @since 3.6.0
         * @since 4.1.0 The `$flue_flower_depth` parameter was added.
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         * @type string $flue_flower_title Title attribute.
         * @type string $target Target attribute.
         * @type string $rel The rel attribute.
         * @type string $href The href attribute.
         * }
         * @param object $flue_flower_item The current menu item.
         * @param array $flue_flower_args An array of {@see wp_nav_menu()} arguments.
         * @param int $flue_flower_depth Depth of menu item. Used for padding.
         */

        $atts = apply_filters( 'nav_menu_link_attributes' , $atts , $flue_flower_item , $flue_flower_args , $flue_flower_depth );

        $attributes = '';
        foreach( $atts as $attr => $value ) {
            if( !empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                if( $flue_flower_depth == 1 ) {
                    if( 'href' === $attr ) {
                        $flue_flower_parent = $flue_flower_item->menu_item_parent;
                        $flue_flower_isParentMegaMenu = esc_attr( get_post_meta( $flue_flower_parent , 'w-mega-menu' , true ) );
                        if( !$flue_flower_isParentMegaMenu ) {
                            $attributes .= ' ' . $attr . '="' . $value . '"';
                        }
                    }
                } else {
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }
        }

        /** This filter is documented in wp-includes/post-template.php */
        $flue_flower_title = apply_filters( 'the_title' , $flue_flower_item->title , $flue_flower_item->ID );

        /**
         * Filter a menu item's title.
         * @since 4.4.0
         * @param string $flue_flower_title The menu item's title.
         * @param object $flue_flower_item The current menu item.
         * @param array $flue_flower_args An array of {@see wp_nav_menu()} arguments.
         * @param int $flue_flower_depth Depth of menu item. Used for padding.
         */

        $flue_flower_title = apply_filters( 'nav_menu_item_title' , $flue_flower_title , $flue_flower_item , $flue_flower_args , $flue_flower_depth );
        $flue_flower_item_output = '';
        // If this is depth 1 and under mega menu do this
        if( $flue_flower_depth == 1 ) {
            $flue_flower_parent = $flue_flower_item->menu_item_parent;
            $flue_flower_isParentMegaMenu = esc_attr( get_post_meta( $flue_flower_parent , 'w-mega-menu' , true ) );

            if( $flue_flower_isParentMegaMenu ) {
                $flue_flower_hide_title = esc_attr( get_post_meta( $flue_flower_item->ID , 'w-mega-menu-hide-title' , true ) );
                $flue_flower_navImage = esc_attr( get_post_meta( $flue_flower_item->ID , 'w-mega-menu-img' , true ) );
                $flue_flower_item_output = $flue_flower_args->before;
                if( $flue_flower_navImage != '' ) {
                    $flue_flower_item_output .= '<a ' . $attributes . ' class="mega-title"' . $attributes . '>'.'<img src="' . $flue_flower_navImage . '" alt="'.esc_html__( 'Mega Menu' , 'blueflowermedia' ).'" />';
                } else {
                    $flue_flower_item_output .= '<a ' . $attributes . ' class="mega-title"' . $attributes . '>';
                }

                $flue_flower_item_output .= $flue_flower_args->link_before . $flue_flower_title . $flue_flower_args->link_after.'</a>';

                $flue_flower_item_output .= $flue_flower_args->after;
            } else {
                if( isset( $flue_flower_args->before ) ) $flue_flower_item_output = $flue_flower_args->before;
                $flue_flower_item_output .= '<a' . $attributes . '>';
                if( isset( $flue_flower_args->link_before ) && isset( $flue_flower_args->link_after ) ) $flue_flower_item_output .= $flue_flower_args->link_before . $flue_flower_title . $flue_flower_args->link_after;

                $flue_flower_item_output .= '</a>';
                if( isset( $flue_flower_args->after ) ) $flue_flower_item_output .= $flue_flower_args->after;
            }
        } else {
            if( isset( $flue_flower_args->before ) ) $flue_flower_item_output = $flue_flower_args->before;
            $flue_flower_item_output .= '<a' . $attributes . '>';
            if( isset( $flue_flower_args->link_before ) && isset( $flue_flower_args->link_after ) ) $flue_flower_item_output .= $flue_flower_args->link_before . $flue_flower_title . $flue_flower_args->link_after;

            $flue_flower_item_output .= '</a>';
            if( isset( $flue_flower_args->after ) ) $flue_flower_item_output .= $flue_flower_args->after;
        }

        /**
         * Filter a menu item's starting output.
         * The menu item's starting output only includes `$flue_flower_args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$flue_flower_args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         * @since 3.0.0
         * @param string $flue_flower_item_output The menu item's starting HTML output.
         * @param object $flue_flower_item Menu item data object.
         * @param int $flue_flower_depth Depth of menu item. Used for padding.
         * @param array $flue_flower_args An array of {@see wp_nav_menu()} arguments.
         */
        $flue_flower_output .= apply_filters( 'walker_nav_menu_start_el' , $flue_flower_item_output , $flue_flower_item , $flue_flower_depth , $flue_flower_args );
    }

    /**
     * Ends the element output, if needed.
     * @see Walker::end_el()
     * @since 3.0.0
     * @param string $flue_flower_output Passed by reference. Used to append additional content.
     * @param object $flue_flower_item Page data object. Not used.
     * @param int $flue_flower_depth Depth of page. Not Used.
     * @param array $flue_flower_args An array of arguments. @see wp_nav_menu()
     */
    public function end_el( &$flue_flower_output , $flue_flower_item , $flue_flower_depth = 0 , $flue_flower_args = array() ) {
        $flue_flower_output .= "</li>\n";
    }
}
