<?php 
namespace GH\SimpleVisitBundle\Subscriber;

use GH\SimpleVisitBundle\Event\SimpleVisitEvent;
class SimpleVisitSubscriber
{
	protected $em;
	
    public function __construct($em)
    {
		$this->em = $em;
    }

    public function onSimpleVisit(SimpleVisitEvent $event)
    {
    	$object = $event->getObject();
    	$object->{$event->getSetter()}($object->{$event->getGetter()}() + 1);
  		$this->em->persist($object);
		$this->em->flush();
    }
}