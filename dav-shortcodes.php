<?php
/*
Plugin Name:  DAV Shortcodes
Plugin URI:   https://template.alpenverein.de/index.php/faq/shortcodes/
Description:  Dieses Plugin hilft beim Layouten von Inhalten.
Version:      1.0.5
Author:       Deutscher Alpenverein
Author URI:   https://template.alpenverein.de/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

require 'update/plugin-update-checker.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://template.alpenverein.de/updates/?action=get_metadata&slug=dav-shortcodes', //Metadata URL.
    __FILE__, //Full path to the main plugin file.
    'dav-shortcodes' //Plugin slug. Usually it's the same as the name of the directory.
);

require_once "shortcodes_buttons.php";
require_once "shortcodes_cards.php";
require_once "shortcodes_listgroups.php";
require_once "shortcodes_tables.php";
require_once "shortcodes_tabs.php";
require_once "shortcodes_typography.php";
require_once "shortcodes_functions.php";
require_once "shortcodes_grid.php";