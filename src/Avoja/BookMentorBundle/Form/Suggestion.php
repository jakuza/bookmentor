<?php

namespace Avoja\BookMentorBundle\Form;

use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder;

class Suggestion extends AbstractType
{
    public function buildForm(Formbuilder $builder, array $options)
    {
        $builder->add('username');
    }
}
