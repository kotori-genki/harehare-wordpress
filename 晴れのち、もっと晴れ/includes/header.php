<!-- #navArea -->
<div class="header">
    <div id="navArea">
        <nav>
            <?php
            /*メニューIDを取得する*/
            $menu_name = 'grobal_nav';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations[$menu_name]);

            $menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>
            <div class="inner">
                <ul>
                    <?php foreach ($menu_items as $item) : ?>
                        <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="sns_navgation">
                <ul>
                    <li><a href="https://www.instagram.com/harenochi.mottohare" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/image/sns_icon/instagram_icon.png" alt="instagram"></a></li>
                    <li><a href="https://twitter.com/@ikuyaa198" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns_icon/twitter_icon.png" alt="twitter"></a></li>
                    <li><a href="https://youtube.com/@harenochi.mottohare" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns_icon/youtube_icon.png" alt="youtube"></a></li>
                </ul>
            </div>
        </nav>
        <div class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="mask"></div>
    </div>

    <h1><a class="logo" href="index.php">HARE HARE</a></h1>

</div>

<div class="reservation_nav">
    <h1><a class="reservation_font" href="#">|ご予約|</a></h1>
</div>