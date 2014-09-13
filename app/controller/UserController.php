<?php

class UserController extends AbstractController{

    public function index()
    {
        $this->renderView('user/registration', array('result' => 'Tester'));
    }
} 