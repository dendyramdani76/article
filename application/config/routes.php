<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['default_controller'] = 'post';
$route['add'] = 'post/add';

$route['preview'] = 'post/preview';
$route['read-post/(:num)'] = 'post/read/$1';
$route['edit/(:num)'] = 'post/edit/$1';
$route['delete/(:num)'] = 'post/delete/$1';



