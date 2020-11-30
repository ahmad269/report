<?php
defined('BASEPATH') or exit('No direct script access allowed');

// APP MY REPORT
// PRESENT TO
// PT JVC ELECTRONICS INDONESIA

// SUPERADMIN & ADMIN ROUTES
$route['dashboard']     = 'admin/dashboard';
$route['data_report'] = 'admin/data_report';
$route['data_user'] = 'admin/data_user';
$route['backup_data']   =   'admin/backup_data';

$route['profile']       = 'admin/profile';

// UR ROUTES
$route['data_ur']   = 'ur/data_ur';
$route['file_ur']   = 'ur/file_ur';
$route['import_file_ur']   = 'ur/file_ur/form_ur';
$route['export_file_ur']   = 'ur/file_ur/export_excel';

// VIM ROUTES
$route['data_vim']   = 'vim/data_vim';
$route['file_vim']   = 'vim/file_vim';
$route['import_file_vim']   = 'vim/file_vim/form_vim';
$route['export_file_vim']   = 'vim/file_vim/export_excel';


// FUNCTION ROUTES
$route['tambah_report'] = 'admin/data_report/tambah_report';

$route['block']    = 'portal/block';
$route['logout']    = 'portal/logout';
$route['default_controller'] = 'portal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
