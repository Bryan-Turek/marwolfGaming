<?php

namespace Site\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
		$builder->add('name', 'text', array(
			'label' => 'Username'
		))
		->add('password', 'password', array(
			'label' => 'Password'
		));
    }
    
    public function getName()
    {
        return 'login_form';
    }
}
