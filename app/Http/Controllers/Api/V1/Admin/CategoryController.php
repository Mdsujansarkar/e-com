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
    try {
      $data = $service->createCategory($validate);
      $success = [
        'success' => true,
        'message' => 'Create successfully',
      ];
      return response()->json($success, 200);
    } catch (\Throwable $th) {
      $error = [
        'error' => false,
        'message' => 'Category Not Creat',
        'error' => $th->getMessage()
      ];
      return response()->json($error, 500);
    }
  }
  public function getView(CategoryServices $service, $id)
  {
    $data = $service->getCategoryView($id);
    if (!$data) {
      throw new \Exception("Record not found.");
    }
    return response()->json($data, 200);
  }
  public function update(CategoryRequest $request, CategoryServices $service, int $id)
  {

    $validate = $request->validated();

    try {
      $data = $service->updateCategory($id, $validate);
      // return  _successMsgResps('Category Create Successfully', 200);

      $success = [
        'success' => true,
        'message' => 'Updat successfully',
      ];
      return response()->json($success, 200);
    } catch (\Throwable $th) {
      return response()->json(['error' => $th->getMessage()], 404);
    }
  }
  public function destroy(CategoryServices $service, int $id)
  {
    $data = $service->deleteCategory($id);
    return response()->json($data, 200);
  }
}
