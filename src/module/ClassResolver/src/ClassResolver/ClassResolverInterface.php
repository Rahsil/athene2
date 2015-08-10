<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author      Aeneas Rekkas (aeneas.rekkas@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link        https://github.com/serlo-org/athene2 for the canonical source repository
 */
namespace ClassResolver;

interface ClassResolverInterface
{

    /**
     * @param string $class
     * @return string class name
     */
    public function resolveClassName($class);

    /**
     * @param string $class
     * @param bool   $userServiceLocator
     * @return object
     */
    public function resolve($class, $userServiceLocator = false);
}
