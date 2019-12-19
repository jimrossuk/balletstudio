<?php
$args = [
     //What are these args???
     'posts_per_page'=> 520, 
     //how many posts do we want to get from CPT
     'post_type'  => 'event',
     //from the customFunction.php section.  "event"
     'meta_key' => 'date_time_start',
     // the "date_time_start" I think came from my Custom fields
     'orderby' => 'meta_value',
    // meta_value referse to 'meta_key' from above.
     'order' => 'ASC'
     //Assending order  Could be DSC--dessending

 ]; //accuiring the meta data from CPT
$query = new WP_Query($args);
// when creating a queery, follow this example.
// var_dump($query->posts); to check if its there   if so, delete the other stuff
?>

<?php get_header(); 
    
    ?>  
        <h1 class="cal-headline"> Calender</h1> 
<section class="cal-page-section">
    <?php
while($query->have_posts()):
    $query->the_post();
    ?>
            <?php 
            $start = get_field('date_time_start');
            $end =  get_field('date_time_finish');
            $start_datetime= explode(" ", $start);
            $end_datetime = explode(" ", $end);
            
            // setting up variables to check for time/ date and content
            $start_day = $start_datetime[0];
            $start_month = $start_datetime[1];
            $start_time = $start_datetime[4];
            $end_day = $end_datetime[0];
            $end_month = $end_datetime[1];
            $end_time= $end_datetime[4];
            ?>
        <div class="cal-page-area">
            
            <div class="full-date-cal-page">
                <h1 class ="date-cal">
                    <?php   echo $start_day; ?>   
                </h1>
                <h4 class ="month-cal"> 
                    <?php echo $start_month ; ?> 
                </h4>
            </div>
            <!-- full-date-cal-page end -->
            
             <div class ="time-cal">
                <!-- <?php
                // echo $start_time;
                // echo "-";
                // echo $end_time; 
                ?> -->
                </div> 
                <div class="flex-cal">
                    <div class ="details-cal">
                    <div class ="time-cal">
                <?php

                ?> <h2 class="title-cal"> <?php the_title(); ?> </h2> <?php
                
                echo $start_time;
                echo "-";
                echo $end_time; 
                ?>
                </div>
                        
                        <p> <?php get_field('subject'); ?> </p> 
                        
                        <p> Instructor:  <?php echo get_field('instructor');?>  </p> 
                        <p> Location: <?php echo get_field('location'); ?> </p> 
                        
                    </div>
                </div>
                
                <?php
            ?>

</div>

<?php endwhile; 

    ?></section> 
    <?php

    ?>



                
<?php get_footer(); ?>
