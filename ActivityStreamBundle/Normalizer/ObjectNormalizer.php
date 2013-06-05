<?php
namespace GH\ActivityStreamBundle\Normalizer;
use GH\ActivityStreamBundle\Model\Object;
/**
 * Normalize Activity Object
 * @author ghaliano
 */
interface ObjectNormalizer {
	/**
	 * Normalize Object as valide Activity stream object
	 * @return Object
	 */
	public function normalizeAsObject();
	
	/**
	 * Normalize Object as valide Activity stream object
	 * @return Object
	 */
	public function getActivityStreamObjectType();
}