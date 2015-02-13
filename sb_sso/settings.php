<?php
defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    $settings = new admin_settingpage('localsetting_sb_sso', 'sb_sso');
    $ADMIN->add('localplugins', $settings);
    $settings->add(new admin_setting_configpasswordunmask(
    	'local_sb_sso/api_key', // name
        new lang_string('api_key', 'local_sb_sso'), // Visible name
        new lang_string('api_key_desc', 'local_sb_sso'), // Description
        null // Default setting
	));
}
