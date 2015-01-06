<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 */
class TestController extends AppController {

    public function beforeFilter() 
    {
        parent::beforeFilter();
        $this->Auth->allow("index");      
	}

	public function index() 
	{
		echo "This is test controller";
		exit();
	}

}