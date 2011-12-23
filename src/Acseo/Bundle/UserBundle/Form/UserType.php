<?php

namespace Acseo\Bundle\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('isActive')
            ->add('isAdmin')
            ->add('password')
            ->add('username')
            ->add('managers')
        ;
    }

    public function getName()
    {
        return 'acseo_bundle_userbundle_usertype';
    }
}
