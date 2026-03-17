<?php

function dvm_options_page_html() {
    ?>
    <div class="wrap">
      <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
      <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "dvm_plugin"
        settings_fields( 'dvm_plugin' );
        // output setting sections and their fields
        // (sections are registered for "dvm-plugin", each field is registered to a specific section)
        do_settings_sections( 'dvm-plugin' );
        // output save settings button
        submit_button( __( 'Save Settings', 'dvm-plugin' ) );
        ?>
      </form>
    </div>
    <?php
}

function dvm_sub_options_page_html() {
    ?>
    <div class="wrap">
      <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
      <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'wporg_options' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'wporg' );
        // output save settings button
        submit_button( __( 'Save Settings', 'dvm-plugin' ) );
        ?>
      </form>
    </div>
    <?php
}