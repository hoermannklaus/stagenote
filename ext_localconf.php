<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied');
}

// Hooks for the HTML modification on the page
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output']['stagenote'] = \WorldDirect\Stagenote\Hooks\ContentPostProcessHook::class . '->insertUncachedContent';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-all']['stagenote'] = \WorldDirect\Stagenote\Hooks\ContentPostProcessHook::class . '->insertCachedContent';
