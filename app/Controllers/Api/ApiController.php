<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class ApiController extends ResourceController
{
    protected $format = 'json';

    public function index()
    {
        return $this->respond([
            'status' => 200,
            'message' => 'API Configuration Integrated Successfully',
            'project' => 'Personal_Website',
            'exam_date' => 'April 8'
        ]);
    }
}