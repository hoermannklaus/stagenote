<?php

namespace WorldDirect\Stagenote\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

/**
 * Class Configuration
 *
 * @package WorldDirect\Stagenote\Utility
 */
class Configuration {

    /**
     * Function returns for this environment the relevant configuration.
     * An environment is setup using the TYPO3_CONTEXT and the current HOST.
     * If multiple configurations fit, it uses the first entered configuration (the one with the lowest uid).
     * A configuration with a host set is always more specific than a configuration without a host set.
     *
     * @param $configRepo
     * @return array
     */
    public static function getRelevantConfiguration($configRepo) {
        $allConfigurations = $configRepo->findAll()->toArray();
        $relevantContextConfigs = [];
        $relevantConfig = null;

        $currentContext = GeneralUtility::getApplicationContext()->__toString();
        $currentHost = $_SERVER['HTTP_HOST'];

        foreach ($allConfigurations as $config) {
            if ($config->getContext() != '' && strtolower($config->getContext()) == strtolower($currentContext)) {
                $relevantContextConfigs[] = $config;
            }
        }

        if (count($relevantContextConfigs) == 1) {
            $config = $relevantContextConfigs[0];
            if ($config->getHost() != '' && strtolower($config->getHost()) == strtolower($currentHost)) {
                $relevantConfig = $config;
            } else {
                $relevantConfig = $config;
            }
        } else if (count($relevantContextConfigs) > 1) {
            $relevantHostConfigs = [];
            foreach ($relevantContextConfigs as $config) {
                if ($config->getHost() != '' && strtolower($config->getHost()) == strtolower($currentHost)) {
                    $relevantHostConfigs[] = $config;
                }
            }
            if (count($relevantHostConfigs) == 1) {
                $relevantConfig = $relevantHostConfigs[0];
            } else if (count($relevantHostConfigs) > 1) {
                // TODO: Use the one with the lowest uid --> Sort using UID
            }
        }
        return $relevantConfig;
    }

    /**
     * Method builds the stage note using a template and the relevant configurations
     *
     * @param $configRepo
     * @return string
     */
    public static function buildStageNote($configRepo) {
        $configuration = self::getRelevantConfiguration($configRepo);
        if (isset($configuration)) {
            $standaloneView = GeneralUtility::makeInstance(StandaloneView::class);
            $standaloneView->setTemplatePathAndFilename(GeneralUtility::getFileAbsFileName('EXT:stagenote/Resources/Private/Templates/Show.html'));
            $standaloneView->assignMultiple(
                array(
                    'config' => $configuration
                )
            );
            return $standaloneView->render();
        }
    }
}