<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Coursecategories Controller
 *
 * @property \App\Model\Table\CoursecategoriesTable $Coursecategories
 */
class CoursecategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Coursecategories->find();
        $coursecategories = $this->paginate($query);

        $this->set(compact('coursecategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Coursecategory id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursecategory = $this->Coursecategories->get($id, contain: []);
        $this->set(compact('coursecategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursecategory = $this->Coursecategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $coursecategory = $this->Coursecategories->patchEntity($coursecategory, $this->request->getData());
            if ($this->Coursecategories->save($coursecategory)) {
                $this->Flash->success(__('The coursecategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coursecategory could not be saved. Please, try again.'));
        }
        $this->set(compact('coursecategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coursecategory id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursecategory = $this->Coursecategories->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursecategory = $this->Coursecategories->patchEntity($coursecategory, $this->request->getData());
            if ($this->Coursecategories->save($coursecategory)) {
                $this->Flash->success(__('The coursecategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coursecategory could not be saved. Please, try again.'));
        }
        $this->set(compact('coursecategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coursecategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursecategory = $this->Coursecategories->get($id);
        if ($this->Coursecategories->delete($coursecategory)) {
            $this->Flash->success(__('The coursecategory has been deleted.'));
        } else {
            $this->Flash->error(__('The coursecategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
