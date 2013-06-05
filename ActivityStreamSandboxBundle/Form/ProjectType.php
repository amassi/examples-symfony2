<?php

namespace GH\ActivityStreamSandboxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('summary')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GH\ActivityStreamSandboxBundle\Entity\Project'
        ));
    }

    public function getName()
    {
        return 'gh_activitystreamsandboxbundle_projecttype';
    }
}
