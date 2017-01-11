<?php

/**
* Implements of hook_views_plugins(). Adds a view style to views UI interface.
*/

function bootstrap_wookmark_views_plugins() {
 return array(
   'style' => array(
     'wookmark' => array(
       'title' => t('Wookmark'),
       'help' => t('Displays content as pinterest.'),
       'handler' => 'views_bootstrap_wookmark_plugin_style',
       'theme' => 'views_bootstrap_wookmark',
       'uses row plugin' => TRUE,
       'uses row class' => TRUE,
       'uses grouping' => TRUE,
       'uses options' => TRUE,
       'type' => 'normal',
       'even empty' => TRUE,
     ),
   ),
 );
}

class views_bootstrap_wookmark_plugin_style extends views_plugin_style {

}
