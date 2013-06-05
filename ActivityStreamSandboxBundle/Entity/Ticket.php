<?php
namespace GH\ActivityStreamSandboxBundle\Entity;
use GH\ActivityStreamBundle\Normalizer\ObjectNormalizer;
use GH\ActivityStreamBundle\Model\Object;
use GH\ActivityStreamSandboxBundle\Entity\Project;
use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Entity
 * @ORM\Table(name="as_sandbox_ticket")
 * 
 */
class Ticket implements ObjectNormalizer {
	/**
	 * Auto incremented Note ID
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var int $id
	 */
	protected $id;

	/**
	 * Note summary
	 * @ORM\Column(name="summary", type="text")
	 * @var string title
	 */
	protected $summary;
	
	/**
	 * @ORM\OneToMany(targetEntity="Note",mappedBy="ticket", cascade={"persist", "remove"})
	 * @var ArrayCollection
	 */
	protected $notes;

    /**
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * @var Project $project
     */
	protected $project;

	/**
	 * (non-PHPdoc)
	 * @see \GH\ActivityStreamBundle\Entity\ObjectNormalizer::normalizeAsObject()
	 */
	public function normalizeAsObject() {
		$object = new Object();
		$object->setId($this->getId())->setDisplayName($this->getTitle())
		->setObjectType($this->getActivityStreamObjectType());
		return $object;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \GH\ActivityStreamBundle\Normalizer\ObjectNormalizer::getActivityStreamObjectType()
	 */
	public function getActivityStreamObjectType() {
		return 'ticket';
	}
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set summary
     *
     * @param string $summary
     * @return Ticket
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
     * Add notes
     *
     * @param \GH\ActivityStreamSandboxBundle\Entity\Note $notes
     * @return Ticket
     */
    public function addNote(\GH\ActivityStreamSandboxBundle\Entity\Note $notes)
    {
        $this->notes[] = $notes;

        return $this;
    }

    /**
     * Remove notes
     *
     * @param \GH\ActivityStreamSandboxBundle\Entity\Note $notes
     */
    public function removeNote(\GH\ActivityStreamSandboxBundle\Entity\Note $notes)
    {
        $this->notes->removeElement($notes);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set project
     *
     * @param \GH\ActivityStreamSandboxBundle\Entity\Project $project
     * @return Ticket
     */
    public function setProject(\GH\ActivityStreamSandboxBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \GH\ActivityStreamSandboxBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
}
