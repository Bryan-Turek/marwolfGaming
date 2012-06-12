<?php

namespace Site\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
		$builder->add('name', 'text', array(
			'label' => 'Username'
		))
		->add('password', 'password', array(
			'label' => 'Password'
		))
		->add('email', 'email', array(
			'label' => 'Email'
		));
    }
    
    public function getName()
    {
        return 'registration_form';
    }
}
