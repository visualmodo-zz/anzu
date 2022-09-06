<?php 
// Meta Box Class: Anzu Hero
class anzuheroMetabox {

	private $screen = array(
		'post',
		'page',
	);

	private $meta_fields = array(
		array(
			'label' => 'Subtitle',
			'id' => 'anzu_hero_subtitle',
			'type' => 'text',
		),
		array(
			'label' => 'Layout',
			'id' => 'anzu_hero_layout',
			'default' => '',
			'type' => 'select',
			'options' => array(
				'' => 'Customizer Setting',
				'default' => 'Default',
				'contained' => 'Featured Contained',
				'stretched' => 'Featured Stretched',
			),
		),
		array(
			'label' => 'Content Position',
			'id' => 'anzu_hero_content_position',
			'default' => '',
			'type' => 'select',
			'options' => array(
				'' => 'Customizer Setting',
				'anzu-hero--left-top' => 'Left Top',
				'anzu-hero--left-center' => 'Left Center',
				'anzu-hero--left-bottom' => 'Left Bottom',
				'anzu-hero--center-top' => 'Center Top',
				'anzu-hero--center-center' => 'Center Center',
				'anzu-hero--center-bottom' => 'Center Bottom',
				'anzu-hero--right-top' => 'Right Top',
				'anzu-hero--right-center' => 'Right Center',
				'anzu-hero--right-bottom' => 'Right Bottom',
			),
		),
		array(
			'label' => 'Overlay Color',
			'id' => 'anzu_hero_overlay_color',
			'default' => '',
			'type' => 'select',
			'options' => array(
				'' => 'Customizer Setting',
				'anzu-no-overlay-color' => 'Disabled',
				'anzu-primary-color--background-color' => 'Primary Color',
				'anzu-secondary-color--background-color' => 'Secondary Color',
				'anzu-tertiary-color--background-color' => 'Tertiary Color',
				'anzu-light-theme--background-color' => 'Light Color',
				'anzu-dark-theme--background-color' => 'Dark Color',
			),
		),
		array(
			'label' => ' Overlay Opacity',
			'id' => 'anzu_hero_overlay_opacity',
			'default' => '',
			'type' => 'select',
			'options' => array(
				'' => 'Customizer Setting',
				'anzu-no-opacity' => 'Disabled',
				'anzu-opacity-0' => '0',
				'anzu-opacity-1' => '0.1',
				'anzu-opacity-2' => '0.2',
				'anzu-opacity-3' => '0.3',
				'anzu-opacity-4' => '0.4',
				'anzu-opacity-5' => '0.5',
				'anzu-opacity-6' => '0.6',
				'anzu-opacity-7' => '0.7',
				'anzu-opacity-8' => '0.8',
				'anzu-opacity-9' => '0.9',
				'anzu-opacity-10' => '1',
			),
		),
	);

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}

	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'anzuhero',
				__( 'Anzu Hero', 'anzu' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'side',
				'default'
			);
		}
	}

	public function meta_box_callback( $post ) {
		wp_nonce_field( 'anzuhero_data', 'anzuhero_nonce' );
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
		return '<tr style="display: flex;flex-direction: column;"><th>'.$label.'</th><td style="padding: 0; margin: 0;">'.$input.'</td></tr>';
	}

	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['anzuhero_nonce'] ) )
			return $post_id;
		$nonce = $_POST['anzuhero_nonce'];
		if ( !wp_verify_nonce( $nonce, 'anzuhero_data' ) )
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

if (class_exists('anzuheroMetabox')) {
	new anzuheroMetabox;
};