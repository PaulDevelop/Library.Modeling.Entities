<?php

namespace Com\PaulDevelop\Library\Modeling\Entities;

/**
 * IProperty
 *
 * @package  Com\PaulDevelop\Library\Modeling\Entities
 * @category Modeling\Entities
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 *
 * @property string $Name
 */
interface IProperty
{
    /**
     * Name
     *
     * @return string
     */
    public function getName();
}
