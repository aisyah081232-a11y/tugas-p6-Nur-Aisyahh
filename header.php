<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php bloginfo('name'); ?> -
        <?php bloginfo('description'); ?>
    </title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">

    <div class="header-content">

        <div class="site-logo">
            <h1>
                <a href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>

            <p>
                <?php bloginfo('description'); ?>
            </p>
        </div>

    </div>

</header>

<nav class="site-navigation">

    <div class="container">

        <a href="<?php echo home_url(); ?>">Beranda</a>

        <a href="#">Artikel</a>

        <a href="#">Tentang</a>

        <a href="#">Kontak</a>

    </div>

</nav>