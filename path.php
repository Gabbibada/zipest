<?php

/* 
 * Copyright (C) 2017 Bada Gabriel. This project is created by Boemax. Modify it under the terms provided by us
 */

require_once('connections/param.php');

$path = dirname(__FILE__);

$scheme = 'http';
if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on')
    $scheme = 'https';

$suffix = $site_root == '..' ? '' : "/{$site_root}";

define('BASEURL', $scheme . "://" . $_SERVER['HTTP_HOST']);
define('SITEURL', BASEURL . "{$suffix}");
define('SITEIMGURL', SITEURL . "/img");
define('BASEPATH', str_replace("\\", "/", $path));
define('IMGPATH', BASEPATH . '/img');
define('INCPATH', BASEPATH . '/inc');
define('VIEWPATH', SITEURL . '/views');

require_once('connections/function.php');
