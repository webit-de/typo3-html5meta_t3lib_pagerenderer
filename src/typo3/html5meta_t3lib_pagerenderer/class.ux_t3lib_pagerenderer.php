<?php
class ux_t3lib_pagerenderer extends t3lib_pagerenderer {
	protected $metaCharsetTag = '<meta charset="|" />';

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/html5meta_t3lib_pagerenderer/class.ux_t3lib_pagerenderer.php'])    {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/html5meta_t3lib_pagerenderer/class.ux_t3lib_pagerenderer.php']);
}
?>
