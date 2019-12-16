<?php 
 $args = [
     'posts_per_page'=>9
 ]; 
$query= new WP_Query($args);
?>

<section class="news-section">
    <h1>News</h1>
    <!-- Carousel  -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <?php $counter = 0; ?>
        <div  class="carousel-inner">
                   
            <?php
                while ($query->have_posts()):
                    $query->the_post(); 
                    
                    if($counter % 3===0){  ?> 
                            <div  class="carousel-item make-this-flex <?php echo $counter === 0 ? "active"  :  ""  ?>">   
                            <?php
                    }
                    ?>
                    <div class="news-content ">
                        <!-- will display news posts -->
                        <div class="news">
                            <?php the_post_thumbnail('full');?>
                            <p class="news-post-date">Posted on: <?php the_date('d/m/Y'); ?> </p>
                            <h1 class="title">
                                <?php the_title(); ?>
                            </h1>
                            <?php the_content(); ?>        
                        </div>  
                        <!-- closes news  -->        
                    
                    <!-- closes News-content -->      
                </div>
                            <?php 
                    if (($counter +1) %3 ===0)  { ?>
                    <!-- what does this do? -->
                        </div>
                    
                        <?php
                        }          
                    $counter  ++;    
                endwhile; ?>
        </div>
           
            
            <!-- leave these 2 closing divs   can find there opening -->  
        </div>
    <!-- This closes  carousel-inner slide-->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
   
        <?php wp_reset_query() ?>
    
    <div class="news-buttons">
        <a class="button purple" href= "<?php echo get_field('news_button')["url"];?>"><?php echo get_field('news_button')['title'];?></a>
    </div> 
      <!--this closes the news-bottons-  -->
</section>
