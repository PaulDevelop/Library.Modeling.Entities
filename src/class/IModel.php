<?php

namespace Com\PaulDevelop\Library\Modeling\Entities;

/**
 * IModel
 *
 * @package  Com\PaulDevelop\Library\Modeling\Entities
 * @category Modeling\Entities
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 *
 * @property string $Name
 * @property string $Processing
 * @property string $Modeling
 * @property EntityCollection $Entities
 */
interface IModel
{
    #region methods
    /**
     * HasEntity.
     *
     * @param string $entityNamespace
     * @param string $entityName
     *
     * @return boolean
     */
    public function hasEntity($entityNamespace = '', $entityName = '');

    /**
     * GetEntity.
     *
     * @param string $entityNamespace
     * @param string $entityName
     *
     * @return IEntity
     */
    public function getEntity($entityNamespace = '', $entityName = '');
    #endregion

    #region properties
    /**
     * Name.
     *
     * @return string
     */
    public function getName();

    /**
     * Processing.
     *
     * @return string
     */
    public function getProcessing();

    /**
     * Processing.
     *
     * @param string $value
     */
    public function setProcessing($value = '');

    /**
     * Modeling.
     *
     * @return string
     */
    public function getModeling();

    /**
     * Modeling.
     *
     * @param string $value
     */
    public function setModeling($value = '');

    /**
     * Entities.
     *
     * @return EntityCollection
     */
    public function getEntities();
    #endregion
}
