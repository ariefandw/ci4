<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Todo extends BaseController
{
    public function getIndex()
    {
        $todoModel = new \App\Models\Todo();
        $todos     = $todoModel->findAll();
        $data      = [
            'rows' => $todos,
        ];
        return view('todo/index', $data);
    }
}