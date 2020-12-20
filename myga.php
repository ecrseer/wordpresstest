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

function log_wsaved($id_post){
    $post_log = get_stylesheet_directory() . '/post_log.txt';
    $msg = get_the_content() . ' na data de ' . get_the_date();

      if(file_exists($post_log)){
        $fs = fopen($post_log,'a');
        fwrite($fs,$msg."\n");
      }else{
          $fs = fopen($post_log,'w');
          fwrite($fs,$msg);
      }
      fclose($fs);
    
}

add_action('save_post','log_wsaved')



