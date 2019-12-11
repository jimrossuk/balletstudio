<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_type' => 'event',
    'meta_key' => 'date_time_start',
    'orderby' => 'meta_key',
    'order' => 'ASC'
);
    $query = new WP_Query($args);
?>
    <section class="the_calender">
        <h1 class="">
            Calender
        </h1>
 <?php   
    while ($query->have_posts()):
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
 ?> 
        <div class="something">
            <?php echo "get_feild('date')";  ?>
        </div>     
    <?php endwhile;?>


</section>
