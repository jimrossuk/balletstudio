<?php

get_header();
?>
<main>
<?
//Content goes here
get_template_part('template-parts/announcement');
get_template_part('template-parts/hero');
get_template_part('template-parts/main-content');
get_template_part('template-parts/news');
//get_template_part('template-parts/calender_new');
get_template_part('template-parts/calender');
get_template_part('template-parts/twitter');

?>
</main>
<?php
get_footer();