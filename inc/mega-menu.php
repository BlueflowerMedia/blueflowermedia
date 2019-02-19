<?php

class Walker_Nav_Menu_Edit_Custom extends Walker_Nav_Menu {

    /**
     * @see Walker::$blue_flower_tree_type
     * @var string
     */
    var $blue_flower_tree_type = array( 'post_type' , 'taxonomy' , 'custom' );
    /**
     * @see Walker::$blue_flower_db_fields
     * @todo Decouple this.
     * @var array
     */

    var $blue_flower_db_fields = array( 'parent' => 'menu_item_parent' , 'id' => 'db_id' );

    /**
     * @see Walker_Nav_Menu::start_lvl()
     * @since 3.0.0
     * @param string $blue_flower_output Passed by reference.
     */

    function start_lvl( &$blue_flower_output , $blue_flower_depth = 0 , $blue_flower_args = array() ) {
    }

    /**
     * @see Walker_Nav_Menu::end_lvl()
     * @since 3.0.0
     * @param string $blue_flower_output Passed by reference.
     */

    function end_lvl( &$blue_flower_output , $blue_flower_depth = 0 , $blue_flower_args = array() ) {

    }

    /**
     * @see Walker::start_el()
     * @since 3.0.0
     * @param string $blue_flower_output Passed by reference. Used to append additional content.
     * @param object $blue_flower_item Menu item data object.
     * @param int $blue_flower_depth Depth of menu item. Used for padding.
     * @param object $blue_flower_args
     */

