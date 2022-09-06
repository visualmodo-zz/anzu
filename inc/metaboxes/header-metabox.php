<?php 
// Meta Box Class: Anzu Header

	if ( is_object( $anzu_license ) && $anzu_license->get_api_key_status() ) {
		class anzuheaderMetabox {
			private $screen = array(
				'post',
				'page',
			);
		
			private $meta_fields = array(
				array(
					'label' => 'Transparent Header',
					'id' => 'anzu_metabox_transparent_header',
					'default' => '',
					'type' => 'select',
					'options' => array(
						'' => 'Customizer Setting',
						'anzu-transparent-header--disabled' => 'Disabled',
						'anzu-transparent-header--theme-light-mode' => 'Light Mode',
						'anzu-transparent-header--theme-dark-mode' => 'Dark Mode',
					),
				),
				array(
					'label' => 'Sticky Header',
					'id' => 'anzu_metabox_sticky_header',
					'default' => '',
					'type' => 'select',
					'options' => array(
						'' => 'Customizer Setting',
						'anzu-sticky-header--disabled' => 'Disabled',
						'anzu-sticky-header--background-default' => 'Default',
						'anzu-sticky-header--background-transparent' => 'Transparent',
						'anzu-sticky-header--background-blurred' => 'Blurred',
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
						'anzuheader',
						__( 'Anzu Header', 'anzu' ),
						array( $this, 'meta_box_callback' ),
						$single_screen,
						'side',
						'default'
					);
				}
			}
		
			public function meta_box_callback( $post ) {
				wp_nonce_field( 'anzuheader_data', 'anzuheader_nonce' );
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
				if ( ! isset( $_POST['anzuheader_nonce'] ) )
					return $post_id;
				$nonce = $_POST['anzuheader_nonce'];
				if ( !wp_verify_nonce( $nonce, 'anzuheader_data' ) )
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
	} else {
		class anzuheaderMetabox {
			private $screen = array(
				'post',
				'page',
			);
		
			private $meta_fields = array(
				array(
					'label' => 'Transparent Header',
					'id' => 'anzu_metabox_transparent_header',
					'default' => '',
					'type' => 'select',
					'options' => array(
						'' => 'Customizer Setting',
						'anzu-transparent-header--disabled' => 'Disabled',
						'anzu-transparent-header--theme-light-mode' => 'Light Mode',
						'anzu-transparent-header--theme-dark-mode' => 'Dark Mode',
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
						'anzuheader',
						__( 'Anzu Header', 'anzu' ),
						array( $this, 'meta_box_callback' ),
						$single_screen,
						'side',
						'default'
					);
				}
			}
		
			public function meta_box_callback( $post ) {
				wp_nonce_field( 'anzuheader_data', 'anzuheader_nonce' );
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
				if ( ! isset( $_POST['anzuheader_nonce'] ) )
					return $post_id;
				$nonce = $_POST['anzuheader_nonce'];
				if ( !wp_verify_nonce( $nonce, 'anzuheader_data' ) )
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
	}

if (class_exists('anzuheaderMetabox')) {
	new anzuheaderMetabox;
};