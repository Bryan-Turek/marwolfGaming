<?php

namespace Site\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CreateTopicType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
		$builder->add('topic.subject', 'text', array(
				'label' => 'Title'
		))
		->add('topic.category', 'entity', array(
				'class' => 'CoreBundle:Category',
				'label' => 'Category'
		))
        ->add('content', 'textarea');
    }
    
    public function getName()
    {
        return 'create_topic_form';
    }
}
