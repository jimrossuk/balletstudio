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

    <!-- Carosouel  -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <img class="d-block w-100" src="..." alt="First slide"> -->
            </div>
            <div class="carousel-item">
                <!-- <img class="d-block w-100" src="..." alt="Second slide"> -->
            </div>
            <div class="carousel-item">
                <!-- <img class="d-block w-100" src="..." alt="Third slide"> -->
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="news-buttons">
        <a class="button purple" href= "<?php echo get_field('news_button')["url"];?>"><?php echo get_field('news_button')['title'];?></a>
    </div>

    
</section>
