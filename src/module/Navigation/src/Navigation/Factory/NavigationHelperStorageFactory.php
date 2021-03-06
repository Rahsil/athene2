<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author    Aeneas Rekkas (aeneas.rekkas@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/serlo-org/athene2 for the canonical source repository
 * @copyright Copyright (c) 2013-2014 Gesellschaft für freie Bildung e.V. (http://www.open-education.eu/)
 */
namespace Navigation\Factory;

use Zend\Cache\StorageFactory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class NavigationHelperStorageFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $cache = StorageFactory::factory(
            [
                'adapter' => [
                    'name'    => 'apc',
                    'options' => [
                        'namespace' => __NAMESPACE__,
                        'ttl'    => 60*60*24
                    ]
                ],
                'plugins' => [
                    'exception_handler' => [
                        'throw_exceptions' => false
                    ],
                    'serializer'
                ]
            ]
        );

        return $cache;
    }
}
