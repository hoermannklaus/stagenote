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
     *
     * A stage note is shown when the configured context matches the current TYPO3_context.
     * If a stage note configuration has set a host, the host must also match the current host. If no host is configured
     * the state not will be shown on all hosts.
     *
     * @param $configRepo
     * @return array
     */
    public static function getRelevantConfigurations($configRepo) {
        $allConfigurations = $configRepo->findAll()->toArray();
        $relevantConfigurations = array();
        $currentContext = GeneralUtility::getApplicationContext()->__toString();
        $currentHost = $_SERVER['HTTP_HOST'];

        foreach ($allConfigurations as $config) {
            if ($config->getContext() != '' && strtolower($config->getContext()) == strtolower($currentContext)) {
                if (($config->getHost() != '' && strtolower($config->getHost()) == strtolower($currentHost)) || ($config->getHost() == '')) {
                    $relevantConfigurations[$config->getPosition()][] = $config;
                }
            }
        }
        return $relevantConfigurations;
    }

    /**
     * Method builds the stage note using a template and the relevant configurations
     *
     * @param $configRepo
     * @return string
     */
    public static function buildStageNote($configRepo) {
        $configurations = self::getRelevantConfigurations($configRepo);
        if (isset($configurations) && sizeof($configurations) > 0) {
            $standaloneView = GeneralUtility::makeInstance(StandaloneView::class);
            $standaloneView->setTemplatePathAndFilename(GeneralUtility::getFileAbsFileName('EXT:stagenote/Resources/Private/Templates/Show.html'));
            $standaloneView->assignMultiple(
                array(
                    'configs' => $configurations,
                )
            );
            return $standaloneView->render();
        }
    }
}