<?php

function miracle_register_widgets(){

  register_sidebar( array(
    'name' => "Виджет поделиться в соц.сетях",
    'id' => 'social-icon',
    'description' => 'Этот виджет отображает ссылки поделиться',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
  ) );

}

add_action( 'widgets_init', 'miracle_register_widgets' );