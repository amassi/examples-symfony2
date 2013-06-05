<?php
namespace GH\ActivityStreamBundle\Model;
use GH\ActivityStreamBundle\Entity\ActivityItem;

class Object {
	/**
	 * Actor ID
	 * @var int $id
	 */
	var $id;

	/**
	 * Actor url
	 * @var string $url
	 */
	var $url;

	/**
	 * Object image representation
	 * @var string $image
	 */
	var $image;

	/**
	 * Object display name
	 * @var string $displayName
	 */
	var $displayName;

	/**
	 * Object display name
	 * @var string $displayName
	 */
	var $objectType;

	/**
	 * @return the int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param $id
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Get url
	 * @return string
	 * @return Object
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Set url
	 * @param string $url
	 * @return Object
	 */
	public function setUrl($url) {
		$this->url = $url;
		return $this;
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
	 * Get displayName
	 * @return string
	 */
	public function getDisplayName() {
		return $this->displayName;
	}

	/**
	 * Set displayName
	 * @param string $displayName
	 * @return Object
	 */
	public function setDisplayName($displayName) {
		$this->displayName = $displayName;
		return $this;
	}

	/**
	 * Get objectType
	 * @return string
	 */
	public function getObjectType() {
		return $this->objectType;
	}

	/**
	 * Set objectType
	 * @param string $objectType
	 * @return Object
	 */
	public function setObjectType($objectType) {
		$this->objectType = $objectType;
		return $this;
	}
}