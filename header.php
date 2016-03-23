<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description')?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/css/all.css" />
    <script src="<?php bloginfo('template_url') ?>/js/respond.js"></script>
    <?php wp_head() ?>
</head>

<body>

<div class="header">
    <div class="center">
        <a class="logo" href="/"><img src="<?=get_theme_mod('header_logo')?>" width="364" height="86" alt="<?php bloginfo('blogname')?>" /></a>
        <div class="bible_verse">On the mountain of the LORD it will be provided. <span>&mdash;Genesis 22:14</span></div>
        <ul class="quick_links">
            <?php if (get_theme_mod('facebook')): ?>
                <li class="facebook"><a href="<?=get_theme_mod('facebook')?>">Facebook</a></li>
            <?php endif ?>
            <?php if (get_theme_mod('twitter')): ?>
                <li class="twitter"><a href="<?=get_theme_mod('twitter')?>">Twitter</a></li>
            <?php endif ?>
            <?php if (get_theme_mod('member_login')): ?>
                <li class="login"><a href="<?=get_theme_mod('member_login')?>">Member Login</a></li>
            <?php endif ?>
        </ul>

        <?php wp_nav_menu([
            'theme_location' => 'main_menu',
            'depth' => 1,
            'menu_id' => 'menu',
            'menu_class' => 'menu',
            'container' => '',
        ]) ?>
    </div>
</div>
<div class="content">
    <div class="center">
        <div class="page">
            <?php if (has_post_thumbnail($post->ID)): ?>
                <div class="banner">
                    <?=get_the_post_thumbnail($post->ID, is_front_page() ? 'banner_large' : 'banner_small') ?>
                </div>
            <?php endif ?>
            <div class="wysiwyg">
                <?=get_sub_menu()?>