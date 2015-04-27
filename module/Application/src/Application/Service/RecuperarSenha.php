<?php

namespace Application\Service;

use Core\Service\Service as Service;

class RecuperarSenha extends Service
{
    public function getNovaSenha($usuario)
    {
        $novaSenha = $this->randomPassword();
        $usuario->setSenha(md5($novaSenha));
        $usuario->setConfirmarsenha(md5($novaSenha));
        
        $this->getObjectManager()->persist($usuario);
        try {
            $this->getObjectManager()->flush();
        } catch (\Exception $ex) {
            return false;
        }
        return $novaSenha;
    }
    
    private function randomPassword() 
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

}