<?php
/*
 * Plugin Name:   Employee Management System
 * Description:   Our custom WordPress plugin enhances your website's functionality by adding tailored features designed specifically to meet your needs.
 * Plugin URI:   https://sfl.media/
 * Author:   Shariful Haque
 * Author URI:   https://sfl.media/
 * Version:   1.0.0
 */

//define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));
define("MY_PLUGIN_PATH", site_url('/wp-content/plugins/Employee-Management-System/'));

add_action('admin_menu', 'ems_add_admin_menu');

function ems_add_admin_menu()
{
    add_menu_page("Employee System | Employee Management System", "Employee System", "manage_options", "employee-system", "ems_crud_system", "dashicons-admin-home", 23);

    add_submenu_page('employee-system', 'Add Employee', 'Add Employee', "manage_options", 'employee-system', 'ems_crud_system', );

    add_submenu_page('employee-system', 'List Employee', 'List Employee', "manage_options", 'list-employee', 'ems_list_employee', );
}

function ems_crud_system()
{
    include_once('pages/add-employee.php');
}

function ems_list_employee()
{
    include_once('pages/list-employee.php');
}





// Add CSS / JS to plugin
add_action("admin_enqueue_scripts", "ems_add_plugin_assets");

function ems_add_plugin_assets()
{
    // styles (css)
    wp_enqueue_style("ems-bootstrap-css", MY_PLUGIN_PATH . "/css/bootstrap.min.css", array(), "1.0.0", "all");

    wp_enqueue_style("ems-datatable-css", MY_PLUGIN_PATH . "/css/jquery.dataTables.min.css", array(), "1.0.0", "all");

    wp_enqueue_style("ems-custom-css", MY_PLUGIN_PATH . "/css/custom.css", array(), "1.0.0", "all");

    // js (javascript plugin files)
    wp_enqueue_script("ems-bootstrap-js", MY_PLUGIN_PATH . "/js/bootstrap.min.js", array("jquery"), "1.0.0");
    wp_enqueue_script("ems-datatable-js", MY_PLUGIN_PATH . "/js/jquery.dataTables.min.js", array("jquery"), "1.0.0");
    wp_enqueue_script("ems-validate-js", MY_PLUGIN_PATH . "/js/jquery.validate.min.js", array("jquery"), "1.0.0");
    wp_enqueue_script("ems-custom-js", MY_PLUGIN_PATH . "/js/custom.js", array("jquery"), "1.0.0");

    //wp_add_inline_script("ems-validate-js", file_get_contents(MY_PLUGIN_PATH . "/js/custom.js"));
}