<?php

namespace Com\PaulDevelop\Library\Modeling\Entities;

/**
 * IAttribute
 *
 * @package  Com\PaulDevelop\Library\Modeling\Entities
 * @category Modeling\Entities
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 *
 * @property string $Namespace
 * @property string $Key
 * @property string $Value
 */
interface IAttribute
{
    /**
     * Namespace
     *
     * @return string
     */
    public function getNamespace();

    /**
     * Key
     *
     * @return string
     */
    public function getKey();

    /**
     * Value
     *
     * @return string
     */
    public function getValue();
}
