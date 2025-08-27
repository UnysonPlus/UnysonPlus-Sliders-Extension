<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']        = __( 'Sliders', 'fw' );
$manifest['description'] = __( "Adds the Sliders extension to your website. You'll be able to create different built in jQuery sliders for your homepage and all the other website pages.",	'fw' );

$manifest['version']     = '1.1.20';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Requirements
$manifest['requirements'] = array(
	'extensions' => array(
		'population-method' => array(),
	)
);

// Repository Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Sliders-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Sliders-Extension';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
