<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lectures Controller
 *
 * @property \App\Model\Table\LecturesTable $Lectures
 *
 * @method \App\Model\Entity\Lecture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LecturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses']
        ];
        $lectures = $this->paginate($this->Lectures);

        $this->set(compact('lectures'));
    }

    /**
     * View method
     *
     * @param string|null $id Lecture id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lecture = $this->Lectures->get($id, [
            'contain' => ['Courses']
        ]);

        $this->set('lecture', $lecture);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lecture = $this->Lectures->newEntity();
        if ($this->request->is('post')) {
            $lecture = $this->Lectures->patchEntity($lecture, $this->request->getData());
            if ($this->Lectures->save($lecture)) {
                $this->Flash->success(__('The lecture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lecture could not be saved. Please, try again.'));
        }
        $courses = $this->Lectures->Courses->find('list', ['limit' => 200]);
        $this->set(compact('lecture', 'courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lecture id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lecture = $this->Lectures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lecture = $this->Lectures->patchEntity($lecture, $this->request->getData());
            if ($this->Lectures->save($lecture)) {
                $this->Flash->success(__('The lecture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lecture could not be saved. Please, try again.'));
        }
        $courses = $this->Lectures->Courses->find('list', ['limit' => 200]);
        $this->set(compact('lecture', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lecture id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lecture = $this->Lectures->get($id);
        if ($this->Lectures->delete($lecture)) {
            $this->Flash->success(__('The lecture has been deleted.'));
        } else {
            $this->Flash->error(__('The lecture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
