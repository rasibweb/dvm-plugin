<?php
    function dvm_reaction_table() {
        global $wpdb;
        $dvm_db_version = DVM_DB_VERSION;

        $table_name = $wpdb->prefix . 'dvm_reactions';
        
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            post_id BIGINT UNSIGNED NOT NULL,
            user_id BIGINT UNSIGNED DEFAULT NULL,
            reaction_type VARCHAR(20) NOT NULL,
            reaction_count INT UNSIGNED DEFAULT 1,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (id),
            UNIQUE KEY unique_reaction (post_id, user_id, reaction_type),
            KEY post_index (post_id),
            KEY user_index (user_id)
        ) $charset_collate;";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta( $sql );

        add_option( 'dvm_db_version', $dvm_db_version );
    }

    function dvm_db_update() {
        global $wpdb;  
        $installed_ver = get_option( "dvm_db_version" );
        $current_ver = DVM_DB_VERSION;
        

        if($installed_ver != $current_ver) {
            $table_name = $wpdb->prefix . 'dvm_post_votes';

            $charset_collate = $wpdb->get_charset_collate();

            $sql = "CREATE TABLE $table_name (
                id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
                post_id BIGINT UNSIGNED NOT NULL,
                user_id BIGINT UNSIGNED DEFAULT NULL,
                reaction_type VARCHAR(20) NOT NULL,
                reaction_count INT UNSIGNED DEFAULT 1,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (id),
                UNIQUE KEY unique_reaction (post_id, user_id, reaction_type),
                KEY post_index (post_id),
                KEY user_index (user_id)
            ) $charset_collate;";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );

            update_option( "dvm_db_version", $current_ver );
        }
    }

    function dvm_update_db_check() {
        $installed_ver = get_option( "dvm_db_version" );
        $current_ver = DVM_DB_VERSION;

        if ( $installed_ver != $current_ver ) {
            dvm_db_update();
        }
    }
    add_action( 'plugins_loaded', 'dvm_update_db_check' );

?>