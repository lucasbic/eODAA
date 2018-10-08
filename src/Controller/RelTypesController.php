<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RelTypes Controller
 *
 * @property \App\Model\Table\RelTypesTable $RelTypes
 *
 * @method \App\Model\Entity\RelType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RelTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $relTypes = $this->paginate($this->RelTypes);

        $this->set(compact('relTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Rel Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $relType = $this->RelTypes->get($id, [
            'contain' => ['UsersCourses']
        ]);

        $this->set('relType', $relType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $relType = $this->RelTypes->newEntity();
        if ($this->request->is('post')) {
            $relType = $this->RelTypes->patchEntity($relType, $this->request->getData());
            if ($this->RelTypes->save($relType)) {
                $this->Flash->success(__('The rel type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rel type could not be saved. Please, try again.'));
        }
        $this->set(compact('relType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rel Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $relType = $this->RelTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $relType = $this->RelTypes->patchEntity($relType, $this->request->getData());
            if ($this->RelTypes->save($relType)) {
                $this->Flash->success(__('The rel type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rel type could not be saved. Please, try again.'));
        }
        $this->set(compact('relType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rel Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $relType = $this->RelTypes->get($id);
        if ($this->RelTypes->delete($relType)) {
            $this->Flash->success(__('The rel type has been deleted.'));
        } else {
            $this->Flash->error(__('The rel type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
