<?php

/**
 * @package aga
 * @version 1.7.2
 */
/*
Plugin Name: mymyga
Plugin URI: http://#
Description: testando
Author: gab 3
Version: 1.7.2
Author URI: http://github.com/ecrseer
*/
function someth_ing($content){
    if(is_single()){
        return $content . '<p>textosinho em</p>';
    }
}


add_filter( 'the_content', 'someth_ing' );
