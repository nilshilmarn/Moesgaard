<?php 

/**
 * 
 * The header file
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 * 
 * @package moesgaard
 * @since moesgaard v1.0
 * 
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

    <div id="top-navigation">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6">
                <?php wp_nav_menu(
                    array(
                        'theme_location'        => 'primary', // as registered in functions.php
                        'depth'                 => 3,
                        'container'             => 'nav',
                        'container_class'       => 'main-menu',
                        'menu_class'            => 'top-menu d-flex flex-row navigation justify-content-end list-unstyled',
                        'fallback_cb'           => false
                    )
                    ); ?>
            </div>
        </div>
    </div>
</div>