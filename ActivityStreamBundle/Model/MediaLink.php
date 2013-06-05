<?php

namespace GH\ActivityStreamBundle\Model;
class MediaLink {
	/**
	 * Media url
	 * @var string $url
	 */
	var $url;

	/**
	 * Media width
	 * @var int $width
	 */
	var $width;

	/**
	 * Media height
	 * @var int $height
	 */
	var $height;

	/**
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @param string $url
	 */
	public function setUrl($url) {
		$this->url = $url;
		
		return $this;
	}

	/**
	 * @return int
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * @param int $width
	 */
	public function setWidth($width) {
		$this->width = $width;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * @param int $height
	 */
	public function setHeight($height) {
		$this->height = $height;

		return $this;
	}

}
