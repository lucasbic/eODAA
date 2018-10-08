<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Addresses', 'AccessLevels', 'Courses']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Addresses', 'AccessLevels', 'Courses', 'EducationalInstitutions', 'Courses.KnowledgeAreas', 'Courses.EducationalInstitutions']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $addresses = $this->Users->Addresses->find('list', ['limit' => 200]);
        $accessLevels = $this->Users->AccessLevels->find('list', ['limit' => 200]);
        $courses = $this->Users->Courses->find('list', ['limit' => 200]);
        $educationalInstitutions = $this->Users->EducationalInstitutions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'addresses', 'accessLevels', 'courses', 'educationalInstitutions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Courses', 'EducationalInstitutions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $addresses = $this->Users->Addresses->find('list', ['limit' => 200]);
        $accessLevels = $this->Users->AccessLevels->find('list', ['limit' => 200]);
        $courses = $this->Users->Courses->find('list', ['limit' => 200]);
        $educationalInstitutions = $this->Users->EducationalInstitutions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'addresses', 'accessLevels', 'courses', 'educationalInstitutions'));
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

    //Função de Login
    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'courses']);
            } 
            //Falha no login
            $this->Flash->error('Erro ao realizar login. Por favor, tente novamente.');
        }
    }

    //Função de Logout
    public function logout(){
        $this->Flash->success('Você efeutou o logout com sucesso.');
        return $this->redirect($this->Auth->logout());
    }

    //Função de Cadastro
    public function register(){
        if (isset($this->request->data['access_level_id']) and $this->request->data['access_level_id'] != 2){
            $this->Flash->error('Não foi possível concluir o cadastro. Por favor, tente novamente.');
            return $this->redirect(['action' => 'register']);
        }
        $user = $this->Users->newEntity();
        if($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)){
                $this->Flash->success('Cadastro realizado com sucesso. Você pode agora realizar o login.');
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error('Não foi possível concluir o cadastro. Por favor, tente novamente.');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function beforeFilter(Event $event){
        $this->Auth->allow(['register']);
    }

}
