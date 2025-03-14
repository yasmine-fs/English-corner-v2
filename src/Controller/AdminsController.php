<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 */
class AdminsController extends AppController
{
    public function initialize(): void {
        parent::initialize();
        // Load the authentication component
        $this->loadComponent('Authentication.Authentication');
    }
    public function login() {
        // Retrieve the authentication result
        $result = $this->Authentication->getResult();
        
        // If admin is already logged in, redirect them
        if ($result->isValid()) {
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Dashboard', 'action' => 'index']);
            return $this->redirect($redirect);
        }
        
        // If the request is POST and login failed, set an error message
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password, try again.'));
        }
        
        // Render the login view (templates/Admins/login.php)
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Admins->find();
        $admins = $this->paginate($query);

        $this->set(compact('admins'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admins->get($id, contain: []);
        $this->set(compact('admin'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admins->newEmptyEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admins->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admins->get($id);
        if ($this->Admins->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function logout() {
        // Perform logout via the Authentication component
        $this->Authentication->logout();
        $this->Flash->success(__('You have been logged out successfully.'));
        return $this->redirect(['action' => 'login']);
    }
}

