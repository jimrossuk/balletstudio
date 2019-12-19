<section class ="hero-section">
    
<p class="announcement">  <?php echo get_field('announcement') ; ?> </p>
<img src ="<?php
echo get_field('hero_photo');
?>"> 

<div class = "hero-section-text">

<h2 class= "tagline"> <?php
echo get_field('tagline');
?></h2>

<p class = "discover">
    <?php 
    echo get_field('discover');
    
    ?>
</p>
</div> <!-- End of 'hero-secion' -->
</section>  <!-- End of 'hero-secion' -->
