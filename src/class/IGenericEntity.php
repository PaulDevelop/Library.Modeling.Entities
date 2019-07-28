<?php

namespace Com\PaulDevelop\Library\Modeling\Entities;

/**
 * IGenericEntity
 *
 * @package  Com\PaulDevelop\Library\Modeling\Entities
 * @category Modeling\Entities
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 *
 * @property string $Namespace
 * @property string $Name
 * @property PropertyCollection $Properties
 * @property AttributeCollection $Attributes
 */
interface IGenericEntity
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

    /**
     * @return boolean
     */
    public function hasChildren();

    /**
     * @return GenericEntityCollection
     */
    public function getChildrenList();

    /**
     * @param $name
     * @return IGenericEntity
     */
    public function getChildren($name);
    #endregion
}
