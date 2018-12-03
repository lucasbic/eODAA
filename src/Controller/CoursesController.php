<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Courses Controller
 *
 * @property \App\Model\Table\CoursesTable $Courses
 *
 * @method \App\Model\Entity\Course[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['KnowledgeAreas', 'EducationalInstitutions']
        ];
        $courses = $this->paginate($this->Courses);

        $this->set(compact('courses'));
    }

    /**
     * View method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => ['KnowledgeAreas', 'EducationalInstitutions', 'Users', 'Lectures']
        ]);

        $this->set('course', $course);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $course = $this->Courses->newEntity();
        if ($this->request->is('post')) {
            $course = $this->Courses->patchEntity($course, $this->request->getData());
            if ($this->Courses->save($course)) {
                #return $this->redirect(['controller' => 'UsersCourses', 'action' => 'criar'], $user_id, $course_name);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $knowledgeAreas = $this->Courses->KnowledgeAreas->find('list', ['limit' => 200]);
        $educationalInstitutions = $this->Courses->EducationalInstitutions->find('list', ['limit' => 200]);
        $users = $this->Courses->Users->find('list', ['limit' => 200]);
        $this->set(compact('course', 'knowledgeAreas', 'educationalInstitutions', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $course = $this->Courses->patchEntity($course, $this->request->getData());
            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $knowledgeAreas = $this->Courses->KnowledgeAreas->find('list', ['limit' => 200]);
        $educationalInstitutions = $this->Courses->EducationalInstitutions->find('list', ['limit' => 200]);
        $users = $this->Courses->Users->find('list', ['limit' => 200]);
        $this->set(compact('course', 'knowledgeAreas', 'educationalInstitutions', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $course = $this->Courses->get($id);
        if ($this->Courses->delete($course)) {
            $this->Flash->success(__('The course has been deleted.'));
        } else {
            $this->Flash->error(__('The course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function anuncio(){
        $this->Flash->success('Crie um novo anúncio.');
        $this->set('cadastrandoAnuncio', true);

        if ($this->request->is('post')){
            if ($cancelar){
                //return $this->redirect($this->Auth->redirectUrl());
                $this->Flash->success("Cancelado");
                return $this->redirect(['controller' => 'Users']);
            }
            else{
                # Usuario nao foi identificado
                $this->Flash->error("Seu login ou senha estão incorretos.");
            }
        }
    }

    public function cancelar(){
        $this->set('cancelar', false);
    }

public function schedulealuno(){
        /*
        $this->Flash->success('Crie um novo anúncio.');
        $this->set('cadastrandoAnuncio', true);

        if ($this->request->is('post')){
            if ($cancelar){
                //return $this->redirect($this->Auth->redirectUrl());
                $this->Flash->success("Cancelado");
                return $this->redirect(['controller' => 'Users']);
            }
            else{
                # Usuario nao foi identificado
                $this->Flash->error("Seu login ou senha estão incorretos.");
            }
        }
        */
    }

    public function scheduleprofessor(){
        /*
        $this->Flash->success('Crie um novo anúncio.');
        $this->set('cadastrandoAnuncio', true);

        if ($this->request->is('post')){
            if ($cancelar){
                //return $this->redirect($this->Auth->redirectUrl());
                $this->Flash->success("Cancelado");
                return $this->redirect(['controller' => 'Users']);
            }
            else{
                # Usuario nao foi identificado
                $this->Flash->error("Seu login ou senha estão incorretos.");
            }
        }
        */
    }

    public function materialdidatico(){      
        $knowledgeAreas = $this->Courses->KnowledgeAreas->find('list', ['limit' => 200]);
        $educationalInstitutions = $this->Courses->EducationalInstitutions->find('list', ['limit' => 200]);
        $users = $this->Courses->Users->find('list', ['limit' => 200]);
        $this->set(compact('course', 'knowledgeAreas', 'educationalInstitutions', 'users'));

    }

    public function classificacaoservico(){
        $knowledgeAreas = $this->Courses->KnowledgeAreas->find('list', ['limit' => 200]);
        $educationalInstitutions = $this->Courses->EducationalInstitutions->find('list', ['limit' => 200]);
        $users = $this->Courses->Users->find('list', ['limit' => 200]);
        $this->set(compact('course', 'knowledgeAreas', 'educationalInstitutions', 'users'));
    }
}
