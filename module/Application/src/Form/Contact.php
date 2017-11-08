<?php

namespace Application\Form;

use Zend\Form\Form;

class Contact extends \Zend\Form\Form {

    public function __construct() {
        parent::__construct('contacto');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', "apply-form form-group");
        $this->setAttribute('role', "form");

        $this->add(array(
            'name' => 'name',
            'type' => 'Zend\Form\Element\Text',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'Name',
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'country',
            'type' => 'Zend\Form\Element\Text',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'Country',
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'email',
            'type' => 'Zend\Form\Element\Text',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'Email',
                'required' => 'required',
            ),
        ));

        $this->add(array(
            'name' => 'message',
            'type' => 'Zend\Form\Element\Textarea',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'Message',
                'required' => 'required',
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => "Send",
                'class' => 'btn1 btn-center',
            ),
        ));

        $this->getInputFilter()->add([
            'name' => 'email',
            'validators' => [
                [
                    'name' => 'Zend\Validator\EmailAddress',
                ]
            ],
        ]);
    }

}