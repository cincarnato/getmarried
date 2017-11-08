<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $form = new \Application\Form\Contact();
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            $form->setData($data);
            if ($form->isValid()) {

                //Send Mail
                if($this->notify($data)){
                    //Redirect Contact ok
                    $this->redirect()->toRoute("ContactOk");
                }

            }
        }
        $viewModel = new \Zend\View\Model\ViewModel(['form' => $form]);
        return $viewModel;

    }


    public function termsConditionAction()
    {
        $this->layout('layout/layout2');
    }

    public function contactOkAction(){
        $this->layout('layout/layout2');
    }


    public function contactAction() {
        $form = new \Frontend\Form\Contact();
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            $form->setData($data);
            if ($form->isValid()) {

                //Send Mail
                if($this->notify($data)){
                    //Redirect Contact ok
                    $this->redirect()->toRoute("Home");
                }

            }
        }
        $viewModel = new \Zend\View\Model\ViewModel(['form' => $form]);
        return $viewModel;
    }

    public function notify($data) {
        $this->mailManager()->setTemplate('application/mail/contact', ["data" => $data]);
        $this->mailManager()->setFrom("ci.sys.virtual@gmail.com");
        $this->mailManager()->addTo("cristian.cdi@gmail.com", "Cristian Incarnato");
        $this->mailManager()->addTo("getmarriedinargentina@gmail.com", "GetMarried");
        $this->mailManager()->setSubject('Contacto Get Married - '.$data["name"].' '.$data["lastname"]);

        if ($this->mailManager()->send()) {
              return true;
        } else {
            return false;
        }
    }

}
