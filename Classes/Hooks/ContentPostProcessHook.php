<?php

namespace WorldDirect\Stagenote\Hooks;

use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use WorldDirect\Stagenote\Domain\Repository\ConfigurationRepository;

/**
 * Class ContentPostProcessHook
 *
 * @package WorldDirect\Stagenote\Hooks
 */
class ContentPostProcessHook implements SingletonInterface {

    /**
     * @var \WorldDirect\Stagenote\Domain\Model\Configuration
     */
    protected $configurationRepository = null;

    /**
     * ContentPostProcessHook constructor.
     */
    public function __construct() {
        $this->initialize();
    }

    /**
     * @param $parameters array
     */
    public function insertUncachedContent(&$parameters) {
        $configurations = $this->configurationRepository->findAll()->toArray();
        DebuggerUtility::var_dump($configurations);
        // TODO: Get all configurations
        // TODO: Go through each configuration and see which one is relevant.
        // TODO: If there are more than 1 configurations relevant use WHICH ONE?
        // TODO: Then build the stage note using a template.
        // TODO: Render the stage note content into the template.

        $feobj = &$parameters['pObj'];
        DebuggerUtility::var_dump("Hello World");
        $feobj->content = str_replace('</body>', 'Hello World2</body>', $feobj->content);
    }

    /**
     * @param $parameters array
     */
    public function insertCachedContent(&$parameters) {

    }

    /**
     * Initialize method.
     */
    protected function initialize() {
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $this->configurationRepository = $objectManager->get(ConfigurationRepository::class);
    }
}