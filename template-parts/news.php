<?php 
 $args = [
     'posts_per_page'=>3
 ]; 
$query= new WP_Query($args);
?>

<section class="news-section">
    <h1>News</h1>
    <div class="news-content">

    <?php while ($query->have_posts()):
        $query->the_post();
    ?>
        <div class="news">
            <?php the_post_thumbnail('full');?>
            <p class="news-post-date">Posted on: <?php the_date('d/m/Y'); ?> </p>    
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
           
            <?php the_content(); ?>        
        </div> 
        <?php
        endwhile;    
                ?>
    <?php wp_reset_query() ?>
   </div> 
    <!-- end of content -->
    <div class="news-buttons">
    <a class="button purple" href= "<?php echo get_field('news_button')["url"];?>"><?php echo get_field('news_button')['title'];?></a>
    </div>


    
</section>
