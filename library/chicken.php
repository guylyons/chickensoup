<?php

function my_login_logo()
{
    ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri();
    ?>/assets/images/c3k/c3k-chicken.svg);
            padding-bottom: 30px;
        }
        body {
          border-top: 5px solid #ef4b26;
          background-color: #FBFBFB !important;
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'my_login_logo');

function my_login_logo_url()
{
    return 'http://www.chicken3000.com';
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
    return 'Chicken 3000';
}
add_filter('login_headertitle', 'my_login_logo_url_title');

?>
