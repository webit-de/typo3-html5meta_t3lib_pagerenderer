<?php

########################################################################
# Extension Manager/Repository config file for ext "html5meta_t3lib_pagerenderer".
#
# Auto generated 28-02-2012 18:45
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'HTML5 charset-metatag',
	'description' => 'TYPO3 is able to generate a valid HTML5-header. There is just a tiny imperfection with the charset-metatag. This extension provides a cosmetic change on the charset-metatag by using the XCLASS-mechanism to overwrite a value in t3lib_pagerenderer. [obsolete] This feature is a core functionality since TYPO3 version 4.5.4! See manual for details.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.0.4',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'obsolete',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Dan Untenzu',
	'author_email' => 'untenzu@webit.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.dev-4.5.3',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:31:"class.ux_t3lib_pagerenderer.php";s:4:"ee14";s:12:"ext_icon.gif";s:4:"2375";s:17:"ext_localconf.php";s:4:"76ff";s:14:"doc/manual.pdf";s:4:"81c1";s:14:"doc/manual.sxw";s:4:"4961";}',
	'suggests' => array(
	),
);

?>