<?php 
// Meta Box Class: Anzu Layout
class anzulayoutMetabox {

	private $screen = array(
		'post',
		'page',
	);

	private $meta_fields = array(
		array(
			'label' => 'Sidebar',
			'id' => 'anzu_layout_sidebar',
			'default' => 'customizer',
			'type' => 'select',
			'options' => array(
				'customizer' => 'Customizer Setting',
				'right' => 'Right sidebar',
				'left' => 'Left sidebar',
				'both' => 'Left & Right sidebars',
				'none' => 'No sidebar',
			),
		),
		array(
			'label' => 'Content Layout',
			'id' => 'anzu_layout_content',
			'default' => 'customizer',
			'type' => 'select',
			'options' => array(
				'customizer' => 'Customizer Setting',
				'container' => 'Contained',
				'container-fluid' => 'Full Width',
			),
		),
		array(
			'label' => 'Disable Header',
			'id' => 'anzu_layout_disable_header',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Disable Footer',
			'id' => 'anzu_layout_disable_footer',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Disable Title',
			'id' => 'anzu_layout_disable_title',
			'type' => 'checkbox',
		),
	);

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}

	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'anzulayout',
				__( 'Anzu Layout', 'anzu' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'side',
				'default'
			);
		}
	}

	public function meta_box_callback( $post ) {
		wp_nonce_field( 'anzulayout_data', 'anzulayout_nonce' );
		$this->field_generator( $post );
	}

	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				if ( isset( $meta_field['default'] ) ) {
					$meta_value = $meta_field['default'];
				}
			}
			switch ( $meta_field['type'] ) {
				case 'checkbox':
					$input = sprintf(
						'<input %s id=" %s" name="%s" type="checkbox" value="1">',
						$meta_value === '1' ? 'checked' : '',
						$meta_field['id'],
						$meta_field['id']
						);
					break;
				case 'select':
					$input = sprintf(
						'<select id="%s" name="%s">',
						$meta_field['id'],
						$meta_field['id']
					);
					foreach ( $meta_field['options'] as $key => $value ) {
						$meta_field_value = !is_numeric( $key ) ? $key : $value;
						$input .= sprintf(
							'<option %s value="%s">%s</option>',
							$meta_value === $meta_field_value ? 'selected' : '',
							$meta_field_value,
							$value
						);
					}
					$input .= '</select>';
					break;
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
						$meta_field['id'],
						$meta_field['id'],
						$meta_field['type'],
						$meta_value
					);
			}
			$output .= $this->format_rows( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}

	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['anzulayout_nonce'] ) )
			return $post_id;
		$nonce = $_POST['anzulayout_nonce'];
		if ( !wp_verify_nonce( $nonce, 'anzulayout_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}

if (class_exists('anzulayoutMetabox')) {
	new anzulayoutMetabox;
};