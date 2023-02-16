<!doctype html>
<html dir="ltr" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header>
    <div class="container">
        <div class="row">
            <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Homepage">Homepage</a>

            <nav class="main-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
            </nav>

            <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                <fieldset>
                    <label for="search">Search</label>
                    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>">
                    <input type="submit" name="submit" value="Search">
                </fieldset>
            </form>
        </div>
    </div>
</header>