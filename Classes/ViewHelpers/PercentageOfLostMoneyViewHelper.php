<?php

namespace FXFlat\System\ViewHelpers;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class PercentageOfLostMoneyViewHelper extends AbstractViewHelper {

    public static function renderStatic(array $arguments,\Closure $renderChildrenClosure,RenderingContextInterface $renderingContext) {
            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_system_percentage_of_lost_money');
            return number_format(($queryBuilder->select('percentage')
                                              ->from('tx_system_percentage_of_lost_money')
                                              ->setMaxResults(1)
                                              ->execute()
                                              ->fetchColumn(0)/100),1,',','.');

    }
}