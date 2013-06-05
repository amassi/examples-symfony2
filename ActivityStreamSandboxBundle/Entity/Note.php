<?php
namespace GH\ActivityStreamSandboxBundle\Entity;
use GH\ActivityStreamBundle\Normalizer\ObjectNormalizer;
use GH\ActivityStreamBundle\Model\Object;
use GH\ActivityStreamSandboxBundle\Entity\Ticket;
use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Entity
 * @ORM\Table(name="as_sandbox_note")
 */
class Note implements ObjectNormalizer {
	/**
	 * Auto incremented Note ID
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var int $id
	 */
	protected $id;

	/**
	 * Note Title
	 * @ORM\Column(name="title", type="string")
	 * @var string title
	 */
	protected $title;

	/**
	 * Note summary
	 * @ORM\Column(name="summary", type="text")
	 * @var string title
	 */
	protected $summary;

    /**
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     * @var Ticket $ticket
     */
	protected $ticket;

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
		return 'note';
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
     * @return Note
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
     * @return Note
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
     * Set ticket
     *
     * @param \GH\ActivityStreamSandboxBundle\Entity\Ticket $ticket
     * @return Note
     */
    public function setTicket(\GH\ActivityStreamSandboxBundle\Entity\Ticket $ticket = null)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \GH\ActivityStreamSandboxBundle\Entity\Ticket 
     */
    public function getTicket()
    {
        return $this->ticket;
    }
}
