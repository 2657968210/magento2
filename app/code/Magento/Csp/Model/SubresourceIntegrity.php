<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Csp\Model;

/**
 * Subresource Integrity data model.
 */
class SubresourceIntegrity extends \Magento\Framework\DataObject
{
    /**
     * Gets an integrity URL.
     *
     * @return string|null
     */
    public function getUrl(): string|null
    {
        return $this->getData("url");
    }

    /**
     * Gets an integrity hash.
     *
     * @return string|null
     */
    public function getHash(): string|null
    {
        return $this->getData("hash");
    }
}
