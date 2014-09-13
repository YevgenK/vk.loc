<?php
/**
 * Created by PhpStorm.
 * User: YevgenK
 * Date: 13.09.14
 * Time: 11:12
 */

class AbstractController {
    public $layout = 'layout/1column';

    public function renderView($view, $data)
    {
        include_once BASE_PATH . '/app/view/' . $this->layout . '.php';
    }
} 