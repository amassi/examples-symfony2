<?php
namespace GH\ActivityStreamSandboxBundle\Entity;

use GH\ActivityStreamBundle\Normalizer\ObjectNormalizer;
use GH\ActivityStreamBundle\Model\Object;
use GH\ActivityStreamBundle\Model\MediaLink;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use GH\ActivityStreamBundle\Normalizer\MediaLinkNormalizer;

/**
 * 
 * @ORM\Entity
 * @ORM\Table(name="project")
 *
 */
class Project implements ObjectNormalizer {
	/**
	 * Auto incremented Project ID
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var int $id
	 */
	protected $id;

	/**
	 * Project Title
	 * @ORM\Column(name="title", type="string")
	 * @var string title
	 */
	protected $title;

	/**
	 * Project summary
	 * @ORM\Column(name="summary", type="text")
	 * @var string title
	 */
	protected $summary;
	
	/**
	 * @ORM\OneToMany(targetEntity="Ticket",mappedBy="project", cascade={"persist", "remove"})
	 * @var ArrayCollection
	 */
	protected $tickets;

	/**
	 * (non-PHPdoc)
	 * @see \GH\ActivityStreamBundle\Entity\ObjectNormalizer::normalizeAsObject()
	 */
	public function normalizeAsObject() {
		$object = new Object();
		
		$object
		->setId($this->getId())
		->setDisplayName($this->getTitle())
		->setObjectType($this->getActivityStreamObjectType());
		return $object;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \GH\ActivityStreamBundle\Normalizer\ObjectNormalizer::getActivityStreamObjectType()
	 */
	public function getActivityStreamObjectType() {
		return 'project';
	}
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Project
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
     * Set summary
     *
     * @param string $summary
     * @return Project
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

    /**
     * Add tickets
     *
     * @param \GH\ActivityStreamSandboxBundle\Entity\Ticket $tickets
     * @return Project
     */
    public function addTicket(\GH\ActivityStreamSandboxBundle\Entity\Ticket $tickets)
    {
        $this->tickets[] = $tickets;

        return $this;
    }

    /**
     * Remove tickets
     *
     * @param \GH\ActivityStreamSandboxBundle\Entity\Ticket $tickets
     */
    public function removeTicket(\GH\ActivityStreamSandboxBundle\Entity\Ticket $tickets)
    {
        $this->tickets->removeElement($tickets);
    }

    /**
     * Get tickets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTickets()
    {
        return $this->tickets;
    }
}
