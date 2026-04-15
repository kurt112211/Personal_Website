<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class ApiController extends ResourceController
{
    // This trait allows you to return $this->respond()
    protected $format = 'json';

    public function index()
    {
        // This is a test response to see if your API is working
        $data = [
            'status'   => 200,
            'message'  => 'API is successfully integrated!',
            'exam_date' => 'April 8'
        ];

        return $this->respond($data);
    }
}