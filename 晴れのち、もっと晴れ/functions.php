<?php
add_action('init',function(){
    /*メニューをサポート*/
    register_nav_menus([
        'grobal_nav' => 'グローバルナビゲーション',
    ]);
});
