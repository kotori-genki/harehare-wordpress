<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="page-header wrapper">
        <?php get_template_part('includes/header'); ?>
    </header>
    <div class="back-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/image/kayabuki.JPG);"></div>

    <!-- 動く背景画像 -->
    <div class="home-content wrapper">
        <h2 class="page-title">晴れのち、もっと晴れ</h2>
    </div>
    <div class="main_imgBox">
        <div class="main_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/image/kayabuki.JPG);"></div>
        <div class="main_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/image/ukulele_woman.JPG);"></div>
        <div class="main_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/image/rice_woman.JPG);"></div>
    </div>

    <!-- お知らせ欄 -->
    <div class="wrapper information">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
                <div class="content">
                    <ul>
                        <a href="<?php the_permalink(); ?>">
                            <li>
                                <p>
                                    <?php /*カテゴリー情報の取得*/
                                    $cat = get_the_category();
                                    $cat = $cat[0];
                                    ?>
                                    <?php the_time(get_option('date_format')); ?>　<?php /*カテゴリー名の出力*/ echo $cat->cat_name; ?>
                                </p>
                                <br>
                                <p class="information-tite">
                                    <?php the_title(); ?>
                                </p>
                            </li>
                        </a>
                    </ul>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>お知らせはありません</p>
        <?php endif; ?>
        <div class="more-information">
            <a href="#">
                <p>|全てのお知らせを見る｜</p>
            </a>
        </div>
    </div>

    <!--メインコンテンツ-->
    <div class="gradient">
        <main class="content-title">
            <p>
                築百年の茅葺屋根<br>
                集落丸ごと農家民宿
            </p>
        </main>
        <main class="main-content wrapper">
            <div class="main-animationTarget">
                <p>今まさに消えかけようとしている限界集落に光をさす</p>
                <br>
                <p>宿だけではなく、集落全体で楽しむ古民家宿</p>
                <p>ここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入ります
                </p>
            </div>
        </main>
    </div>

    <!--カード型紹介-->
    <main class="card">
        <ul class="card-content">
            <li class="card-animationTarget">
                <img src="<?php echo get_template_directory_uri(); ?>/image/yasai.JPG" alt="野菜画像">
                <div class="card-contentText">
                    <h2>Dummy Title</h2>
                    <p>ここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入ります</p>
                </div>
            </li>

            <li class="card-animationTarget">
                <img src="<?php echo get_template_directory_uri(); ?>/image/baketu.JPG" alt="野菜画像">
                <div class="card-contentText">
                    <h2>Dummy Title</h2>
                    <p>ここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入ります</p>
                </div>
            </li>

            <li class="card-animationTarget">
                <img src="<?php echo get_template_directory_uri(); ?>/image/yuusyoku.JPG" alt="野菜画像">
                <div class="card-contentText">
                    <h2>Dummy Title</h2>
                    <p>ここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入ります</p>
                </div>
            </li>
        </ul>
    </main>

    <!-- 人物紹介 -->
    <div class="gradient-human">
        <main class="content-title-human">
            <p>
                日本一周の<br>
                おもてなし
            </p>
        </main>
        <main class="main-content wrapper">
            <div class="main-animationTarget">
                <p>表題表題表題表題表題</p>
                <br>
                <p>サブ表題サブ表題サブ表題サブ表題</p>
                <p>ここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入りますここに文章が入ります
                </p>
            </div>
        </main>
        <main class="human wrapper">
            <ul>
                <li class="human-content">
                    <div class="human-contentText">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/human/ikuya.jpg" alt="人物画像">
                        <p>1993年福井県鯖江市生まれ。幼少期を福井県のド田舎で生活し、大学進学とともに上京。山梨大学教育学部で教育学を学び小中高の教員免許を取得。大学卒業後は180日間の海外放浪、その後旅行会社H.I.Sに就職し社会の洗礼を浴びる。1年後大手IT企業「食べログ」に転職。念願のホワイト企業で3年間の勤務しながら、「会社員アドレスホッパー」として家無し生活、「Barいくやの家」を開業。会社員をしながら複業で他種の経験を積み、2021年9月〜会社員を辞めて「スーパーカブ日本一周の旅」275日16700kmの旅へ。途中、広島県で最愛の彼女ゆうと出逢い、2022年8月〜福井県永平寺町のばあちゃん家に移住。いまにいたる。</p>
                        <h2 class="human-contentName">よしざわ　いくや</h2>
                    </div>
                </li>
                <li class="human-content">
                    <div class="human-contentText">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/human/yuuki.jpg" alt="人物画像">
                        <p>1996年京都府京田辺市出身。身長158センチ。体重リンゴ３つ分🍎🍎🍎<br>生粋の関西人。わくわくすることが大好物。<br>わくわくに釣られて気づけば大好きな広島県から福井県に。</p>
                        <h2 class="human-contentName">よしざわ　ゆうき</h2>
                    </div>
                </li>
            </ul>
        </main>
    </div>

    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>

</html>