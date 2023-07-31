<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\ProductServices;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(public ProductServices $service)
    {
        
    }
    public function index()
    {
        return $this->service->index();
    }
}
