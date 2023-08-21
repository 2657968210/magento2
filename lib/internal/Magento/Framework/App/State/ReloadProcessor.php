<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);
namespace Magento\Framework\App\State;

use Magento\Framework\App\Config\ScopeCodeResolver;
use Magento\Framework\App\DeploymentConfig;
use Magento\Framework\ObjectManagerInterface;

/**
 * Framework specific reset state
 */
class ReloadProcessor implements ReloadProcessorInterface
{

    /**
     * Tells the system state to reload itself.
     *
     * @param ObjectManagerInterface $objectManager
     * @return void
     */
    public function reloadState(ObjectManagerInterface $objectManager)
    {
        $objectManager->get(DeploymentConfig::class)->resetData();
        $objectManager->get(ScopeCodeResolver::class)->clean();
    }
}
