<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
/**
 * Classic Editor.
 */

function custom_taxonomy() {
 
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
                'name' => 'Các loại sản phẩm',
                'singular' => 'Loại sản phẩm',
                'menu_name' => 'Loại sản phẩm'
        );
 
        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => false,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
 
        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('loai-san-pham', 'post', $args);
 
}
 
// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy', 0 );
add_filter('use_block_editor_for_post', '__return_false');

