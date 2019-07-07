<?php
defined( 'ABSPATH' ) || exit;

/*
|--------------------------------------------------------------------------
| https://www.wp-hasty.com/tools/wordpress-widget-generator/
|-------------------------------------------------------------------------- 
*/
if (!class_exists( 'Sample_Widget')) {
	/**
	 * Adds Sample_Widget widget.
	 */
	class Sample_Widget extends WP_Widget {

		function __construct() {
			parent::__construct(
				'Sample_widget',
				THEME_TEXT_START . esc_html__( 'Sample Widget Title', 'text_domain' ) . THEME_TEXT_END, // Name
				array( 'description' => esc_html__( 'A Sample Widget', 'text_domain' ), ) // Args
			);
		}

		private $widget_fields = array(
			array(
				'label' => 'truong1',
				'id' => 'truong1',
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
			if ( ! empty( $instance['title'] ) ) {
				echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
			}

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

		public function form( $instance ) {
			$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
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
