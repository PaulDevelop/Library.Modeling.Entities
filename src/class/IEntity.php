<?php

namespace Com\PaulDevelop\Library\Modeling\Entities;

/**
 * IEntity
 *
 * @package  Com\PaulDevelop\Library\Modeling\Entities
 * @category Modeling\Entities
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 *
 * @property string $Namespace
 * @property string $Name
 * @property PropertyCollection $Properties
 * @property AttributeCollection $Attribtes
 */
interface IEntity
{
    #region methods
    /**
     * HasProperty.
     *
     * @param string $propertyName
     *
     * @return boolean
     */
    public function hasProperty($propertyName);

    /**
     * GetProperty.
     *
     * @param string $propertyName
     *
     * @return IProperty
     */
    public function getProperty($propertyName);
    #endregion

    #region properties
    /**
     * Namespace
     *
     * @return string
     */
    public function getNamespace();

    /**
     * Name
     *
     * @return string
     */
    public function getName();

    /**
     * Properties.
     *
     * @return PropertyCollection
     */
    public function getProperties();

    /**
     * GetAttributes
     *
     * @return AttributeCollection
     */
    public function getAttributes();
    #endregion
}
