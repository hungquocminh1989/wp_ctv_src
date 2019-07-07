<?php
defined( 'ABSPATH' ) || exit;

/*
|--------------------------------------------------------------------------
| https://www.wp-hasty.com/tools/wordpress-widget-generator/
|-------------------------------------------------------------------------- 
*/
if (!class_exists( 'Content_Widget')) {
	/**
	 * Adds Sample_Widget widget.
	 */
	class Main_Widget extends WP_Widget {

		function __construct() {
			parent::__construct(
				'Content_widget',
				THEME_TEXT_START . esc_html__( 'Main Content Widget', 'text_domain' ) . THEME_TEXT_END, // Name
				array( 'description' => esc_html__( 'A Main Content Widget', 'text_domain' ), ) // Args
			);
		}

		private $widget_fields = array(
			array(
				'label' => 'Post Type',
				'id' => 'post-type-input',
				'default' => 'macdinh1',
				'type' => 'text',
			),
			array(
				'label' => 'truong2',
				'id' => 'truong2',
				'default' => 'macdinh2',
				'type' => 'text',
			),
		);

		public function widget( $args, $instance ) {
			echo $args['before_widget'];

			//widget_title
			/*if ( ! empty( $instance['title'] ) ) {
				echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
			}*/

			// Output generated fields
			echo '<p>'.$instance['truong1'].'</p>';
			echo '<p>'.$instance['truong2'].'</p>';
			
			echo $args['after_widget'];
		}

		public function field_generator( $instance ) {
			$output = '';
			foreach ( $this->widget_fields as $widget_field ) {
				$default = '';
				if ( isset($widget_field['default']) ) {
					$default = $widget_field['default'];
				}
				$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'text_domain' );
				switch ( $widget_field['type'] ) {
					default:
						$output .= '<p>';
						$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'text_domain' ).':</label> ';
						$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
						$output .= '</p>';
				}
			}
			echo $output;
		}
		
		function generate_post_select() {
	        $post_types = get_post_types();
	        echo '<select>';
	        echo '<option value = "" >All</option>';
	        foreach ($post_types as $post_type) {
	            echo '<option value="', $post_type, '"', '>', $post_type, '</option>';
	        }
	        echo '</select>';
	    }

		public function form( $instance ) {
			
			$post_types = get_post_types();
			
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_type' ) ); ?>"><?php esc_attr_e( 'Chọn post type:', 'text_domain' ); ?></label>
				<?php $this->generate_post_select(); ?>
			</p>
			<?php
			$this->field_generator( $instance );
		}

		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			foreach ( $this->widget_fields as $widget_field ) {
				switch ( $widget_field['type'] ) {
					default:
						$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
				}
			}
			return $instance;
		}
	}
}
