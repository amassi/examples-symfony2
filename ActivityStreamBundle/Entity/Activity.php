<?php 
namespace GH\ActivityStreamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * For full & complete detail
 * @link http://activitystrea.ms/specs/json/1.0/
 * @author Ahmed GHALI<ghaliano2005@gmail.com>
 * 
 * @ORM\Entity
 * @ORM\Table(name="activity")
 *
 */
class Activity {
	/**
	 * Auto incremented Activity ID
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO") 
	 * @var int $id
	 */
	protected $id;
	
	/**
	 * Activity Title
	 * @ORM\Column(name="title", type="string")
	 * @var string title 
	 */
	protected $title;
	
	/**
	 * Activity summary
	 * @ORM\Column(name="summary", type="text")
	 */
	protected $summary;
	
	/**
	 * Activity published at
	 * @ORM\Column(name="published", type="date")
     * @Gedmo\Timestampable(on="create")
	 * @var \DateTime $published
	 */
	protected $published;
	
	/**
	 * Activity Actor
	 * @ORM\Column(name="actor", type="text")
	 * @var string $actor
	 */
	protected $actor;
	
	/**
	 * Activity verb
	 * @ORM\Column(name="verb", type="string")
	 * @var string $verb
	 */
	protected $verb;
	
	/**
	 * Activity object
	 * @ORM\Column(name="object", type="text")
	 * @var string $object
	 */
	protected $object;
	
	/**
	 * Activity target
	 * @ORM\Column(name="target", type="text")
	 * @var string $target
	 */
	protected $target;

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
     * Set title
     *
     * @param string $title
     * @return Activity
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set published
     *
     * @param \DateTime $published
     * @return Activity
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return \DateTime 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set actor
     *
     * @param string $actor
     * @return Activity
     */
    public function setActor($actor)
    {
        $this->actor = $actor;

        return $this;
    }

    /**
     * Get actor
     *
     * @return string 
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Set verb
     *
     * @param string $verb
     * @return Activity
     */
    public function setVerb($verb)
    {
        $this->verb = $verb;

        return $this;
    }

    /**
     * Get verb
     *
     * @return string 
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Set object
     *
     * @param string $object
     * @return Activity
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string 
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return Activity
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Activity
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }
}
