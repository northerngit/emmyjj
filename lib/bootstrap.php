<?php

session_start();

require 'class/emmyjj.php';

/**
 * Constants
 */
define('WWW_ROOT', '\/');
define('ROOT', dirname(dirname(__FILE__)));
define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASS', '');

define('FORM_FRESHNESS', 60*15);
define('CONTACT_EMAIL', 'enquiries@emmyjj.com');
define('WEB_ADMIN_CONTACT', 'enquiries@emmyjj.com');

\EmmyJJ::setup();
