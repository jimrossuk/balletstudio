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
?>


<section class="the_calender">
    <h1 class="cal-1">Calendar</h1>
            <!-- copied from bootstrap -->
    <div id="carouselExampleIndicators" class="carousel " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleFade" data-slide-to="0" class=" active"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="2" ></li>
                </ol>
        <div class="calender-panel-flex"> 
            <div class="carousel-inner">
            <!-- starts carousel-inner -->
                <div class="carousel-item active">
                <!-- starts carousel-item -->

                    <!-- copied from bootstrap -->
                    <div class="flex  ">
                        <!-- made a box flex -->

                        <div class="date_calender">
                            <?php 
                            $counter = 0;
                            // counter to check if any days are to be posted

                            $previous_date = null;
                            // started a variable to store a previous date so we can check if tis the same...if it is, the posts from that day, will be placed under that date
                            while ($query->have_posts()):
                                // why the : not ; it replaces the {} so you need to put a endif/endwhile;
                                $query->the_post();
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
                                
                                    // The if statement happens before anything is outputed to the browser
                                    if ($previous_date && ($start_day.$start_month !== $previous_date)):
                                        // When the $previous_date is checked (first time), and still null, it if statement will stop and move to line 57 or next code bit.

                                        //once $previous_date has a day and month stored,(after the first itertion of the loop) (Feb 14), AND the day and month have been checked from above, the statement can see if it is NOT EQUAL to $previous_date. 
                                        //If that statement is true, then the {} bit can then proceed.
                                        $counter++;
                                        // how many days of output can counted
                                        ?>
                                        </div>
                                        <!-- start a counter... so we can close the <div class="date_calender test" -->

                                        <?php    
                                            if($counter % 4 ===0 ) :  ?>
                                                <!-- modulous to check for days to display -->
                                                </div>
                                                <!-- this ironicly closes the previousflex -->

                                                </div>
                                                <!-- closing the previous carousel-item -->
                                                <div class="carousel-item">
                                                    <div class ="flex"> 
                                                        <!-- to display the calender flex  -->
                                                
                                                <?php 
                                            endif;
                                                ?>
                                        <!-- This closes the div because the current date is different to previous date -->
                                            <div class="date_calender test">   
                                            <!--Opening a NEW DIV for events for a new date.. (Feb 17)   -->
                                        <?php
                                    endif;
                                        
                                if ($start_day.$start_month !== $previous_date):?>
                                    <!-- if statement to check if the day eg(Feb 14 is NOT stored in $previous_date)  then echo $start-day and $start_month   
                                    IF IT IS stored in $previous_date, THis code block will be skipped-->
                                        <div class="datewrapper">
                                            <h1 class = "date-time" >
                                                <?php echo $start_day; ?>   
                                            </h1>
                                            <p class="month-calander">
                                                <?php echo $start_month; ?>
                                            </p> 
                                        
                                        </div>            
                                        <?php
                                endif;
                                        ?> 
                                        <!-- This bit will alsways output ITS NOT IN AN IF STATEMENT-->
                                        <div class="cal-mark-up">

                                <a class="calendar-link-page" href ="http://local.ballet/calendar/"> <p class="calender-content">
                                        <?php the_title(); ?>
                                    </p>
                                
                                    <p class ="date-time-end">
                                        <?php  echo $start_time;
                                                echo "-";
                                                echo $end_time; 
                                        ?>   
                                    </p>
                                </a> 
                                        </div>
                                    <?php
                                        ?>
                                    <!-- this puts the day and month in $previous_date variable-->
                                <?php $previous_date = $start_day.$start_month ?>
                                <?php endwhile;?>

                                <?php   wp_reset_query()    ?>
                        </div>
                            <!-- closing date calender  -->
                    </div>
                    <!-- closing flex -->
                </div>
                <!-- closing carousel-item -->
            </div>
                <!-- closing carousel inner -->
                        </div>
                        
                    
    </div> <!-- closing carousel -->
                
                    <!-- end of calender-panel-flex -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>     

    <div class="news-buttons">
        <a 
            class="calender-button" 
            href= "<?php echo get_field('calander_button')["url"];?>"
        >
        <!-- getting the info -->
            <?php echo get_field('calander_button')['title'];?>
        </a>
        
            <!--end of indicators and read more  -->
    </div> 
    <!-- closing news-buttons -->
       
</section>

