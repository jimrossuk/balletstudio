<?php get_header(); ?>

<?php
$args = [
     'posts_per_page'=>100
 ]; 
$query= new WP_Query($args);

    ?> <h1 class="news-headline">News</h1> <?php
    while ($query->have_posts()):
        $query->the_post(); 
?>
    <section class="news-section-page">
        <div class="news-content-page">
            <div class="news-page">
                <?php the_post_thumbnail('full');?>
            <p class="news-post-date">Posted on: <?php the_date('d/m/Y'); ?> </p>
            <h1 class="title-news-page">
                <?php the_title(); ?>
            </h1>
                <?php the_content(); ?>        
            </div>       
        </div>
    </section>    
    <?php endwhile; ?>
<?php get_footer(); ?>