    function start_el( &$blue_flower_output , $blue_flower_item , $blue_flower_depth = 0 , $blue_flower_args = array() , $current_object_id = 0 ) {

        global $_wp_nav_menu_max_depth;

        $_wp_nav_menu_max_depth = $blue_flower_depth > $_wp_nav_menu_max_depth ? $blue_flower_depth : $_wp_nav_menu_max_depth;

        ob_start();

        $blue_flower_item_id = esc_attr( $blue_flower_item->ID );

        $blue_flower_removed_args = array( 'action' , 'customlink-tab' , 'edit-menu-item' , 'menu-item' , 'page-tab' , '_wpnonce' , );

        $blue_flower_original_title = '';

        if( 'taxonomy' == $blue_flower_item->type ) {

            $blue_flower_original_title = get_term_field( 'name' , $blue_flower_item->object_id , $blue_flower_item->object , 'raw' );

            if( is_wp_error( $blue_flower_original_title ) ) $blue_flower_original_title = false;

        } elseif( 'post_type' == $blue_flower_item->type ) {

            $blue_flower_original_object = get_post( $blue_flower_item->object_id );

            $blue_flower_original_title = get_the_title( $blue_flower_original_object->ID );

        } elseif( 'post_type_archive' == $blue_flower_item->type ) {

            $blue_flower_original_object = get_post_type_object( $blue_flower_item->object );

            $blue_flower_original_title = $blue_flower_original_object->labels->archives;

        }

        $blue_flower_classes = array( 'menu-item menu-item-depth-' . $blue_flower_depth , 'menu-item-' . esc_attr( $blue_flower_item->object ) , 'menu-item-edit-' . ( ( isset( $_GET[ 'edit-menu-item' ] ) && $blue_flower_item_id == $_GET[ 'edit-menu-item' ] ) ? 'active' : 'inactive' ) , );

        $blue_flower_title = $blue_flower_item->title;

        if( !empty( $blue_flower_item->_invalid ) ) {

            $blue_flower_classes[ ] = 'menu-item-invalid';

            /* translators: %s: title of menu item which is invalid */

            $blue_flower_title = sprintf( esc_html__( '%s (Invalid)' , 'blueflowermedia' ) , $blue_flower_item->title );

        } elseif( isset( $blue_flower_item->post_status ) && 'draft' == $blue_flower_item->post_status ) {

            $blue_flower_classes[ ] = 'pending';

            /* translators: %s: title of menu item in draft status */

            $blue_flower_title = sprintf( esc_html__( '%s (Pending)' , 'blueflowermedia' ) , $blue_flower_item->title );

        }

        $blue_flower_title = ( !isset( $blue_flower_item->label ) || '' == $blue_flower_item->label ) ? $blue_flower_title : $blue_flower_item->label;

        $blue_flower_submenu_text = '';

        if( 0 == $blue_flower_depth ) $blue_flower_submenu_text = 'class="wl-menu-block"';
        ?>

    <li id="menu-item-<?php echo esc_attr( $blue_flower_item_id ); ?>"
        class="<?php echo implode( ' ' , $blue_flower_classes ); ?>">

    <div class="menu-item-bar">
        <div class="menu-item-handle">
            <span class="item-title"><span class="menu-item-title"><?php echo esc_html( $blue_flower_title ); ?></span> <span class="is-submenu" <?php echo esc_attr( $blue_flower_submenu_text ); ?>><?php esc_html_e( 'sub item' , 'blueflowermedia' ); ?></span></span>
            <span class="item-controls">
                <span class="item-type"><?php echo esc_html( $blue_flower_item->type_label ); ?></span>
                <span class="item-order hide-if-js">
                    <a href="<?php echo wp_nonce_url( add_query_arg( array( 'action' => 'move-up-menu-item' , 'menu-item' => $blue_flower_item_id , ) , remove_query_arg( $blue_flower_removed_args , admin_url( 'nav-menus.php' ) ) ) , 'move-menu_item' ); ?>" class="item-move-up"><abbr title="<?php esc_attr_e( 'Move up' , 'blueflowermedia' ); ?>">&#8593;</abbr></a>|
                    <a href="<?php echo wp_nonce_url( add_query_arg( array( 'action' => 'move-down-menu-item' , 'menu-item' => $blue_flower_item_id , ) , remove_query_arg( $blue_flower_removed_args , admin_url( 'nav-menus.php' ) ) ) , 'move-menu_item' ); ?>" class="item-move-down"><abbr title="<?php esc_attr_e( 'Move down' , 'blueflowermedia' ); ?>">&#8595;</abbr></a>
                </span>
                <a class="item-edit" id="edit-<?php echo esc_attr( $blue_flower_item_id ); ?>" title="<?php esc_attr_e( 'Edit Menu Item' , 'blueflowermedia' ); ?>" href="<?php  echo ( isset( $_GET[ 'edit-menu-item' ] ) && $blue_flower_item_id == $_GET[ 'edit-menu-item' ] ) ? admin_url( 'nav-menus.php' ) : add_query_arg( 'edit-menu-item' , $blue_flower_item_id , remove_query_arg( $blue_flower_removed_args , admin_url( 'nav-menus.php#menu-item-settings-' . $blue_flower_item_id ) ) ); ?>"><?php esc_html_e( 'Edit Menu Item' , 'blueflowermedia' ); ?></a>
            </span>
        </div>
    </div>

    <div class="menu-item-settings" id="menu-item-settings-<?php echo esc_attr( $blue_flower_item_id ); ?>">

    <?php if( 'custom' == $blue_flower_item->type ) : ?>

        <p class="field-url description description-wide">
            <label for="edit-menu-item-url-<?php echo esc_attr( $blue_flower_item_id ); ?>">
                <?php esc_html_e( 'URL' , 'blueflowermedia' ); ?><br/>
                <input type="text" id="edit-menu-item-url-<?php echo esc_attr( $blue_flower_item_id ); ?>" class="widefat code edit-menu-item-url" name="menu-item-url[<?php echo esc_attr( $blue_flower_item_id ); ?>]"  value="<?php echo esc_attr( $blue_flower_item->url ); ?>"/>
            </label>
        </p>

    <?php endif; ?>

    <p class="description description-wide">
        <label for="edit-menu-item-title-<?php echo esc_attr( $blue_flower_item_id ); ?>">
            <?php esc_html_e( 'Navigation Label' , 'blueflowermedia' ); ?><br/>
            <input type="text" id="edit-menu-item-title-<?php echo esc_attr( $blue_flower_item_id ); ?>" class="widefat edit-menu-item-title" name="menu-item-title[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( $blue_flower_item->title ); ?>"/>
        </label>
    </p>


    <p class="field-title-attribute description description-wide">
        <label for="edit-menu-item-attr-title-<?php echo esc_attr( $blue_flower_item_id ); ?>">
            <?php esc_html_e( 'Title Attribute' , 'blueflowermedia' ); ?><br/>
            <input type="text" id="edit-menu-item-attr-title-<?php echo esc_attr( $blue_flower_item_id ); ?>" class="widefat edit-menu-item-attr-title" name="menu-item-attr-title[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( $blue_flower_item->post_excerpt ); ?>"/>
        </label>
    </p>

    <p class="field-link-target description">
        <label for="edit-menu-item-target-<?php echo esc_attr( $blue_flower_item_id ); ?>">
            <input type="checkbox" id="edit-menu-item-target-<?php echo esc_attr( $blue_flower_item_id ); ?>" value="_blank" name="menu-item-target[<?php echo esc_attr( $blue_flower_item_id ); ?>]"<?php checked( $blue_flower_item->target , '_blank' ); ?> />
            <?php esc_html_e( 'Open link in a new tab' , 'blueflowermedia' ); ?>
        </label>
    </p>


    <p class="field-css-classes description description-thin">
        <label for="edit-menu-item-classes-<?php echo esc_attr( $blue_flower_item_id ); ?>">
            <?php esc_html_e( 'CSS Classes (optional)' , 'blueflowermedia' ); ?><br/>
            <input type="text" id="edit-menu-item-classes-<?php echo esc_attr( $blue_flower_item_id ); ?>" class="widefat code edit-menu-item-classes" name="menu-item-classes[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( implode( ' ' , $blue_flower_item->classes ) ); ?>"/>
        </label>
    </p>

    <p class="field-xfn description description-thin">
        <label for="edit-menu-item-xfn-<?php echo esc_attr( $blue_flower_item_id ); ?>">
            <?php esc_html_e( 'Link Relationship (XFN)' , 'blueflowermedia' ); ?><br/>
            <input type="text" id="edit-menu-item-xfn-<?php echo esc_attr( $blue_flower_item_id ); ?>" class="widefat code edit-menu-item-xfn" name="menu-item-xfn[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( $blue_flower_item->xfn ); ?>"/>
        </label>
    </p>

    <p class="field-description description description-wide">
        <label for="edit-menu-item-description-<?php echo esc_attr( $blue_flower_item_id ); ?>">
            <?php esc_html_e( 'Description' , 'blueflowermedia' ); ?><br/>
            <textarea id="edit-menu-item-description-<?php echo esc_attr( $blue_flower_item_id ); ?>" class="widefat edit-menu-item-description" rows="3" cols="20" name="menu-item-description[<?php echo esc_attr( $blue_flower_item_id ); ?>]"><?php echo esc_html( $blue_flower_item->description ); // textarea_escaped ?></textarea>
            <span class="description"><?php esc_html_e( 'The description will be displayed in the menu if the current theme supports it.' , 'blueflowermedia' ); ?></span>
        </label>
    </p>

    <p class="field-move hide-if-no-js description description-wide">
        <label>
            <span><?php esc_html_e( 'Move' , 'blueflowermedia' ); ?></span>

            <a href="#" class="menus-move menus-move-up" data-dir="up"><?php esc_html_e( 'Up one' , 'blueflowermedia' ); ?></a>
            <a href="#" class="menus-move menus-move-down" data-dir="down"><?php esc_html_e( 'Down one' , 'blueflowermedia' ); ?></a>
            <a href="#" class="menus-move menus-move-left" data-dir="left"></a>
            <a href="#" class="menus-move menus-move-right" data-dir="right"></a>
            <a href="#" class="menus-move menus-move-top" data-dir="top"><?php esc_html_e( 'To the top' , 'blueflowermedia' ); ?></a>
        </label>
    </p>

    <div class="menu-item-actions description-wide submitbox">

        <?php if( 'custom' != $blue_flower_item->type && $blue_flower_original_title !== false ) : ?>
            <p class="link-to-original">
                <?php printf( esc_html__( 'Original: %s' , 'blueflowermedia' ) , '<a href="' . esc_attr( $blue_flower_item->url ) . '">' . esc_html( $blue_flower_original_title ) . '</a>' ); ?>
            </p>
        <?php endif; ?>

        <a class="item-delete submitdelete deletion" id="delete-<?php echo esc_attr( $blue_flower_item_id ); ?>" href="<?php echo wp_nonce_url( add_query_arg( array( 'action' => 'delete-menu-item' , 'menu-item' => $blue_flower_item_id , ) , admin_url( 'nav-menus.php' ) ) , 'delete-menu_item_' . $blue_flower_item_id ); ?>"><?php esc_html_e( 'Remove' , 'blueflowermedia' ); ?></a>

        <span class="meta-sep hide-if-no-js"> | </span> <a class="item-cancel submitcancel hide-if-no-js" id="cancel-<?php echo esc_attr( $blue_flower_item_id ); ?>" href="<?php echo esc_url( add_query_arg( array( 'edit-menu-item' => $blue_flower_item_id , 'cancel' => time() ) , admin_url( 'nav-menus.php' ) ) ); ?>#menu-item-settings-<?php echo esc_attr( $blue_flower_item_id ); ?>"><?php esc_html_e( 'Cancel' , 'blueflowermedia' ); ?></a>
    </div>

    <?php

    // Helps plugins hook their own moon_shop_fields.
    do_action( 'wp_nav_menu_item_custom_fields' , $blue_flower_item_id , $blue_flower_item , $blue_flower_depth , $blue_flower_args );
    ?>

    <input class="menu-item-data-db-id" type="hidden" name="menu-item-db-id[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( $blue_flower_item_id ); ?>"/>
    <input class="menu-item-data-object-id" type="hidden" name="menu-item-object-id[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( $blue_flower_item->object_id ); ?>"/>
    <input class="menu-item-data-object" type="hidden" name="menu-item-object[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( $blue_flower_item->object ); ?>"/>
    <input class="menu-item-data-parent-id" type="hidden" name="menu-item-parent-id[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( $blue_flower_item->menu_item_parent ); ?>"/>
    <input class="menu-item-data-position" type="hidden" name="menu-item-position[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( $blue_flower_item->menu_order ); ?>"/>
    <input class="menu-item-data-type" type="hidden" name="menu-item-type[<?php echo esc_attr( $blue_flower_item_id ); ?>]" value="<?php echo esc_attr( $blue_flower_item->type ); ?>"/>
    </div>

    <!-- .menu-item-settings-->

    <ul class="menu-item-transport"></ul>
        <?php
        $blue_flower_output .= ob_get_clean();
    }
}

