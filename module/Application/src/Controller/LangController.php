<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LangController extends AbstractActionController
{
    public function setAction()
    {

        $session = new \Zend\Session\Container('language');
        $language = $this->getRequest()->getPost()->language;

        if ($language == "es" || $language == "en") {
            $session->language = $language;
        }
        $this->redirect()->toRoute("Home");
    }
}
