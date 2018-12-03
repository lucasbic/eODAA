<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    
    /*public function beforeFilter(Event $event)
    {
        \Cake\Event\EventManager::instance()->on('HybridAuth.newUser', [$this, 'createUser']);
    }*/
    
    /*public function createUser(\Cake\Event\Event $event) {
        // Entity representing record in social_profiles table
        $profile = $event->data()['profile'];
 
        $user = $this->newEntity([
            'email' => $profile->email,
            'password' => time()
        ]);
        $user = $this->save($user);
 
        if (!$user) {
            throw new \RuntimeException('Unable to save new user');
        }
 
        return $user;
    }*/
    
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]/*,
                'ADmad/HybridAuth.HybridAuth' => [
                    // All keys shown below are defaults
                    'fields' => [
                        'provider' => 'provider',
                        'openid_identifier' => 'openid_identifier',
                        'email' => 'email'
                    ],
                    'profileModel' => 'ADmad/HybridAuth.SocialProfiles',
                    'profileModelFkField' => 'user_id',
                    'userModel' => 'Users',
                    'hauth_return_to' => [
                        'controller' => 'Users',
                        'action' => 'socail_login',
                        'prefix' => false,
                        'plugin' => false
                    ]
                ]*/
            ],  
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);
        
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeRender(Event $event){
        $this->loadComponent('Auth');
        // Checando se usuário está logado
        if ($this->request->getSession()->read('Auth.User')){
            $this->set('loggedIn', true);
        } else {
            $this->set('loggedIn', false);
        }
        #logged user info
        $logged_user = $this->Auth->user();
        $this->set('logged_user', $logged_user);
        $this->logged_user = $logged_user;

        #logged user id
        $user_id = $this->Auth->user('id');
        $this->set('user_id', $user_id);
        $this->user_id = $user_id;



        #default db connection_aborted()
        $connection = ConnectionManager::get('default');
        $this->set('connection', $connection);
        $this->connection = $connection;
    }

}
