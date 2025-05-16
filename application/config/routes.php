<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = "login/index";
$route['loginn'] = "login/login";
$route['dashboard'] = "dashboard/index";

$route['barang'] = "barang/index";
$route['jenis'] = "jenis_barang/index";
$route['regis'] = "login/regis";