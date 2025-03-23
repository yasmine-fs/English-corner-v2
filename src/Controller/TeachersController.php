<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Teachers Controller
 *
 * @property \App\Model\Table\TeachersTable $Teachers
 */
class TeachersController extends AppController
{
    
    public function initialize(): void {
        parent::initialize();
        // Load the Authentication component
        $this->loadComponent('Authentication.Authentication');
    }

    /**
     * Teacher Signup (Registration)
     */
    public function signup()
    {
        $teacher = $this->Teachers->newEmptyEntity();
        
        if ($this->request->is('post')) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->getData());
    
            // Handle certificate upload
            $file = $this->request->getData('certificate');
            if ($file && $file->getError() === UPLOAD_ERR_OK) {
                $filename = time() . '-' . $file->getClientFilename(); // Unique file name
                $uploadPath = WWW_ROOT . 'uploads/certificates/' . $filename; 
    
                if (move_uploaded_file($file->getStream()->getMetadata('uri'), $uploadPath)) {
                    $teacher->certificate_path = 'uploads/certificates/' . $filename;
                    $teacher->certificate_status = 'pending'; // Set status to pending
                }
            }
    
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('Signup successful! Your certificate is pending approval.'));
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('Signup failed. Please check your details and try again.'));
            }
        }
    
        $this->set(compact('teacher'));
    }
    
    public function approve($id = null)
{
    $teacher = $this->Teachers->get($id);
    if ($teacher) {
        $teacher->status = 'approved';
        if ($this->Teachers->save($teacher)) {
            $this->Flash->success(__('Teacher approved successfully.'));
        } else {
            $this->Flash->error(__('Unable to approve teacher.'));
        }
    }
    return $this->redirect(['action' => 'index']);
}


    /**
     * Teacher Login
     */
    public function login() {
        // Retrieve authentication result
        $result = $this->Authentication->getResult();
        
        // If already logged in, redirect to dashboard (or teacher homepage)
        if ($result->isValid()) {
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Dashboard', 'action' => 'index']);
            return $this->redirect($redirect);
        }
        
        // If request is POST and login fails, display error
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password, please try again.'));
        }
        
        // Render the login view (templates/Teachers/login.php)
    }

    /**
     * Teacher Logout
     */
    public function logout() {
        // Use the Authentication component to log out
        $this->Authentication->logout();
        $this->Flash->success(__('You have been logged out successfully.'));
        return $this->redirect(['action' => 'login']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Teachers->find()
            ->contain(['Users']);
        $teachers = $this->paginate($query);

        $this->set(compact('teachers'));
    }

    /**
     * View method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teacher = $this->Teachers->get($id, contain: ['Users', 'Courses']);
        $this->set(compact('teacher'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teacher = $this->Teachers->newEmptyEntity();
        if ($this->request->is('post')) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->getData());
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('The teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teacher could not be saved. Please, try again.'));
        }
        $users = $this->Teachers->Users->find('list', limit: 200)->all();
        $this->set(compact('teacher', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teacher = $this->Teachers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->getData());
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('The teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teacher could not be saved. Please, try again.'));
        }
        $users = $this->Teachers->Users->find('list', limit: 200)->all();
        $this->set(compact('teacher', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teacher = $this->Teachers->get($id);
        if ($this->Teachers->delete($teacher)) {
            $this->Flash->success(__('The teacher has been deleted.'));
        } else {
            $this->Flash->error(__('The teacher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
