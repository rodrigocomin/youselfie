<?php

namespace Home\Controller;

use Core\Controller\ActionController;
use Zend\View\Model\ViewModel;

/**
 * @author Christian R. Kolling <christian.si@unochapeco.edu.br>
 */

class IndexController extends ActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
