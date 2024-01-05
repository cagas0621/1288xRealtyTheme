<?php

get_header();

$url_parts = explode('/', rtrim(home_url($_SERVER['REQUEST_URI']), '/'));
$url_name = end($url_parts);

switch ($url_name) {
    case "model":
        require get_template_directory() . '/pages/model.php';
        break;
    case "about":
        require get_template_directory() . '/pages/about.php';
        break;
    case "contact":
        require get_template_directory() . '/pages/contactus.php';
        break;
    case "sage-house":
        require get_template_directory() . '/pages/sage.php';
        break;
    case "harper-villa":
        require get_template_directory() . '/pages/harper.php';
        break;
    case "ivy-house":
        require get_template_directory() . '/pages/ivy.php';
        break;
    case "stella-villa":
        require get_template_directory() . '/pages/stella.php';
        break;
    default:
        wp_redirect(home_url());
}

get_footer();