/**
 * Proof of concept for how to add new moon_shop_fields to nav_menu_item posts in the WordPress menu editor.
 * @author Weston Ruter (@westonruter), X-Team
 */

add_action( 'init' , array( 'W_Nav_Menu_Item_Custom_Fields' , 'setup' ) );

class W_Nav_Menu_Item_Custom_Fields {

    static function setup() {

        if( !is_admin() ) return;

        $new_fields = apply_filters( 'w_nav_menu_item_additional_fields' , array() );

        if( empty( $new_fields ) ) return;

        add_filter( 'wp_edit_nav_menu_walker' , function () {

            return 'W_Walker_Nav_Menu_Edit';

        } );

        add_action( 'save_post' , array( __CLASS__ , '_save_post' ) , 10 , 2 );

    }

    /**
     * Inject the
     * @hook {action} save_post
     */

    static function get_field( $blue_flower_item , $blue_flower_depth , $blue_flower_args ) {

        $new_fields = '';

        $value = esc_attr( get_post_meta( $blue_flower_item->ID , 'w-mega-menu' , true ) );
        if( $value == 1 ) {
            $checked = 'checked="checked"';
        } else {
            $checked = '';
        }

        if( 0 == $blue_flower_depth ) {
            $new_fields .= '<p class="field-w-mega-menu"><label for="edit-menu-item-w-mega-menu-' . $blue_flower_item->ID . '">' . esc_html__( 'Mega Menu' , 'blueflowermedia' ) . '<input type="checkbox" id="edit-menu-item-mega-menu-' . $blue_flower_item->ID . '" class="widefat code edit-menu-item-mega-menu w-mega-menu-input" name="menu-item-mega-menu[' . $blue_flower_item->ID . ']" value="1" ' . $checked . '></label></p>';
            $column_no = esc_attr( get_post_meta( $blue_flower_item->ID , 'w-mega-menu-column' , true ) );
            $select = 'selected';
            $select2 = '';
            $select3 = '';
            $select4 = '';
            $select5 = '';
            if( $column_no == '2' ) {
                $select2 = 'selected';
            } else if( $column_no == '3' ) {
                $select3 = 'selected';
            } else if( $column_no == '4' ) {
                $select4 = 'selected';
            } else if( $column_no == '5' ) {
                $select5 = 'selected';
            }
            $new_fields .= '<p class="field-w-mega-menu-column"><label class="menu-column" for="edit-menu-item-w-mega-menu-column-' . $blue_flower_item->ID . '">' . esc_html__( 'Set Column Number' , 'blueflowermedia' ) . '
                <select id="blue-flower-menu-column' . $blue_flower_item->ID . '" class="blue-flower-menu-column" name="menu-item-mega-menu-column[' . $blue_flower_item->ID . ']" value="' . esc_attr( $column_no ) . '">
                    <option value=" "' . $select . '>' . esc_attr( 'Select Menu Column' , 'blueflowermedia' ) . '</option>
                    <option value="2"' . $select2 . '>' . esc_attr( 'Two Column' , 'blueflowermedia' ) . '</option>
                    <option value="3"' . $select3 . '>' . esc_attr( 'Three Column' , 'blueflowermedia' ) . '</option>
                    <option value="4"' . $select4 . '>' . esc_attr( 'Four Column' , 'blueflowermedia' ) . '</option>
                    <option value="5"' . $select5 . '>' . esc_attr( 'Five Column' , 'blueflowermedia' ) . '</option>
                </select>
            </label></p>';
        }

        if( 'custom' == $blue_flower_item->type && 1 == $blue_flower_depth ) {
            $valtxt = esc_attr( get_post_meta( $blue_flower_item->ID , 'w-mega-menu-img' , true ) );
            $blue_flower_hideTitleChecked = esc_attr( get_post_meta( $blue_flower_item->ID , 'w-mega-menu-hide-title' , true ) );
            if( $blue_flower_hideTitleChecked == 1 ) {
                $checked = 'checked="checked"';
            } else {
                $checked = '';
            }
            $new_fields .= '<p class="field-w-mega-menu-img"><label class="image-url-label" for="edit-menu-item-w-mega-menu-img-' . $blue_flower_item->ID . '">' . esc_html__( 'Set Image URL' , 'blueflowermedia' ) . '
                <input id="blue-flower-banner-image' . $blue_flower_item->ID . '" class="blue-flower-banner-image" name="menu-item-mega-menu-img[' . $blue_flower_item->ID . ']" value="' . esc_url( $valtxt ) . '" type="text" /></label></p>';
        }
        return $new_fields;
    }

