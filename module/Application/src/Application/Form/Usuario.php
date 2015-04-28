<?php

namespace Application\Form;

use Zend\Form\Form as Form;

/**
 * @author Christian R. Kolling <christian.si@unochapeco.edu.br> 
 */

class Usuario extends Form 
{

    public function __construct() 
    {
        parent::__construct('cadastro');
        $this->setAttribute('method', 'post');
        $this->setAttribute('action', '');

        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));

        $this->add(array(
            'name' => 'nome',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nome',
            ),
            'attributes' => array(
                'id' => 'nome',
                'class' => 'form-control input-lg',
                'placeholder' => 'Seu Nome',
            ),
        ));

        $this->add(array(
            'name' => 'sobrenome',
            'type' => 'Text',
            'options' => array(
                'label' => 'Sobrenome',
            ),
            'attributes' => array(
                'id' => 'sobrenome',
                'class' => 'form-control input-lg',
                'placeholder' => 'Sobrenome',
            ),
        ));

        $this->add(array(
            'name' => 'email',
            'type' => 'Text',
            'options' => array(
                'label' => 'E-mail',
            ),
            'attributes' => array(
                'id' => 'email',
                'class' => 'form-control input-lg',
                'placeholder' => 'Seu E-mail',
            ),
        ));

        $this->add(array(
            'name' => 'celular',
            'type' => 'Text',
            'options' => array(
                'label' => 'Celular',
            ),
            'attributes' => array(
                'id' => 'celular',
                'class' => 'form-control input-lg',
                'placeholder' => '(00) 0000-0000',
            ),
        ));

        $this->add(array(
            'name' => 'senha',
            'type' => 'Password',
            'options' => array(
                'label' => 'Senha',
            ),
            'attributes' => array(
                'id' => 'password',
                'class' => 'form-control input-lg',
                'placeholder' => 'Sua Senha',
            ),
        ));

        $this->add(array(
            'name' => 'confirmarsenha',
            'type' => 'Password',
            'options' => array(
                'label' => 'Confirme sua Senha',
            ),
            'attributes' => array(
                'id' => 'confirm-password',
                'class' => 'form-control input-lg',
                'placeholder' => 'Confirme sua Senha',
            ),
        ));
        
        $this->add(array(
            'type' => 'Select',
            'name' => 'sexo',
            'options' => array(
                'label' => 'Sexo ',
                'value_options' => array(
                    '1' => 'Masculino',
                    '2' => 'Feminino',
                ),
            ),
            'attributes' => array(
                'id' => 'sexo',
                'class' => 'form-control input-lg',
            ),
        ));
        
        $this->add(array(
            'name' => 'nascimento',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nascimento',
            ),
            'attributes' => array(
                'id' => 'nascimento',
                'class' => 'form-control input-lg',
                'placeholder' => 'Dia/Mês/Ano',
            ),
        ));

        $this->add(array(
            'name' => 'cadastro',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Registrar-se',
                'class' => 'btn btn-primary btn-block btn-lg',
            ),
        ));
    }

}
