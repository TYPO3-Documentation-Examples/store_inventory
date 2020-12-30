<?php

namespace T3docs\StoreInventory\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Product extends AbstractEntity
{

    /**
     * The name of the product
     *
     * @var string
     **/
    protected $name = '';

    /**
     * The description of the product
     *
     * @var string
     **/
    protected $description = '';

    /**
     * The quantity in the store inventory
     *
     * @var int
     **/
    protected $quantity = 0;

    /**
     * Product constructor.
     *
     * @param string $name
     * @param string $description
     * @param int $quantity
     */
    public function __construct($name = '', $description = '', $quantity = 0)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setQuantity($quantity);
    }

    /**
     * Sets the name of the product
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Gets the name of the product
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the description of the product
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Gets the description of the product
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the quantity in the store inventory of the product
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Gets the quantity in the store inventory of the product
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

}
