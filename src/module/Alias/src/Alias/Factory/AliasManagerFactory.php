<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author    Aeneas Rekkas (aeneas.rekkas@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/serlo-org/athene2 for the canonical source repository
 * @copyright Copyright (c) 2013-2014 Gesellschaft für freie Bildung e.V. (http://www.open-education.eu/)
 */
namespace Alias\Factory;

use Alias\AliasManager;
use Zend\Console\Console;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AliasManagerFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $options       = $serviceLocator->get('Alias\Options\ManagerOptions');
        $objectManager = $serviceLocator->get('Doctrine\ORM\EntityManager');
        $tokenizer     = $serviceLocator->get('Token\Tokenizer');
        $classResolver = $serviceLocator->get('ClassResolver\ClassResolver');
        $storage       = $serviceLocator->get('Alias\Storage\AliasStorage');
        $isConsole     = Console::isConsole();
        $router        = $isConsole ? 'HttpRouter' : 'Router';
        $router        = $serviceLocator->get($router);
        $aliasManager  = new AliasManager($classResolver, $options, $objectManager, $router, $storage, $tokenizer);

        return $aliasManager;
    }
}
