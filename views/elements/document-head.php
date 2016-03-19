<head><?php
        /* Defines a default stylesheet, for when a specific alternative isn't given */
        $default_style = 'app';

        if (empty($custom_style) || $custom_style == 'main' || $custom_style == 'default') { /* Uses default stylesheet when there is no custom style declared (or it is declared to be the default) */
            $stylesheet = $default_style . '.css';
        } else { /* Sets the stylesheet to be whatever was passed */
            $stylesheet = $custom_style . '.n.css';
        }
    ?><title><?php
        if (isset($page_name) && $page_name != 'default') { /* Loads page name into the title when not on the homepage */
            echo ucfirst($page_name) . ' - ';
        }
        echo $site_name;
    ?></title>
    <link rel="stylesheet" href="<?php echo style . $stylesheet  /* Inserts stylesheet into document */ ?>" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
