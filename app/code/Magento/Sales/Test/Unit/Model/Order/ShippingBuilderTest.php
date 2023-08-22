<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Sales\Test\Unit\Model\Order;

use Magento\Sales\Model\OrderFactory;
use Magento\Sales\Api\Data\ShippingInterfaceFactory;
use Magento\Sales\Api\Data\TotalInterfaceFactory;
use Magento\Sales\Model\Order\ShippingBuilder;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ShippingBuilderTest extends TestCase
{
    /**
     * @var ShippingBuilder
     */
    private $shippingBuilder;

    /**
     * @var OrderFactory|MockObject
     */
    private $orderFactory;

    /**
     * @var ShippingInterfaceFactory|Mockobject
     */
    private $shippingFactory;

    /**
     * @var TotalInterfaceFactory|MockObject
     */
    private $totalFactory;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->orderFactory = $this->getMockBuilder(OrderFactory::class)
            ->getMock();
        $this->shippingFactory = $this->getMockBuilder(ShippingInterfaceFactory::class)
            ->getMock();
        $this->totalFactory = $this->getMockBuilder(TotalInterfaceFactory::class)
            ->getMock();
        $this->shippingBuilder = new ShippingBuilder($this->orderFactory, $this->shippingFactory, $this->totalFactory);
    }
}