    /**
     * Save the newly submitted moon_shop_fields
     * @hook {action} save_post
     */

    static function _save_post( $post_id , $post ) {

        if( $post->post_type !== 'nav_menu_item' ) {

            return $post_id; // prevent weird things from happening

        }

        $blue_flower_form_field_name = 'menu-item-mega-menu';

        $blue_flower_mega_menu_column = 'menu-item-mega-menu-column';

        $blue_flower_form_field_name_txt = 'menu-item-mega-menu-img';

        // @todo FALSE should always be used as the default $value, otherwise we wouldn't be able to clear checkboxes

        if( isset( $_POST[ $blue_flower_form_field_name ][ $post_id ] ) ) {

            $key = 'w-mega-menu';

            $value = stripslashes( $_POST[ $blue_flower_form_field_name ][ $post_id ] );

            update_post_meta( $post_id , $key , $value );

        } else {

            $key = 'w-mega-menu';

            update_post_meta( $post_id , $key , 0 );

        }

        if( isset( $_POST[ $blue_flower_mega_menu_column ][ $post_id ] ) ) {

            $key = 'w-mega-menu-column';

            $value = stripslashes( $_POST[ $blue_flower_mega_menu_column ][ $post_id ] );

            update_post_meta( $post_id , $key , $value );

        } else {

            $key = 'w-mega-menu-column';

            update_post_meta( $post_id , $key , '' );

        }

        if( isset( $_POST[ $blue_flower_form_field_name_txt ][ $post_id ] ) ) {

            $key = 'w-mega-menu-img';

            $value = stripslashes( $_POST[ $blue_flower_form_field_name_txt ][ $post_id ] );

            update_post_meta( $post_id , $key , $value );

        } else {

            $key = 'w-mega-menu-img';

            update_post_meta( $post_id , $key , '' );

        }

    }

}

