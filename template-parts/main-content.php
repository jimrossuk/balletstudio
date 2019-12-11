<section class="main-1">
        <div class="main-text"> 
               
            <h1> <?php echo get_field('main_section_headline');?></h1>
       
            <h3> <?php echo get_field('main_section_second_headline');?></h3>
            <p> <?php echo get_field('main_section_main_text');?></p>
            
        <a class="welcome-button" href= "<?php echo get_field('main_section_button')["url"];?>"><?php echo get_field('main_section_button')['title'];?></a>


        </div> <!-- end of "main-text" div --> 

     
        
        <div class="main-pix">
         
            <a 
                class= "text-photo" 
                href ="<?php echo get_field('front_page_photo_link1');?>"
                style= "background-image: url('<?php echo get_field('welcome_photo1');?>' )" 
            >
                <?php echo get_field('text_on_photo1');?>
            </a>

            <a 
                class= "text-photo"
                href ="<?php echo get_field('front_page_photo_link2');?>"
                style= "background-image: url('<?php echo get_field('welcome_photo2');?>'  )" 
            >
                <?php echo get_field('text_on_photo2');?>
            </a>

            <a 
                class= "text-photo"
                href ="<?php echo get_field('front_page_photo_link3');?>" 
                style= "background-image: url('<?php echo get_field('welcome_photo3');?>'  )" 
            >
                <?php echo get_field('text_on_photo3');?>
            </a>




        </div>  <!-- End of "main-pix" div -->
       
</section>