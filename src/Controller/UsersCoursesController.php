<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * UsersCourses Controller
 *
 * @property \App\Model\Table\UsersCoursesTable $UsersCourses
 *
 * @method \App\Model\Entity\UsersCourse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersCoursesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Courses', 'RelTypes']
        ];
        $usersCourses = $this->paginate($this->UsersCourses);

        $this->set(compact('usersCourses'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Course id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersCourse = $this->UsersCourses->get($id, [
            'contain' => ['Users', 'Courses', 'RelTypes']
        ]);

        $this->set('usersCourse', $usersCourse);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersCourse = $this->UsersCourses->newEntity();
        if ($this->request->is('post')) {
            $usersCourse = $this->UsersCourses->patchEntity($usersCourse, $this->request->getData());
            if ($this->UsersCourses->save($usersCourse)) {
                $this->Flash->success(__('The users course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users course could not be saved. Please, try again.'));
        }
        $users = $this->UsersCourses->Users->find('list', ['limit' => 200]);
        $courses = $this->UsersCourses->Courses->find('list', ['limit' => 200]);
        $relTypes = $this->UsersCourses->RelTypes->find('list', ['limit' => 200]);
        $this->set(compact('usersCourse', 'users', 'courses', 'relTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Course id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersCourse = $this->UsersCourses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersCourse = $this->UsersCourses->patchEntity($usersCourse, $this->request->getData());
            if ($this->UsersCourses->save($usersCourse)) {
                $this->Flash->success(__('The users course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users course could not be saved. Please, try again.'));
        }
        $users = $this->UsersCourses->Users->find('list', ['limit' => 200]);
        $courses = $this->UsersCourses->Courses->find('list', ['limit' => 200]);
        $relTypes = $this->UsersCourses->RelTypes->find('list', ['limit' => 200]);
        $this->set(compact('usersCourse', 'users', 'courses', 'relTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Course id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersCourse = $this->UsersCourses->get($id);
        if ($this->UsersCourses->delete($usersCourse)) {
            $this->Flash->success(__('The users course has been deleted.'));
        } else {
            $this->Flash->error(__('The users course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function contratar($caminho, $user_id, $course_id){
        $connection = ConnectionManager::get('default');
        if ($caminho == 1){
            if ($connection->update('users_courses', ['rel_type_id' => 4], ['user_id' => $user_id, 'course_id' => $course_id])){
                $this->Flash->success(__('Curso contratado com sucesso.'));
                return $this->redirect(['controller' => 'users', 'action' => 'favorites', $user_id]);
            } else {
                $this->Flash->error(__('O curso não pode ser contratado no momento. Por favor tente novamente.'));
                return $this->redirect(['controller' => 'users', 'action' => 'favorites', $user_id]);
            }
        } else {
            if($connection->insert('users_courses', ['user_id' => $user_id,'course_id' => $course_id,'rel_type_id' => 4])){
                $this->Flash->success(__('Curso contratado com sucesso.'));
                return $this->redirect(['controller' => 'Courses', 'action' => 'index']);
            } else {
                $this->Flash->error(__('O curso não pode ser contratado no momento. Por favor tente novamente.'));
                return $this->redirect(['controller' => 'Courses', 'action' => 'view', $course_id]);
            }   
        }
        
    }

    public function criar($user_id, $course_name){
        $connection = ConnectionManager::get('default');
        $course_id = $connection->execute('SELECT id FROM courses WHERE name = :name', ['name' => $course_name]);
    }
}
