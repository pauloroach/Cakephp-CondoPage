<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register', 'logout', 'exito', 'recoverpassword', 'resetpassword');
    }

    public function admin_login() {
      $this->layout = 'admin_login';
      if ($this->request->is('post')) {
        $this->request->data['User']['username'] = $this->request->data['User']['email'];
          if ($this->Auth->login()) {
              return $this->redirect(array('controller' => 'Reservations', 'action' => 'admin_index'));
          } else {
            $this->Flash->error(__('Email o contraseña invalidos'));
          }
      }
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->findById($id));
    }

    /*public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
    }*/

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }


    public function login() {
      $this->layout = 'login';
        if ($this->request->is('post')) {
          $this->request->data['User']['username'] = $this->request->data['User']['email'];
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
              $this->Flash->error(__('Email o contraseña invalidos'));
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function register(){
      if ($this->request->is('post')) {
        // check if user email is already registered
        $userEmail = $this->request->data['User']['email'];
        $options = array(
          'conditions' => array('User.username' => strtolower($userEmail))
        );
        $userExists = $this->User->find('first', $options);
        if(!empty($userExists)) {
          $this->Session->setFlash('Ya existe una cuenta con ese correo');
        } else {
          $this->request->data['User']['username'] = strtolower($this->request->data['User']['email']);
          if($this->User->save($this->request->data)){
            $this->redirect('exito');
          } else {
            $this->Session->setFlash('No se pudo crear tu cuenta, por favor contactanos para solucionar tu problema');
          }
        }
      }

    }

    public function exito() {

    }
    public function account() {

    }


    public function recoverpassword() {
      if ($this->request->is('post')) {
        $userEmail = strtolower($this->request->data['User']['email']);
        $options = array(
          'conditions' => array('User.username' => $userEmail)
        );
        $userExists = $this->User->find('first', $options);
        if(!empty($userExists)) {
          //Allow to reset pass
          $data = array(
            'User' => array(
              'id' => $userExists['User']['id'],
              'resetpass' => 1
            )
          );
          $this->User->save($data);
          //Send email
          $email = new CakeEmail();
          $email->template('recoverpass')
          ->emailFormat('html')
          ->to($userEmail)
          ->viewVars(array('email' => $userEmail))
          ->from('info@pacifikaownersclub.com')
          ->send();
          $this->Session->setFlash('Te hemos enviado a tu correo una liga para reestablecer tu contraseña.');
        } else {
          $this->Session->setFlash('No se encontro tu correo, intenta de nuevo.');
        }
      }
    }

    public function resetpassword($email = null) {
      if($this->request->is('post')) {
        //POST
        if($this->User->save($data)) {
          $this->redirect('passwordchanged');
        } else {
          $this->Session->setFlash('No se pudo cambiar la contraseña');
        }
      } else {
        //GET
        if(!empty($email)) {
          $options = array(
            'conditions' => array('User.username' => $email, 'User.resetpass' => 1)
          );
          $userCanReset = $this->User->find('first', $options);
          if(!empty($userCanReset)) {
            $this->set('userId', $userCanReset['User']['id']);
            $this->set('canreset', true);
          } else {
            $this->set('canreset', false);
          }
        } else {
          $this->redirect('/');
        }
      }

    }

    public function newUserEmail() {
      $this->autoLayout = false;
      $email = new CakeEmail();
      $Email->template('welcome')
      ->emailFormat('html')
      ->to('paulo.guevara@gmail.com')
      ->from('info@mazatlanlife.mx')
      ->send();
      debug('envie correo');exit;
    }

}
