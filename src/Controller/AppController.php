<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;


class AppController extends Controller
{
   

    public function initialize(): void
{
    {
        parent::initialize();
        $this->loadComponent('Flash');
    
        // Add this line to check authentication result and lock your site
        $this->loadComponent('Authentication.Authentication');
        $this->viewBuilder()->setLayout('auth');
    
}
}
public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    // for all controllers in our application, make index and view+}
    // actions public, skipping the authentication check
    $this->Authentication->addUnauthenticatedActions(['index', 'view']);

    $controller = $this->getRequest()->getParam( 'controller');
    
  if (($controller=== 'Pages')){
        $this->Authentication->allowUnauthenticated(['display','about','contact']);
     }
     if(($controller=== 'Users')){
        $this->Authentication->allowUnauthenticated(['login','signup']);
     }
    }
    
}

