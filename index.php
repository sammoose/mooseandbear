<?php

    /* Resets / declares the current page and stylesheet, sets site name */
    $page_name = '';
    $custom_style = '';
    $site_name = 'Moose & Bear';

    /* Defines a ton of contants which become useful when developing the site */
    require 'def.php';
    /* Pulls in webroot index to handle setting up and laying out the requested page */
    require APP_DIR . DS . WEBROOT_DIR . DS . 'index.php';
