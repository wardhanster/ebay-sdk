<?php
namespace DTS\eBaySDK\Mocks;

class Service extends \DTS\eBaySDK\Mocks\BaseService
{
    public function __construct($config = array(), \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient = null)
    {
        parent::__construct($config, $httpClient);
    }

    public function foo(\DTS\eBaySDK\Mocks\ComplexClass $request)
    {
        return $this->callOperation(
            'foo',
            $request->toXml('FooRequest', true),
            '\DTS\eBaySDK\Mocks\ComplexClass'
        );
    }
}
