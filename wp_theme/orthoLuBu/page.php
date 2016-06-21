<?php get_header(); ?>
<main class="container" role="main">
    <?php
    while (have_posts()) {
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
    <?php the_post_header('h2', $post) ?>
            </header>
            <div class="entry">
    <?php the_content(); ?>
            </div>
        </article>
<?php } ?>
</main>
<?php
get_footer();
