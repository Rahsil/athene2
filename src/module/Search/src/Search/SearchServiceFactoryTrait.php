<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author    Aeneas Rekkas (aeneas.rekkas@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/serlo-org/athene2 for the canonical source repository
 * @copyright Copyright (c) 2013-2014 Gesellschaft für freie Bildung e.V. (http://www.open-education.eu/)
 */
namespace Search;

use Zend\ServiceManager\ServiceLocatorInterface;

trait SearchServiceFactoryTrait
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return SearchServiceInterface
     */
    public function getSearchService(ServiceLocatorInterface $serviceLocator)
    {
        return $serviceLocator->get('Search\SearchService');
    }
}
