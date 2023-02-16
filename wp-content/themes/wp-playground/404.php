<?php
/* Generic 404 template */

get_header(); ?>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>We're sorry, we cannot find that page!</h1>
                    <p>You're seeing this message because:</p>
                    <ul>
                        <li>The page may have moved</li>
                        <li>The page no longer exists</li>
                        <li>The link you clicked is incorrect</li>
                    </ul>

                    <p>Why not search our website using the form below? Alternatively you can visit the <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Homepage">Homepage</a>.</p>

                    <form action="<?php echo esc_url( home_url( '/' )); ?>" method="get">
                        <fieldset>
                            <label for="search">Search</label>
                            <input id="search" name="s" type="text" value="<?php the_search_query(); ?>" placeholder="Enter a keyword or phrase">
                            <input name="submit" type="submit" value="Search">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>