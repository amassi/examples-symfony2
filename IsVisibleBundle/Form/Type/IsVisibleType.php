<?php
 
namespace GH\IsVisibleBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IsVisibleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
 
        $options['main_options']['label_render'] = false;
        
        $builder->add($options['name'], $options['type'], $options['main_options']);
 
        $options['extra_options']['label_render'] = false;
        
        $builder->add($options['name'] . '_visible', 'checkbox', $options['extra_options']);
    }
    
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	    $resolver->setDefaults(array(
	    	'required' => false,
	        'virtual' => true,
	    	'name' => null,
	    	'type' => 'text',
	    	'extra_options' => array(),
	    	'main_options' => array()
	    ));
	}
    
    public function getName()
    {
        return 'gh_is_visible';
    }
}