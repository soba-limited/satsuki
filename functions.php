<?php

define('WPCF7_AUTOP', false);

function webst8_setup()
{
    //ここに関数の中身を記述します。
    add_theme_support('post-thumbnails'); //アイキャッチ画像をON
}


add_theme_support('post-thumbnails');

// 管理者権限を持たないユーザーは管理者バーを非表示
if (!current_user_can('manage_options')) {
    show_admin_bar(false);
}

function keika_time($days)
{
    $today = date_i18n('U');
    $entry_day = get_the_time('U');
    $keika = date('U', ($today - $entry_day)) / 86400;
    if ($days > $keika) :
        echo '<span class="new_icon">NEW</span>';
    endif;
}

wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), false, true);

function my_mwform_value($value, $name)
{
    if ($name === 'y-job' && !empty($_GET['job']) && !is_array($_GET['job'])) {
        return $_GET['job'];
    }
    return $value;
}
add_filter('mwform_value_mw-wp-form-67', 'my_mwform_value', 10, 2);

function delete_jquery()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
}
add_action('init', 'delete_jquery');

//wp-block-library読み込み停止
function remove_unuse_css()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'remove_unuse_css', 9999);
