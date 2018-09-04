<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * KnowledgeAreas Controller
 *
 * @property \App\Model\Table\KnowledgeAreasTable $KnowledgeAreas
 *
 * @method \App\Model\Entity\KnowledgeArea[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KnowledgeAreasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $knowledgeAreas = $this->paginate($this->KnowledgeAreas);

        $this->set(compact('knowledgeAreas'));
    }

    /**
     * View method
     *
     * @param string|null $id Knowledge Area id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $knowledgeArea = $this->KnowledgeAreas->get($id, [
            'contain' => ['Courses']
        ]);

        $this->set('knowledgeArea', $knowledgeArea);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $knowledgeArea = $this->KnowledgeAreas->newEntity();
        if ($this->request->is('post')) {
            $knowledgeArea = $this->KnowledgeAreas->patchEntity($knowledgeArea, $this->request->getData());
            if ($this->KnowledgeAreas->save($knowledgeArea)) {
                $this->Flash->success(__('The knowledge area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The knowledge area could not be saved. Please, try again.'));
        }
        $this->set(compact('knowledgeArea'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Knowledge Area id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $knowledgeArea = $this->KnowledgeAreas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $knowledgeArea = $this->KnowledgeAreas->patchEntity($knowledgeArea, $this->request->getData());
            if ($this->KnowledgeAreas->save($knowledgeArea)) {
                $this->Flash->success(__('The knowledge area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The knowledge area could not be saved. Please, try again.'));
        }
        $this->set(compact('knowledgeArea'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Knowledge Area id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $knowledgeArea = $this->KnowledgeAreas->get($id);
        if ($this->KnowledgeAreas->delete($knowledgeArea)) {
            $this->Flash->success(__('The knowledge area has been deleted.'));
        } else {
            $this->Flash->error(__('The knowledge area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
