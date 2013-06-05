<?php
namespace GH\ActivityStreamBundle\Normalizer;
use GH\ActivityStreamBundle\Model\Object;
/**
 * Normalize Media link object 
 * @author ghaliano
 */
interface MediaLinkNormalizer {
	/**
	 * Normalize Object as valide Activity stream object
	 * @return Object
	 */
	public function normalizeAsMediaLink();
}