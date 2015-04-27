<?php

namespace Application\Form;

use Zend\Form\Form as Form;

/**
 * @author Christian R. Kolling <christian.si@unochapeco.edu.br>
 * 
 */

class RecuperarSenha extends Form
{
    public function __construct() 
    {
        parent::__construct('recuperar');
        $this->setAttribute('method', 'post');
        $this->setAttribute('action', '');
        
        $this->add(array(
            'name' => 'email',
            'type' => 'Text',
            'options' => array(
                'label' => 'Informe seu E-mail',
            ),
            'attributes' => array(
                'id' => 'email',
                'class' => 'form-control input-lg',
                'placeholder' => 'Seu E-mail',
            ),
        ));
 
        $this->add(array(
            'name' => 'recuperar',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Recuperar Senha',
                'class' => 'btn btn-lg btn-success btn-block',
            ),
        ));
        
    }

}

