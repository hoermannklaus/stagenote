<?php
namespace WorldDirect\Stagenote\Controller;

/***
 *
 * This file is part of the "Stage Note" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Klaus Hörmann-Engl <kho@world-direct.at>
 *
 ***/

/**
 * ConfigurationController
 */
class ConfigurationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * configurationRepository
     *
     * @var \WorldDirect\Stagenote\Domain\Repository\ConfigurationRepository
     * @inject
     */
    protected $configurationRepository = null;

    /**
     * action show
     *
     * @param WorldDirect\Stagenote\Domain\Model\Configuration
     * @return void
     */
    public function showAction(\WorldDirect\Stagenote\Domain\Model\Configuration $configuration)
    {
        $this->view->assign('stageNote', $stageNote);
    }
}
