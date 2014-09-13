<?php

class UserController extends Controller{

    public function index()
    {
        $this->renderView('user/registration', array('result' => 'Tester'));
    }
} 