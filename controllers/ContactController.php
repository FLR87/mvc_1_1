<?php
include_once ROOT . '/controllers/Controller.php';

 class ContactController extends Controller {

     public function actionIndex() {
         $this->view->generate('template_view.php', 'contact/index.phtml');
         return true;
     }
 }