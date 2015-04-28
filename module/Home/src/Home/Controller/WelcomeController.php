<?php

namespace Home\Controller;

use Core\Controller\ActionController;
use Zend\View\Model\ViewModel;

/**
 * @author Christian R. Kolling <christian.si@unochapeco.edu.br>
 */

class WelcomeController extends ActionController
{
    public function homeAction()
    {
        return new ViewModel();
    }
}
