<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Progress Controller
 *
 * @property \App\Model\Table\ProgressTable $Progress
 */
class ProgressController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Progress->find()
            ->contain(['Users', 'Courses']);
        $progress = $this->paginate($query);

        $this->set(compact('progress'));
    }

    /**
     * View method
     *
     * @param string|null $id Progres id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $progres = $this->Progress->get($id, contain: ['Users', 'Courses']);
        $this->set(compact('progres'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $progres = $this->Progress->newEmptyEntity();
        if ($this->request->is('post')) {
            $progres = $this->Progress->patchEntity($progres, $this->request->getData());
            if ($this->Progress->save($progres)) {
                $this->Flash->success(__('The progres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The progres could not be saved. Please, try again.'));
        }
        $users = $this->Progress->Users->find('list', limit: 200)->all();
        $courses = $this->Progress->Courses->find('list', limit: 200)->all();
        $this->set(compact('progres', 'users', 'courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Progres id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $progres = $this->Progress->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $progres = $this->Progress->patchEntity($progres, $this->request->getData());
            if ($this->Progress->save($progres)) {
                $this->Flash->success(__('The progres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The progres could not be saved. Please, try again.'));
        }
        $users = $this->Progress->Users->find('list', limit: 200)->all();
        $courses = $this->Progress->Courses->find('list', limit: 200)->all();
        $this->set(compact('progres', 'users', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Progres id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $progres = $this->Progress->get($id);
        if ($this->Progress->delete($progres)) {
            $this->Flash->success(__('The progres has been deleted.'));
        } else {
            $this->Flash->error(__('The progres could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
