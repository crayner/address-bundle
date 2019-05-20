<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Address
 * @ORM\Entity(repositoryClass="App\Repository\AddressRepository")
 * @ORM\Table(name="address", uniqueConstraints={@ORM\UniqueConstraint(name="address", columns={"building_type", "building_number", "street_number", "property_name", "street_name", "locality", "post_code"})})
 */
class Address
{
	/**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
	 */
	private $id;

	/**
     * @ORM\Column(length=50, nullable=true, name="property_name")
	 */
	private $propertyName;

	/**
     * @ORM\Column(length=70, name="street_name")
	 */
	private $streetName;

	/**
     * @ORM\Column(name="last_modified", type="datetime_immutable")
	 */
	private $lastModified;

	/**
     * @ORM\Column(name="created_on", type="datetime_immutable")
	 */
	private $createdOn;

	/**
     * @ORM\Column(name="created_by", nullable=true)
	 */
	private $createdBy;

	/**
     * @ORM\Column(name="modified_by", nullable=true)
	 */
	private $modifiedBy;

    /**
     * @ORM\Column(length=10, nullable=true, name="building_type")
     */
	private $buildingType;

    /**
     * @ORM\Column(length=10, nullable=true, name="building_number")
     */
	private $buildingNumber;

    /**
     * @ORM\Column(length=15, nullable=true)
     */
	private $streetNumber;

	/**
     * @ORM\JoinColumn(name="locality")
	 * @ORM\ManyToOne(targetEntity="App\Entity\Locality", cascade={"persist"})
	 */
	private $locality;

    /**
     * @ORM\Column(length=12, nullable=true, name="post_code")
     */
    private $postCode;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get propertyName
	 *
	 * @return string
	 */
	public function getPropertyName()
	{
		return empty($this->propertyName) ? "" : $this->propertyName;
	}

	/**
	 * Set propertyName
	 *
	 * @param string $propertyName
	 *
	 * @return Address
	 */
	public function setPropertyName($propertyName)
	{
		$this->propertyName = empty($propertyName) || is_null($propertyName) ? "" : $propertyName;

		return $this;
	}

	/**
	 * Get streetName
	 *
	 * @return string
	 */
	public function getStreetName()
	{
		return $this->streetName;
	}

	/**
	 * Set streetName
	 *
	 * @param string $streetName
	 *
	 * @return Address
	 */
	public function setStreetName($streetName)
	{
		$this->streetName = $streetName;

		return $this;
	}

	/**
	 * Get lastModified
	 *
	 * @return \DateTime
	 */
	public function getLastModified()
	{
		return $this->lastModified;
	}

	/**
	 * Set lastModified
	 *
	 * @param \DateTime $lastModified
	 *
	 * @return Address
	 */
	public function setLastModified($lastModified)
	{
		$this->lastModified = $lastModified;

		return $this;
	}

	/**
	 * Get createdOn
	 *
	 * @return \DateTime
	 */
	public function getCreatedOn()
	{
		return $this->createdOn;
	}

	/**
	 * Set createdOn
	 *
	 * @param \DateTime $createdOn
	 *
	 * @return Address
	 */
	public function setCreatedOn($createdOn)
	{
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Get createdBy
	 *
	 * @return \Busybee\Core\SecurityBundle\Entity\User
	 */
	public function getCreatedBy()
	{
		return $this->createdBy;
	}

	/**
	 * Set createdBy
	 *
	 * @param \Busybee\Core\SecurityBundle\Entity\User $createdBy
	 *
	 * @return Address
	 */
	public function setCreatedBy(\Busybee\Core\SecurityBundle\Entity\User $createdBy = null)
	{
		$this->createdBy = $createdBy;

		return $this;
	}

	/**
	 * Get modifiedBy
	 *
	 * @return \Busybee\Core\SecurityBundle\Entity\User
	 */
	public function getModifiedBy()
	{
		return $this->modifiedBy;
	}

	/**
	 * Set modifiedBy
	 *
	 * @param \Busybee\Core\SecurityBundle\Entity\User $modifiedBy
	 *
	 * @return Address
	 */
	public function setModifiedBy(\Busybee\Core\SecurityBundle\Entity\User $modifiedBy = null)
	{
		$this->modifiedBy = $modifiedBy;

		return $this;
	}

	/**
	 * Get buildingType
	 *
	 * @return string
	 */
	public function getBuildingType()
	{
		if (empty($this->buildingType))
			$this->buildingType = '';

		return empty($this->buildingType) ? "" : $this->buildingType;
	}

	/**
	 * Set buildingType
	 *
	 * @param string $buildingType
	 *
	 * @return Address
	 */
	public function setBuildingType($buildingType)
	{

		$this->buildingType = empty($buildingType) ? '' : $buildingType;

		return $this;
	}

	/**
	 * Get buildingNumber
	 *
	 * @return string
	 */
	public function getBuildingNumber()
	{
		return empty($this->buildingNumber) ? "" : $this->buildingNumber;
	}

	/**
	 * Set buildingNumber
	 *
	 * @param string $buildingNumber
	 *
	 * @return Address
	 */
	public function setBuildingNumber($buildingNumber)
	{
		$this->buildingNumber = empty($buildingNumber) || is_null($buildingNumber) ? '' : $buildingNumber;

		return $this;
	}

	/**
	 * Get streetNumber
	 *
	 * @return string
	 */
	public function getStreetNumber()
	{
		return empty($this->streetNumber) ? "" : $this->streetNumber;
	}

	/**
	 * Set streetNumber
	 *
	 * @param string $streetNumber
	 *
	 * @return Address
	 */
	public function setStreetNumber($streetNumber)
	{
		$this->streetNumber = empty($streetNumber) ? '' : $streetNumber;

		return $this;
	}

    /**
     * get Locality
     * @return Locality|null
     */
	public function getLocality(): ?Locality
	{
		return $this->locality;
	}

	/**
	 * Set locality
	 *
	 * @param Locality $locality
	 *
	 * @return Address
	 */
	public function setLocality(Locality $locality = null)
	{
		$this->locality = $locality;

		return $this;
	}

    /**
     * @return mixed
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * PostCode.
     *
     * @param mixed $postCode
     * @return Address
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
        return $this;
    }
}
