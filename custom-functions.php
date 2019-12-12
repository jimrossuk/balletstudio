<?php 

// function add_acf_option_page() {
    
// if (function_exists('add_options_page')){
//     add_options_page(
//          'header', 'header','manage_options', 'header'
//     );
// }
// }
// add_action('admin_menu', "add_acf_option_page");

add_action('init', 'create_event_cpt');

function create_event_cpt(){
    $labels = array(
		'name'				=> __( 'Events ' ),
		'singular_name'	  => __( 'Event' ),
		'add_new'			=> __( 'Add Event' ),
		'add_new_item'		=> __( 'Add New Event' ),
		'edit_item'		  => __( 'Edit Event' ),
		'new_item'			=> __( 'New Event' ),
		'all_items'		  => __( 'All Events' ),
		'view_item'		  => __( 'View Event' ),
		'search_items'		=> __( 'Search Events' ),
		'not_found'		  => __( 'No Event found' ),
		'not_found_in_trash' => __( 'No events found in the Trash' ),
        'parent_item_colon'  => ''
    );

    $args = array(
		'label' => 'Event',
		'labels'		=> $labels,
		'menu_icon' => 'dashicons-groups',
		'description'	=> 'Upcoming Events',
		'public'		=> true,
		'menu_position' => 4,
		'supports'	  => array( 'title', 'thumbnail' ),
		'has_archive'	=> false,
		'show_ui' => true,
		'taxonomies' => array(),
		'hierarchical' => false,
    );

    register_post_type('event', $args);
}
/// may delte this at one point...
function fakeTweet(){ ?>

<div id="ctf" class="ctf ctf-type-usertimeline  ctf-styles" style="width: 100%;" data-ctfshortcode="{}" data-ctfneeded="0"><div class="ctf-tweets"><div class="ctf-item ctf-author-jimrossphoto ctf-new ctf-hide-avatar" id="1193972109615259653" style=""><div class="ctf-author-box"><div class="ctf-author-box-link" style="color: rgb(255, 255, 255);"><a href="https://twitter.com/JimRossPhoto" target="_blank" class="ctf-author-name" style="color: rgb(255, 255, 255);">Jim Ross</a><a href="https://twitter.com/JimRossPhoto" class="ctf-author-screenname" target="_blank" style="color: rgb(255, 255, 255);">@JimRossPhoto</a><span class="ctf-screename-sep">·</span><div class="ctf-tweet-meta"><a href="https://twitter.com/JimRossPhoto/status/1193972109615259653" class="ctf-tweet-date" target="_blank" style="color: rgb(255, 255, 255);">11/11/19</a></div></div></div><div class="ctf-tweet-content"><p class="ctf-tweet-text" style="">Must be Monday <a href="https://twitter.com/GaryLineker" target="_blank" rel="nofollow">@GaryLineker</a> and <a href="https://twitter.com/PeirsMorgan" target="_blank" rel="nofollow">@PeirsMorgan</a> are duelling. <a href="https://twitter.com/hashtag/lloveaduel" target="_blank" rel="nofollow">#lloveaduel</a></p></div><div class="ctf-tweet-actions"></div></div></div></div>
<?php   
}
//delete this function here and up at some point  Its the example tweet



// Function for the loop in News section ///
function newsFunction( $query1 ){ ?>
	<div class="news-content">

	 <?php  
		// This for loop checks for the posts
		for ( $i = 1; $i <= 3; $i++) :
			$query1->have_posts() {
				 $query1->the_post()
			}	
	?>

	<!-- output / content -->
		<div class="news">
			<?php the_post_thumbnail('full');?>
			<p class="news-post-date">Posted on: <?php the_date('d/m/Y'); ?> </p>    
			<h1 class="title">
				<?php the_title(); ?>
			</h1>
			<?php the_content(); ?>        
		</div> 
		<!-- the output/ content -->
		<?php
		endfor;
		?>
		</div>  
		
		<?php
}
   ?>


