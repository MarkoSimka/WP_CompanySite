<?php
/*
Template Name: Home Page
*/

get_header();
?>

<main>
    <div class="content">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>

    <?php get_template_part('template-parts/lead-form'); ?>
</main>

<?php get_footer(); ?>