<?php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('name');
    }

    public function getName()
    {
        return 'user_registration';
    }

    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $params = array(
            'angular'=>true,
        );

        $this->setParam( $view, $params);

    }

    private function setParam(FormView $view, array $params)
    {
        $this->updateParam($view, $params);
        $this->updateChild($view, $params);
    }

    private function updateChild(FormView $parent, array $params)
    {
        foreach ($parent->children as $child){
            $this->updateParam($child, $params);
            $this->updateChild($child, $params);
        }
    }

    private function updateParam(FormView $view, array $params)
    {
        foreach($params as $key => $value){
            $view->vars[$key] = $value;
        }
    }

}
