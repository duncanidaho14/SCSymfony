<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="events")
*/
class Event 
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
	 * @ORM\Column(type="string", length=255)
	 **/

	private $location;


	/**
	 * @ORM\Column(type="decimal", precision=5, scale=2)
	 **/
	
    private $price;

    /**
    *    @ORM\Column(type="text")
    **/
    
    private $description;

    /**
    *    @ORM\Column(type="datetime")
    **/
    
    private $startsAt;

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
     * @return Event
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
     * Set location
     *
     * @param string $location
     *
     * @return Event
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Event
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event
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
     * Set startsAt
     *
     * @param \DateTime $startsAt
     *
     * @return Event
     */
    public function setStartsAt($startsAt)
    {
        $this->startsAt = $startsAt;

        return $this;
    }

    /**
     * Get startsAt
     *
     * @return \DateTime
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }


    /*
    *   Check if the event is free or not
    *   @return boolean
    */
    public function isFree()
    {
        return $this->price == 0;
    }

}
