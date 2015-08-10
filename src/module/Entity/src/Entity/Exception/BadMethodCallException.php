<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author      Aeneas Rekkas (aeneas.rekkas@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link        https://github.com/serlo-org/athene2 for the canonical source repository
 */
namespace Entity\Exception;

class BadMethodCallException extends \BadMethodCallException
{
    /*
     * (non-PHPdoc) @see BadMethodCallException::__construct()
     */
    public function __construct($message, $code, $previous)
    {
        parent::__construct($message, $code, $previous);
    }
}
