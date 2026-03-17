<?php
function dvm_settings_init() {
	// register a new setting for "reading" page
	register_setting('dvm-plugin', 'dvm_setting_field_txt');

	// register a new section in the "reading" page
	add_settings_section(
		'dvm_settings_section_general',
		'DVM Settings Section', 'dvm_settings_section_callback',
		'dvm-plugin'
	);

	// register a new field in the "dvm_settings_section" section, inside the "dvm-plugin" page
	add_settings_field(
		'dvm_settings_field_1',
		'Text Field', 'dvm_txt_settings_general_callback',
		'dvm-plugin',
		'dvm_settings_section_general'
	);
}

/**
 * register dvm_settings_init to the admin_init action hook
 */
add_action('admin_init', 'dvm_settings_init');

/**
 * callback functions
 */

// section content cb
function dvm_settings_section_callback() {
	echo '<p>Manage main plugin settings.</p>';
}

// field content cb
function dvm_txt_settings_general_callback() {
	// get the value of the setting we've registered with register_setting()
	$setting = get_option('dvm_setting_field_txt');
	// output the field
	?>
	<input type="text" name="dvm_setting_field_txt" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
    <?php
}