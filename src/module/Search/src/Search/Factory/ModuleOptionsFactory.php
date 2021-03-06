<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author    Aeneas Rekkas (aeneas.rekkas@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/serlo-org/athene2 for the canonical source repository
 * @copyright Copyright (c) 2013-2014 Gesellschaft für freie Bildung e.V. (http://www.open-education.eu/)
 */
namespace Search\Factory;

use Common\Factory\AbstractOptionsFactory;

class ModuleOptionsFactory extends AbstractOptionsFactory
{
    /**
     * @return string
     */
    protected function getClassName()
    {
        return 'Search\Options\ModuleOptions';
    }

    /**
     * @return string
     */
    protected function getKeyName()
    {
        return 'search';
    }
}
