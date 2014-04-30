<?php

namespace Com\PaulDevelop\Library\Modeling\Entities;

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
    //Collection<IProperty> Properties
    #endregion
}
