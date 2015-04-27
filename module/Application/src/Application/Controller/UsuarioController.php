<?php

namespace Application\Controller;

use Core\Controller\ActionController;
use Zend\View\Model\ViewModel;
use Application\Form\Usuario as Usuario;
use Application\Model\Usuario as User;
use Application\Validator\Usuario as validatorUsuario;

/**
 * @author Christian R. Kolling <christian.si@unochapeco.edu.br>
 */

class UsuarioController extends ActionController 
{
    public function novoAction() 
    {
        $form = new Usuario();
        $validatorUsuario = new validatorUsuario();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setInputFilter($validatorUsuario->getInputFilter());
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $dados = $form->getData();
                $email = $this->getObjectManager()->getRepository('Application\Model\Usuario')
                        ->findOneBy(array(
                    'email' => $dados['email']
                ));
                if ($email) {
                    $this->flashMessenger()->addInfoMessage('Ops! Verificamos que você já possui uma conta. Faça login, ou recupere sua senha.');
                } else {
                    try {
                        $this->getService('Application\Service\Usuario')->saveUsuario($dados);
                        $this->flashMessenger()->addSuccessMessage('Obrigado por se cadastrar no Youselfie, faça login com suas informações.');
                    } catch (\Exception $e) {
                        $this->flashMessenger()->addErrorMessage('Não foi possível continuar com seu cadastro, por favor tente mais tarde.');
                    }
                }
                return $this->redirect()->toUrl('/');
            }
        }

        return new ViewModel(array(
            'form' => $form,
        ));
    }

}
