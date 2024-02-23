<?php
/*
 * Plugin Name:   Employee Management System
 * Description:   Our custom WordPress plugin enhances your website's functionality by adding tailored features designed specifically to meet your needs.
 * Plugin URI:   https://sfl.media/
 * Author:   Shariful Haque
 * Author URI:   https://sfl.media/
 * Version:   1.0.0
 */

define("EMS_PLUGIN_PATH", plugin_dir_path(__FILE__));

add_action('admin_menu', 'ems_add_admin_menu');

function ems_add_admin_menu()
{
    add_menu_page("Employee System | Employee Management System", "Employee System", "manage_options", "employee-system", "ems_crud_system", "dashicons-admin-home", 23);

    add_submenu_page('employee-system', 'Add Employee', 'Add Employee', "manage_options", 'employee-system', 'ems_crud_system', );

    add_submenu_page('employee-system', 'List Employee', 'List Employee', "manage_options", 'list-employee', 'ems_list_employee', );
}

function ems_crud_system()
{
    include_once(EMS_PLUGIN_PATH . 'pages/add-employee.php');
}

function ems_list_employee()
{
    include_once(EMS_PLUGIN_PATH . 'pages/list-employee.php');
}