<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Todo extends ResourceController
{
    protected $modelName = 'App\Models\Todo';
    protected $format = 'json';

    public function index()
    {
        $rows = $this->model->findAll();
        return $this->respond($rows);
    }

    public function show($id = null)
    {
        $row = $this->model->find($id);
        return $this->respond($row);
    }

    public function new ()
    {
        //
    }

    public function create()
    {
        $data = $this->request->getJson();
        $this->model->insert($data);
        return $this->respondCreated();
    }

    public function edit($id = null)
    {
        //
    }

    public function update($id = null)
    {
        //
    }

    public function delete($id = null)
    {
        //
    }
}