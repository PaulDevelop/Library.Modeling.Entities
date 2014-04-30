<?php

namespace Com\PaulDevelop\Library\Modeling\Entities;

use \Com\PaulDevelop\Library\Common\GenericCollection;

/**
 * EntityCollection
 *
 * @package  Com\PaulDevelop\Library\Modeling\Entities
 * @category Modeling\Entities
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 */
class EntityCollection extends GenericCollection
{
    // #region constructor
    public function __construct()
    {
        parent::__construct('Com\PaulDevelop\Library\Modeling\Entities\IEntity');
    }
    // #endregion
}
