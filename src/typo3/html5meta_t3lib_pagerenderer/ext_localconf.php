<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// register XCLASS
$TYPO3_CONF_VARS['FE']['XCLASS']['t3lib/class.t3lib_pagerenderer.php'] = t3lib_extMgm::extPath($_EXTKEY).'class.ux_t3lib_pagerenderer.php';
?>