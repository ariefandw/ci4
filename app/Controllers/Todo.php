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

    public function getNew()
    {
        $todoModel = new \App\Models\Todo();
        $data      = [
            'row' => $todoModel,
            'action' => 'create',
        ];
        return view('todo/form', $data);
    }

    public function postCreate()
    {
        $data      = $this->request->getPost();
        $todoModel = new \App\Models\Todo();
        $todoModel->insert($data);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        $this->response->redirect(site_url('todo'));
    }
}