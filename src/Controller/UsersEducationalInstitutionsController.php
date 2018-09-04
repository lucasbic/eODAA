<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersEducationalInstitutions Controller
 *
 * @property \App\Model\Table\UsersEducationalInstitutionsTable $UsersEducationalInstitutions
 *
 * @method \App\Model\Entity\UsersEducationalInstitution[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersEducationalInstitutionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'EducationalInstitutions']
        ];
        $usersEducationalInstitutions = $this->paginate($this->UsersEducationalInstitutions);

        $this->set(compact('usersEducationalInstitutions'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Educational Institution id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersEducationalInstitution = $this->UsersEducationalInstitutions->get($id, [
            'contain' => ['Users', 'EducationalInstitutions']
        ]);

        $this->set('usersEducationalInstitution', $usersEducationalInstitution);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersEducationalInstitution = $this->UsersEducationalInstitutions->newEntity();
        if ($this->request->is('post')) {
            $usersEducationalInstitution = $this->UsersEducationalInstitutions->patchEntity($usersEducationalInstitution, $this->request->getData());
            if ($this->UsersEducationalInstitutions->save($usersEducationalInstitution)) {
                $this->Flash->success(__('The users educational institution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users educational institution could not be saved. Please, try again.'));
        }
        $users = $this->UsersEducationalInstitutions->Users->find('list', ['limit' => 200]);
        $educationalInstitutions = $this->UsersEducationalInstitutions->EducationalInstitutions->find('list', ['limit' => 200]);
        $this->set(compact('usersEducationalInstitution', 'users', 'educationalInstitutions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Educational Institution id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersEducationalInstitution = $this->UsersEducationalInstitutions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersEducationalInstitution = $this->UsersEducationalInstitutions->patchEntity($usersEducationalInstitution, $this->request->getData());
            if ($this->UsersEducationalInstitutions->save($usersEducationalInstitution)) {
                $this->Flash->success(__('The users educational institution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users educational institution could not be saved. Please, try again.'));
        }
        $users = $this->UsersEducationalInstitutions->Users->find('list', ['limit' => 200]);
        $educationalInstitutions = $this->UsersEducationalInstitutions->EducationalInstitutions->find('list', ['limit' => 200]);
        $this->set(compact('usersEducationalInstitution', 'users', 'educationalInstitutions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Educational Institution id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersEducationalInstitution = $this->UsersEducationalInstitutions->get($id);
        if ($this->UsersEducationalInstitutions->delete($usersEducationalInstitution)) {
            $this->Flash->success(__('The users educational institution has been deleted.'));
        } else {
            $this->Flash->error(__('The users educational institution could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
