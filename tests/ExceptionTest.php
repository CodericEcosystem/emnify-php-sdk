<?php

namespace CodericEcosystem\EmnifySdk;

use GuzzleHttp\Client;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \CodericEcosystem\EmnifySdk\ApiException
     * @expectedExceptionCode 404
     * @expectedExceptionMessage http://petstore.swagger.io/INVALID_URL/store/inventory
     */
    public function testNotFound()
    {
        $config = new Configuration();
        $config->setHost('http://petstore.swagger.io/INVALID_URL');

        $api = new Api\StoreApi(
            new Client(),
            $config
        );
        $api->getInventory();
    }

    /**
     * @expectedException \CodericEcosystem\EmnifySdk\ApiException
     * @expectedExceptionMessage Could not resolve host
     */
    public function testWrongHost()
    {
        $config = new Configuration();
        $config->setHost('http://wrong_host.zxc');

        $api = new Api\StoreApi(
            new Client(),
            $config
        );
        $api->getInventory();
    }
}
