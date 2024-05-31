<?php

// If this file is called directly, abort.
if(!defined('ABSPATH')) {
	exit;
}


$data = '';
$data .= '<div class="livepreviewpro-page-info">' . PHP_EOL;
$data .= '<p>' . __('This is the <b>LITE version</b> of the plugin.', LIVEPREVIEWPRO_PLUGIN_NAME) . '</p>' . PHP_EOL;
$data .= '<p>' . __('It has two limits:', LIVEPREVIEWPRO_PLUGIN_NAME) . '</p>' . PHP_EOL;
$data .= '<ul>' . PHP_EOL;
$data .= '<li>' . __('You can create and use only <b>3 items</b>', LIVEPREVIEWPRO_PLUGIN_NAME) . '</li>' . PHP_EOL;
$data .= '<li>' . __('You can\'t <b>save & load config</b> from a json file', LIVEPREVIEWPRO_PLUGIN_NAME) . '</li>' . PHP_EOL;
$data .= '</ul>' . PHP_EOL;
$data .= '<div class="livepreviewpro-page-info-close"><i class="fa fa-times"></i></div>' . PHP_EOL;
$data .= '</div>' . PHP_EOL;

echo wp_kses_post($data);

?>
