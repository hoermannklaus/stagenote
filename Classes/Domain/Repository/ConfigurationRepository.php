<?php
namespace WorldDirect\Stagenote\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

/***
 *
 * This file is part of the "Staging Note" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Klaus Hörmann-Engl <kho@world-direct.at>
 *
 ***/

/**
 * The repository for StageNoteConfigs
 */
class ConfigurationRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function initializeObject() {
        $defaultQuerySettings = $this->objectManager->get(Typo3QuerySettings::class);
        $defaultQuerySettings->setRespectStoragePage(FALSE);
        $this->setDefaultQuerySettings($defaultQuerySettings);
    }
}