// @todo This class needs to be in it's own file so we can include id J.I.T.

// requiring the nav-menu.php file on every page load is not so wise

// require_once ABSPATH . 'wp-admin/includes/nav-menu.php';

class W_Walker_Nav_Menu_Edit extends Walker_Nav_Menu_Edit_Custom {

    function start_el( &$blue_flower_output , $blue_flower_item , $blue_flower_depth = 0 , $blue_flower_args = Array() , $current_object_id = 0 ) {

        $blue_flower_item_output = '';

        parent::start_el( $blue_flower_item_output , $blue_flower_item , $blue_flower_depth , $blue_flower_args , $current_object_id = 0 );

        // Inject $new_fields before: <div class="menu-item-actions description-wide submitbox">

        if( $new_fields = W_Nav_Menu_Item_Custom_Fields::get_field( $blue_flower_item , $blue_flower_depth , $blue_flower_args ) ) {

            $blue_flower_item_output = preg_replace( '/(?=<div[^>]+class="[^"]*submitbox)/' , $new_fields , $blue_flower_item_output );

        }

        $blue_flower_output .= $blue_flower_item_output;

    }

}

// Add extra moon_shop_fields to menu item hook

add_filter( 'w_nav_menu_item_additional_fields' , 'w_menu_item_additional_fields' );

function w_menu_item_additional_fields( $blue_flower_fields ) {

    $blue_flower_fields[ 'mega-menu' ] = array( 'name' => 'w-mega-menu' , 'label' => esc_html__( 'Mega Menu' , 'blueflowermedia' ) , 'container_class' => 'mega-menu-checkbox' , 'input_type' => 'checkbox' );

    $blue_flower_fields[ 'mega-menu-column' ] = array( 'name' => 'w-mega-menu-column' , 'label' => esc_html__( 'Column Number' , 'blueflowermedia' ) , 'container_class' => 'mega-menu-checkbox' , 'input_type' => 'text' );

    $blue_flower_fields[ 'mega-menu-img' ] = array( 'name' => 'w-mega-menu-img' , 'label' => esc_html__( 'Mega Menu Image' , 'blueflowermedia' ) , 'container_class' => 'mega-menu-image' , 'input_type' => 'button' );

    return $blue_flower_fields;

}
