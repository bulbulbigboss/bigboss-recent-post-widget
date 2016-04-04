<?php
/**
* Plugin Name: Bigboss Recent Post Widget
* Plugin URI: http://wordpress.org/plugins/bigboss-recent-post-widget
* Description: Bigboss Recent Post Widget for creating Advance Recent post section in Sidebar or in Any place using shortcode.
* Version: 1.1
* Author: Bulbul bigboss
* Author URI: http://www.bigbosstheme.com/bigboss
* Tags:Latest-news,Advance recent post,Recent post shortcode, Recent post Setting, cpt slide show, post types, responsive slider, cpt responsive slider 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


//

class BbWidgetArea extends WP_Widget{
	
	
	public function __construct(){
			parent::__construct(false,'Bigboss Recent Post Widget', array(
			
					'description' => 'Bigboss Recent Post widget is advance Latest Post widget Section' 
			));
		
		}
		
		
		
	public function widget($args, $instance){
		
		$title = $instance['title'];
		
		echo $args['before_widget'] .$args['before_title'] . $title .$args['after_title'] . $args['after_widget'] ;
		
		
		
		
		}
		
		
	public function form($instance){
		$title = $instance['title'];
		
		?>
    
    <p>
    	<label for="<?php $this->get_field_id('title');?>">Title</label>
        <input type="text" name="<?php echo $this->get_field_name('title');?>" id="<?php $this->get_field_id('title');?>" class="widefat" value="<?php echo $title ; ?>" />
    
    </p>
    
    
		
		
		<?php }
	
	
	
	}//end class BbWidgetArea here

function registerBBwidget(){
	register_widget('BbWidgetArea');
	
	}
add_action('widgets_init','registerBBwidget');
	
	
	
	
	
	
	
	