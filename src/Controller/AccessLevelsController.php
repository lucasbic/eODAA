<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AccessLevels Controller
 *
 * @property \App\Model\Table\AccessLevelsTable $AccessLevels
 *
 * @method \App\Model\Entity\AccessLevel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccessLevelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $accessLevels = $this->paginate($this->AccessLevels);

        $this->set(compact('accessLevels'));
    }

    /**
     * View method
     *
     * @param string|null $id Access Level id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accessLevel = $this->AccessLevels->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('accessLevel', $accessLevel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accessLevel = $this->AccessLevels->newEntity();
        if ($this->request->is('post')) {
            $accessLevel = $this->AccessLevels->patchEntity($accessLevel, $this->request->getData());
            if ($this->AccessLevels->save($accessLevel)) {
                $this->Flash->success(__('The access level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The access level could not be saved. Please, try again.'));
        }
        $this->set(compact('accessLevel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Access Level id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accessLevel = $this->AccessLevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accessLevel = $this->AccessLevels->patchEntity($accessLevel, $this->request->getData());
            if ($this->AccessLevels->save($accessLevel)) {
                $this->Flash->success(__('The access level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The access level could not be saved. Please, try again.'));
        }
        $this->set(compact('accessLevel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Access Level id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accessLevel = $this->AccessLevels->get($id);
        if ($this->AccessLevels->delete($accessLevel)) {
            $this->Flash->success(__('The access level has been deleted.'));
        } else {
            $this->Flash->error(__('The access level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
