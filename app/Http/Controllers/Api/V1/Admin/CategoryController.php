<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Illuminate\Http\Request;
use App\Enums\BoolStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Api\v1\Admin\Category;
use App\Services\Admin\CategoryServices;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
  public function index(CategoryServices $service)
  {
    $data = $service->getCategory();
    return response()->json($data, 201);
  }
  public function store(CategoryRequest $request, CategoryServices $service)
  {
    $validate = $request->validated();
    $data = $service->createCategory($validate);
    if ($data) {
      // return  _successMsgResps('Category Create Successfully', 200);
      $success = [
        'success' => true,
        'message' => 'Create successfully',
      ];
      return response()->json($success, 200);
    }
    if (!$data) {
      // return  _successMsgResps('Category not Create Successfully', 400);
      $error = [
        'error' => false,
        'message' => 'Category Not Creat',
      ];
      return response()->json($error, 500);
    }
  }
  public function getView(CategoryServices $service, $id)
  {
    $data = $service->getCategoryView($id);
    return response()->json($data, 200);
  }
  public function update(CategoryRequest $request,CategoryServices $service, $id)
  {
 
    $validate = $request->validated();
    return $validate;
    $data = $service->updateCategory($id,$validate);
    dd($data);
    if ($data) {
      // return  _successMsgResps('Category Create Successfully', 200);
      $success = [
        'success' => true,
        'message' => 'Create successfully',
      ];
      return response()->json($success, 200);
    }
    if (!$data) {
      // return  _successMsgResps('Category not Create Successfully', 400);
      $error = [
        'error' => false,
        'message' => 'Category Not Creat',
      ];
      return response()->json($error, 500);
    }
  }
}
