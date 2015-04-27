<?php

namespace Application\Validator;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

class RecuperacaoSenha
{
    protected $inputFilter;
    
    public function getInputFilter() 
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();
            $inputFactory = new InputFactory();
            
            $inputFilter->add($inputFactory->createInput(array(
                        'name' => 'email',
                        'required' => true,
                        'filters' => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                            array(
                                'name' => 'NotEmpty',
                                'options' => array('message' => 'Precisamos do seu e-mail para localizar sua conta.')
                            ),
                            array(
                                'name' => 'EmailAddress',
                                'options' => array(
                                    'message' => 'E-mail Inválido.'
                                ),
                            ),
                        ),
            )));
            $this->inputFilter = $inputFilter;
        }
        return $this->inputFilter;
    }
}

