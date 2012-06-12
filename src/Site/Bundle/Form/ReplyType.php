<?php

namespace Site\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ReplyType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
		$builder->add('content', 'textarea', array(
			'label' => 'Conent'
		));
    }
    
    public function getName()
    {
        return 'reply_form';
    }
}
