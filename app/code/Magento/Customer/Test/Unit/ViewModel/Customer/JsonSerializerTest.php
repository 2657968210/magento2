<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Customer\Test\Unit\ViewModel\Customer;

use Magento\Customer\ViewModel\Customer\JsonSerializer;
use Magento\Framework\Serialize\Serializer\Json as Json;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class JsonSerializerTest extends TestCase
{
    /**
     * @var Json|MockObject
     */
    private mixed $jsonEncoderMock;

    private JsonSerializer $model;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->jsonEncoderMock = $this->getMockBuilder(Json::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->model = new JsonSerializer(
            $this->jsonEncoderMock
        );
        parent::setUp();
    }

    /**
     * Test json encode value.
     *
     * @return void
     */
    public function testJsonEncode(): void
    {
        $this->jsonEncoderMock->expects($this->once())
            ->method('serialize')
            ->willReturnCallback(
                function ($value) {
                    return json_encode($value);
                }
            );

        $this->assertEquals(
            json_encode(
                [
                    'http://example.com/customer/section/load/'
                ]
            ),
            $this->model->jsonEncode(['http://example.com/customer/section/load/'])
        );
    }
}
