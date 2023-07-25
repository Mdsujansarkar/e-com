<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Models\Admin\Category;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard.dashboard');
    }
    public function createCategory(): View
    {
        return view('admin.categories.add-category');
    }
    public function storeCategory(CategoryStoreRequest $request)
    {
        $categories = Category::create($request->all());
        return back();
    }
}
