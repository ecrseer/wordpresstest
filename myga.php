<?php

/**
 * @package aga
 * @version 1.7.2
 */
/*
Plugin Name: mymyga
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: gab 3
Version: 1.7.2
Author URI: http://ma.tt/
*/
function someth_ing($content){
    if(is_single()){
        return $content . '<p>textosinho em</p>';
    }
}


add_filter( 'the_content', 'someth_ing' );
