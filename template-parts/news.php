<?php 
 $args = [
     'posts_per_page'=>5
 ]; 
$query= new WP_Query($args);
?>

<section class="news-section">
    <h1>News</h1>

    <!-- Carosouel  -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <?php  newsFunction($query); ?>
            </div>
            <div class="carousel-item">
                <?php  newsFunction($query); ?>
            </div>
            <div class="carousel-item">
                <?php  newsFunction($query); ?>
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
        <?php wp_reset_query() ?>
    
    <div class="news-buttons">
        <a class="button purple" href= "<?php echo get_field('news_button')["url"];?>"><?php echo get_field('news_button')['title'];?></a>
    </div>   
</section>
