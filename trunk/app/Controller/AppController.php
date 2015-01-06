<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
            'Acl',
            'Auth' => array(
                'authenticate' => array(
                    'Form' => array(
                        'fields' => array('username' => 'email'),
                        'scope'  => array('User.status' => 1)
                    )
                ),
                'authorize' => array(
                    'Actions' => array('actionPath' => 'controllers')
                )
            ),
            'Session'
        );

    public $helpers = array(
        'Session',
        'Form',
        'Html',
        'Cache',
        'Js',
        'Time'
    );

    public function beforeFilter() 
    {
        parent::beforeFilter();	
        $this->Auth->flash = array("element"=>"Admin.error", "key"=>"auth", "params"=>array());
        $this->Auth->loginAction = '/users/login';
        $this->Auth->logoutRedirect = '/users/login';
        $this->Auth->loginRedirect = array('plugin'=>false, 'controller' => 'posts', 'action' => 'index');    
		
		// $this->Auth->allow();//comment after generate action		
	}
}
