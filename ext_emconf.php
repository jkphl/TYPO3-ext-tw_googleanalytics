<?php

########################################################################
# Extension Manager/Repository config file for ext "tw_googleanalytics".
#
# Auto generated 05-12-2014 13:21
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'tollwerk Google Analytics',
	'description' => '[TYPO3 CMS 7 Release] Frontend plugin for advanced Google Analytics integration with a wide range of features including pageView and event tracking, custom variables, cross domain tracking, tracking of file downloads and external domains and much more. The extension is built on extbase / fluid and supports the asynchronous tracking code only (ga.js). ATTENTION: Support for TYPO3 4.x has been dropped, use the 1.x versions instead!',
	'category' => 'plugin',
	'author' => 'Joschi Kuphal',
	'author_email' => 'joschi@tollwerk.de',
	'author_company' => 'tollwerk® GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '3.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '6.0.0-0.0.0',
			'fluid' => '6.0.0-0.0.0',
			'php' => '5.3.0-0.0.0',
			'typo3' => '6.0.0-7.0.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>