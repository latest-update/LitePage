<?php

/* * *
*
    LaitonRoute
    Created
        by @singlephon
            Rakhat Bakytzhanov
*
* * */

header('Content-Type:text/html;charset=utf-8');

/*
 * v0.1
 */

/*
 *  Put this file in main directory of your web project
 *  Don't forget edit your '.htaccess' file as
 *
 *  RewriteEngine On
 *  RewriteCond %{REQUEST_FILENAME} !-f
 *  RewriteRule ^(.+)$ index.php?q=$1 [L,QSA]
 *
 */

session_start();


/*
 * There is should be some handlers
 * before connect 'web.php' file
 * ex. check auth, autoload, config, etc.
 */
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/App/Settings/config.php';
require __DIR__ . '/App/Settings/def_functions.php';

/*
 * As 'Laravel' there is 'web.php' and 'api.php'
 * files exist. If you want use LaitonRoute as router of your
 * RestApi, then you need write your routes in api.php file.
 * Remember that it's need access as http://yourSite/api/
 */


require __DIR__ . '/Route/web.php';

/*
 * Route mode you can change in 'config.php'
 */

require __DIR__ . '/App/Settings/driver.php';



