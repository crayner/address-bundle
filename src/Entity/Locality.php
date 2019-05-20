<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Locality
 * @ORM\Entity(repositoryClass="App\Repository\LocalityRepository")
 * @ORM\Table(name="locality", uniqueConstraints={@ORM\UniqueConstraint(name="locality", columns={"name", "territory", "post_code", "country"})})
 */
class Locality
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
	private $id;

    /**
     * @ORM\Column(length=50)
     */
	private $name;

    /**
     * @ORM\Column(length=50)
     */
	private $territory;

    /**
     * @ORM\Column(length=12, nullable=true, name="post_code")
     */
	private $postCode;

    /**
     * @ORM\Column(length=6)
     */
	private $country;

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
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set Id
	 *
	 * @param integer $id
	 *
	 * @return Locality
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get locality
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set locality
	 *
	 * @param string $locality
	 *
	 * @return Locality
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get territory
	 *
	 * @return string
	 */
	public function getTerritory()
	{
		return $this->territory;
	}

	/**
	 * Set territory
	 *
	 * @param string $territory
	 *
	 * @return Locality
	 */
	public function setTerritory($territory)
	{
		$this->territory = $territory;

		return $this;
	}

	/**
	 * Get postCode
	 *
	 * @return string
	 */
	public function getPostCode()
	{
		return $this->postCode;
	}

	/**
	 * Set postCode
	 *
	 * @param string $postCode
	 *
	 * @return Locality
	 */
	public function setPostCode($postCode)
	{
		$this->postCode = $postCode;

		return $this;
	}

	/**
	 * Get country
	 *
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Set country
	 *
	 * @param string $country
	 *
	 * @return Locality
	 */
	public function setCountry($country)
	{
		$this->country = $country;

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
	 * @return Locality
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
	 * @return Locality
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
	 * @return Locality
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
	 * @return Locality
	 */
	public function setModifiedBy(\Busybee\Core\SecurityBundle\Entity\User $modifiedBy = null)
	{
		$this->modifiedBy = $modifiedBy;

		return $this;
	}
}
