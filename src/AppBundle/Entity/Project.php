<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="projects")
*/
class Project 
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 **/
	private $id;


	/**
	 * @ORM\Column(type="string", length=255)
	 **/

	private $name;


	/**
	 * @ORM\Column(type="text")
	 **/

	private $description;


	/**
	 * @ORM\Column(type="decimal", precision=15, scale=2)
	 **/
	private $target_amount;


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
     * Set name
     *
     * @param string $name
     *
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set targetAmount
     *
     * @param string $targetAmount
     *
     * @return Project
     */
    public function setTargetAmount($targetAmount)
    {
        $this->target_amount = $targetAmount;

        return $this;
    }

    /**
     * Get targetAmount
     *
     * @return string
     */
    public function getTargetAmount()
    {
        return $this->target_amount;
    }
}
