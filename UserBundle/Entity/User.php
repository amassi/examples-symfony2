<?php
namespace GH\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use GH\ActivityStreamBundle\Normalizer\ObjectNormalizer;
use GH\ActivityStreamBundle\Model\Object;
use Doctrine\ORM\Mapping as ORM;
use GH\ActivityStreamBundle\Normalizer\MediaLinkNormalizer;
use GH\ActivityStreamBundle\Model\MediaLink;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser implements ObjectNormalizer, MediaLinkNormalizer 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * User image
     * @ORM\Column(name="image", type="string")
     * @var string image
     */
    protected $image;
    
    /**
     * __toString method
     *
     * @return string
     */
    public function __toString()
    {
    	return (string) $this->getUsername();
    }

    /**
     * Get image
     * @return string
     */
    public function getImage() {
    	return $this->image;
    }
    
    /**
     * Set image
     * @param $image
     * @return Object
     */
    public function setImage($image) {
    	$this->image = $image;
    	return $this;
    }
    
	/**
	 * (non-PHPdoc)
	 * @see \GH\ActivityStreamBundle\Entity\ObjectNormalizer::normalizeAsObject()
	 */
	public function normalizeAsObject() {
		$object = new Object();
		$object->setId($this->getId())->setDisplayName($this->__toString())
		->setObjectType($this->getActivityStreamObjectType())
		->setImage($this->normalizeAsMediaLink());
		return $object;
	}
	
	/**
	 * 
	 * @return \GH\UserBundle\Entity\MediaLink
	 */
	public function normalizeAsMediaLink() {
		$mediaLink = new MediaLink();
		
		$mediaLink
		->setUrl($this->getImage())
		->setWidth(24)
		->setHeight(24);
		
		return $mediaLink;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \GH\ActivityStreamBundle\Normalizer\ObjectNormalizer::getActivityStreamObjectType()
	 */
	public function getActivityStreamObjectType() {
		return 'person';
	}
}