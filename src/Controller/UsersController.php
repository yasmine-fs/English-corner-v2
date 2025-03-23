<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Filesystem\File;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('auth');
        $query = $this->Users->find();
        $users = $this->paginate($query);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('auth');
        $user = $this->Users->get($id, contain: ['Students', 'Teachers']);
        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
       

        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
       

        $user = $this->Users->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }



    public function signup()
    {
        $usersTable = TableRegistry::getTableLocator()->get('Users'); // Load Users model
        $user = $usersTable->newEmptyEntity();
    
        if ($this->request->is('post')) {
            $user = $usersTable->patchEntity($user, $this->request->getData());
    
            // Ensure the role is set to 'teacher'
            $user->role = 'teacher';
            $user->certificate_status = 'pending'; // Default status
    
            // Handle PDF Certificate Upload
            $file = $this->request->getData('certificate');
    
            if (!$file || $file->getError() !== UPLOAD_ERR_OK) {
                $this->Flash->error(__('Certificate file is required.'));
                return $this->redirect($this->referer());
            }
    
            // Validate PDF format
            if ($file->getClientMediaType() !== 'application/pdf') {
                $this->Flash->error(__('Only PDF files are allowed.'));
                return $this->redirect($this->referer());
            }
    
            // Ensure 'uploads/certificates' directory exists
            $uploadPath = WWW_ROOT . 'uploads' . DS . 'certificates' . DS;
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }
    
            // Generate a unique file name
            $fileName = time() . '_' . $file->getClientFilename();
            $targetPath = $uploadPath . $fileName;
    
            if ($file->moveTo($targetPath)) {
                // Save certificate path in the database
                $user->certificate_path = 'uploads/certificates/' . $fileName;
            } else {
                $this->Flash->error(__('Certificate upload failed.'));
                return $this->redirect($this->referer());
            }
    
            if ($usersTable->save($user)) {
                $this->Flash->success(__('Registration successful! Your certificate is pending admin approval.'));
                return $this->redirect(['action' => 'login']);
            }
    
            $this->Flash->error(__('Registration failed. Please check your details and try again.'));
        }
    
        $this->set(compact('user'));
    }
    

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    // Configure the login action to not require authentication, preventing
    // the infinite redirect loop issue
    $this->Authentication->addUnauthenticatedActions(['login','add','edit','delete','signup']);
}

public function login()
{
    
    $this->request->allowMethod(['get', 'post']);
    $result = $this->Authentication->getResult();
    
    // regardless of POST or GET, redirect if user is logged in
    if ($result && $result->isValid()) {
        // redirect to /articles after login success
        $redirect = $this->request->getQuery('redirect', ['controller' => 'Users','action' => 'index',]);
        return $this->redirect($redirect);
    }
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        
        if ($user) {
            if ($user['role'] === 'teacher' && $user['certificate_status'] !== 'approved') {
                $this->Flash->error(__('Your certificate is pending approval.'));
                return $this->redirect($this->referer());
            }

            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid email or password.'));
    }
    }
    

public function logout()
{
    $result = $this->Authentication->getResult();
    // regardless of POST or GET, redirect if user is logged in
    if ($result && $result->isValid()) {
        $this->Authentication->logout();

        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }
}

}






