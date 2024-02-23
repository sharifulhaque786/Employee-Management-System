<?php
/*
 * Plugin Name:   Employee Management System
 * Description:   Our custom WordPress plugin enhances your website's functionality by adding tailored features designed specifically to meet your needs.
 * Plugin URI:   https://sfl.media/
 * Author:   Shariful Haque
 * Author URI:   https://sfl.media/
 * Version:   1.0.0
 */

define("WP_PLUGIN_DIR", plugin_dir_path(__FILE__));

add_action('admin_menu', 'ems_add_admin_menu');

function ems_add_admin_menu()
{
    add_menu_page("Employee System | Employee Management System", "Employee System", "manage_options", "employee-system", "ems_crud_system", "dashicons-admin-home", 23);

    add_submenu_page('employee-system', 'Add Employee', 'Add Employee', "manage_options", 'employee-system', 'ems_crud_system', );

    add_submenu_page('employee-system', 'List Employee', 'List Employee', "manage_options", 'list-employee', 'ems_list_employee', );
}

function ems_crud_system()
{
    include_once(WP_PLUGIN_DIR . 'pages/add-employee.php');
}

function ems_list_employee()
{
    include_once(WP_PLUGIN_DIR . 'pages/list-employee.php');
}





// Add CSS / JS to plugin
add_action("admin_enqueue_scripts", "ems_add_plugin_assets");

function ems_add_plugin_assets()
{
    // styles (css)
    wp_enqueue_style("ems-bootstrap-css", WP_PLUGIN_DIR . "/Users/mdsharifulhaque/Local Sites/learning-wordpress-plugin/app/public/css/bootstrap.min.css", array(), "1.0.0", "all");

    wp_enqueue_style("ems-datatable-css", WP_PLUGIN_DIR . "/css/jquery.dataTables.min.css", array(), "1.0.0", "all");

    wp_enqueue_style("ems-custom-css", WP_PLUGIN_DIR . "/css/custom.css", array(), "1.0.0", "all");

    // js (javascript plugin files)
    wp_enqueue_script("ems-bootstrap-js", WP_PLUGIN_DIR . "/js/bootstrap.min.js", array("jquery"), "1.0.0");
    wp_enqueue_script("ems-datatable-js", WP_PLUGIN_DIR . "/js/jquery.dataTables.min.js", array("jquery"), "1.0.0");
    wp_enqueue_script("ems-validate-js", WP_PLUGIN_DIR . "/js/jquery.validate.min.js", array("jquery"), "1.0.0");
    // wp_enqueue_script("ems-custom-js", WP_PLUGIN_DIR."js/custom.js", array("jquery"), "1.0.0");

    //wp_add_inline_script("ems-validate-js", file_get_contents(WP_PLUGIN_DIR . "/js/custom.js"));
}