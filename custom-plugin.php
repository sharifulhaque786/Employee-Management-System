<?php
/*
 * Plugin Name:   Employee Management System
 * Description:   Our custom WordPress plugin enhances your website's functionality by adding tailored features designed specifically to meet your needs.
 * Plugin URI:   https://sfl.media/
 * Author:   Shariful Haque
 * Author URI:   https://sfl.media/
 * Version:   1.0.0
 */

// Directory PATH
define("EMS_PLUGIN_PATH", plugin_dir_path(__FILE__));

// Directory URI PATH
define("EMS_PLUGIN_URL", plugin_dir_url(__FILE__));

// Calling action hook to add menu
add_action('admin_menu', 'ems_add_admin_menu');

function ems_add_admin_menu()
{
    add_menu_page("Employee System | Employee Management System", "Employee System", "manage_options", "employee-system", "ems_crud_system", "dashicons-admin-home", 23);

    add_submenu_page('employee-system', 'Add Employee', 'Add Employee', "manage_options", 'employee-system', 'ems_crud_system', );

    add_submenu_page('employee-system', 'List Employee', 'List Employee', "manage_options", 'list-employee', 'ems_list_employee', );
}

// Menu handle Callback
function ems_crud_system()
{
    include_once(EMS_PLUGIN_PATH . 'pages/add-employee.php');
}

// Submenu handle Callback
function ems_list_employee()
{
    include_once(EMS_PLUGIN_PATH . 'pages/list-employee.php');
}

register_activation_hook(__FILE__, "ems_create_table");
//Create Table At Database
function ems_create_table()
{
    global $wpdb;
    $table_prefix = $wpdb->prefix;
    $sql = "
    CREATE TABLE {$table_prefix}ems_form_data (
        `id` int NOT NULL AUTO_INCREMENT,
        `name` varchar(120) DEFAULT NULL,
        `email` varchar(80) DEFAULT NULL,
        `phoneNo` varchar(50) DEFAULT NULL,
        `gender` enum('male','female','other') DEFAULT NULL,
        `designation` varchar(50) DEFAULT NULL,
        PRIMARY KEY (`id`)
       ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

    $wpdb->query($sql);

    //include_once ABSPATH . 'wp-admin/includes/update.php';
}





// Add CSS / JS to plugin
add_action("admin_enqueue_scripts", "ems_add_plugin_assets");

function ems_add_plugin_assets()
{
    // styles (css)
    wp_enqueue_style("ems-bootstrap-css", EMS_PLUGIN_URL . "/css/bootstrap.min.css", array(), "1.0.0", "all");

    wp_enqueue_style("ems-datatable-css", EMS_PLUGIN_URL . "/css/jquery.dataTables.min.css", array(), "1.0.0", "all");

    wp_enqueue_style("ems-custom-css", EMS_PLUGIN_URL . "/css/custom.css", array(), "1.0.0", "all");

    // js (javascript plugin files)
    wp_enqueue_script("ems-bootstrap-js", EMS_PLUGIN_URL . "/js/bootstrap.min.js", array("jquery"), "1.0.0");
    wp_enqueue_script("ems-datatable-js", EMS_PLUGIN_URL . "/js/jquery.dataTables.min.js", array("jquery"), "1.0.0");
    wp_enqueue_script("ems-validate-js", EMS_PLUGIN_URL . "/js/jquery.validate.min.js", array("jquery"), "1.0.0");
    wp_enqueue_script("ems-custom-js", EMS_PLUGIN_URL . "/js/custom.js", array("jquery"), "1.0.0");

    //wp_add_inline_script("ems-validate-js", file_get_contents(EMS_PLUGIN_URL . "/js/custom.js"));
}