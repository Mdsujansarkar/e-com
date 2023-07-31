<?php

declare(strict_types=1);

namespace App\Services\Admin;

use App\Enums\BoolStatusEnum;
use App\Models\Api\v1\Admin\Category;

class CategoryServices
{
    public function createCategory($data)
    {
        return Category::create($data);
    }
    public function getCategory()
    {
        return Category::where('publication_status', BoolStatusEnum::ACTIVE)
            ->paginate(15);
    }
    public function getCategoryView($categoryId)
    {
       return $categoryView = Category::findOrFail($categoryId);
    }
    public function updateCategory(int $categoryId, array $data)
    {
        $updatedId = Category::findOrFail($categoryId);
        return $updatedId->update($data);
    }
    public function deleteCategory($categoryId)
    {
        $deleteId = Category::findOrFail($categoryId);
        return $deleteId->delete();

    }
}
