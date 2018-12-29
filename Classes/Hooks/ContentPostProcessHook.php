<?php

namespace WorldDirect\Stagenote\Hooks;

use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use WorldDirect\Stagenote\Domain\Repository\ConfigurationRepository;
use WorldDirect\Stagenote\Utility\Configuration;

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
        $stageNoteContent = Configuration::buildStageNote($this->configurationRepository);
        $feobj = &$parameters['pObj'];
        $feobj->content = str_replace('</body>', $stageNoteContent . '</body>', $feobj->content);
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