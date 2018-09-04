<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EducationalInstitutions Controller
 *
 * @property \App\Model\Table\EducationalInstitutionsTable $EducationalInstitutions
 *
 * @method \App\Model\Entity\EducationalInstitution[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EducationalInstitutionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Addresses']
        ];
        $educationalInstitutions = $this->paginate($this->EducationalInstitutions);

        $this->set(compact('educationalInstitutions'));
    }

    /**
     * View method
     *
     * @param string|null $id Educational Institution id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $educationalInstitution = $this->EducationalInstitutions->get($id, [
            'contain' => ['Addresses', 'Users', 'Courses']
        ]);

        $this->set('educationalInstitution', $educationalInstitution);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $educationalInstitution = $this->EducationalInstitutions->newEntity();
        if ($this->request->is('post')) {
            $educationalInstitution = $this->EducationalInstitutions->patchEntity($educationalInstitution, $this->request->getData());
            if ($this->EducationalInstitutions->save($educationalInstitution)) {
                $this->Flash->success(__('The educational institution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The educational institution could not be saved. Please, try again.'));
        }
        $addresses = $this->EducationalInstitutions->Addresses->find('list', ['limit' => 200]);
        $users = $this->EducationalInstitutions->Users->find('list', ['limit' => 200]);
        $this->set(compact('educationalInstitution', 'addresses', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Educational Institution id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $educationalInstitution = $this->EducationalInstitutions->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $educationalInstitution = $this->EducationalInstitutions->patchEntity($educationalInstitution, $this->request->getData());
            if ($this->EducationalInstitutions->save($educationalInstitution)) {
                $this->Flash->success(__('The educational institution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The educational institution could not be saved. Please, try again.'));
        }
        $addresses = $this->EducationalInstitutions->Addresses->find('list', ['limit' => 200]);
        $users = $this->EducationalInstitutions->Users->find('list', ['limit' => 200]);
        $this->set(compact('educationalInstitution', 'addresses', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Educational Institution id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $educationalInstitution = $this->EducationalInstitutions->get($id);
        if ($this->EducationalInstitutions->delete($educationalInstitution)) {
            $this->Flash->success(__('The educational institution has been deleted.'));
        } else {
            $this->Flash->error(__('The educational institution could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
