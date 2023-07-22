<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }
    public function createCategory()
    {
        return view('admin.categories.add-category');
    }
}
