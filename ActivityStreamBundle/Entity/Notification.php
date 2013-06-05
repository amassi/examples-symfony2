<?php
namespace GH\ActivityStreamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * For each activity we need to create 0 to many notification
 * for example when Ahmed post a note, we need to notifiy Mick about
 * notification can have multiple context (personal wall, group wall, flash, email)
 * Mick can also custumize wich notification is agree to recieve 
 * ( disable/enable email for custum notification )
 * 
 * @ORM\Entity
 * @ORM\Table(name="notification")
 */
class Notification {	
	/**
	 * Auto incremented notification ID
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var int $id
	 */
	var $id;
	
	/**
	 * Activity object
	 * @ORM\Column(name="activity", type="text")
	 * @var GH\ActivityStreamBundle\Entity\Activity $activity
	 */
	var $activity;	
	
	/**
	 * Context can be a personal wall, group wall, flash, email
	 * @ORM\Column(name="context", type="string")
	 * @var string
	 */
	var $context;	
	
	/**
	 * Context ID
	 * can be a registred user ID who recieve/show the notification
	 * can be an availebale space/group who display the notification
	 * @ORM\Column(name="context_id", type="integer")
	 * @var int
	 */
	var $contextId;

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
     * Set activity
     *
     * @param string $activity
     * @return Notification
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return string 
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return Notification
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set contextId
     *
     * @param integer $contextId
     * @return Notification
     */
    public function setContextId($contextId)
    {
        $this->contextId = $contextId;

        return $this;
    }

    /**
     * Get contextId
     *
     * @return integer 
     */
    public function getContextId()
    {
        return $this->contextId;
    }
}
