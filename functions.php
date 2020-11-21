<?php

//function get_main_image_url_by_uri($uri)
//{
//    preg_match_all('~/\w+[-]*\w*[-]*\w*/\z~', $uri, $matches);
//    $image_item = trim($matches[0][0], '/');
//    $attachment_urls = 'http://www.moxiekids.co.za/wp-content/themes/moxiekids-storefront-child/img/' . $image_item . '.jpg';
//    return array($attachment_urls, $image_item);
//}

function wp_enqueue_moxie_scripts()
{
    wp_enqueue_style('blueprint', 'https://unpkg.com/blueprint-css@3.1.1/dist/blueprint.min.css');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'wp_enqueue_moxie_scripts');
