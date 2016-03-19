<?php

    if (isset($_GET['page'])) { /* If we have come to a specific page, load it */
        $page_name = $_GET['page'];

        if ($page_name == 'home' || $page_name == 'index') { /* Making sure we're not getting sent to the homepage */
            $page_name = 'default';
        }

    } else { /* If we're getting sent to the root, load the homepage */
        $page_name = 'default';
    }

    /* If page requested doesn't exist, load the 404 page */
    if (!file_exists('views' . DS . $page_name . DS . 'index.php')) {
        $page_name = '404';
    }

    /* Loads in any page specific variables, such as extra stylesheets */
    include APP_DIR . DS . WEBROOT_DIR . DS . 'vars.php';

    /* Generates the page view */
    require 'views' . DS . 'elements' . DS . 'document-head.php';
    require 'views' . DS . 'elements' . DS . 'header.php';
    echo '<main>';
    if ($page_name == '404')  { /* Custom 404 message */
        echo '<h1>Oh no!</h1>';
    }
    /* Loads in any page specific content here */
    require 'views' . DS . $page_name . DS . 'index.php';
    echo '</main>';
    require 'views' . DS . 'elements' . DS . 'footer.php';
