<?php
  /*======================================
    初期設定
  ======================================*/
  function custom_theme_support() {

    /*
      title
    ----------------------------------- */
    add_theme_support('title-tag');

    /*
      thumbnails
    ----------------------------------- */
    add_theme_support('post-thumbnails');

    /*
      menu
    ----------------------------------- */
    add_theme_support('menus');

  }
  add_action('after_setup_theme', 'custom_theme_support');



  /*======================================
    スタイル・スクリプトの追加
  ======================================*/
  function read_script() {
    /*
      CSS
    ----------------------------------- */
    wp_enqueue_style('css', get_theme_file_uri() . '/assets/css/style.css');

    /*
      JS
    ----------------------------------- */
    wp_enqueue_script('js', get_theme_file_uri() . '/assets/js/main.js', '', '', true);
  }
  add_action('wp_enqueue_scripts', 'read_script');