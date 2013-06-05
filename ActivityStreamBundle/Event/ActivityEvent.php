<?php
namespace GH\ActivityStreamBundle\Event;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

use GH\ActivityStreamBundle\Entity\Activity;
use Symfony\Component\EventDispatcher\Event;

class ActivityEvent extends Event{
	protected $activity;
	
    public function __construct($activity)
    {
        $this->activity = $activity;
    }

    public function getActivity()
    {
        return $this->activity;
    }
} 