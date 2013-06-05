<?php 
namespace GH\SimpleVisitBundle\Event;
use Symfony\Component\EventDispatcher\Event;
class SimpleVisitEvent extends Event{
	protected $object;
	protected $getter;
	protected $setter;
	protected $attribute;
	
	public function __construct($object, $attribute, $getter = null, $setter = null)
	{
		$this->object = $object;
		$this->attribute = $attribute;

		$genericGetter = 'get' . ucfirst($this->attribute);
		$genericSetter = 'set' . ucfirst($this->attribute);
		
		$class = new \ReflectionClass(get_class($this->object)); 
		
		if($class->hasMethod($genericGetter) && !$getter)
		{
			$this->getter = $genericGetter;
		}else if($getter)
		{
			$this->getter = $getter;
		}else
		{
			throw new \LogicException(sprintf('Your must provide a getter method for object %s because no method %s was found', get_class($object), $genericGetter));
		}
		
		if($class->hasMethod($genericSetter) && !$setter) 
		{
			$this->setter = $genericSetter;
		}else if($setter)
		{
			$this->setter = $setter;
		}else
		{
			throw new \LogicException(sprintf('Your must provide a getter method for object %s because no method %s was found', get_class($object), $genericSetter));
		}
	}
	
	public function getObject()
	{
		return $this->object;
	}
	
	public function getAttribute()
	{
		return $this->attribute;
	}
	
	public function getGetter()
	{
		return $this->getter;
	}
	
	public function getSetter()
	{
		return $this->setter;
	}
}