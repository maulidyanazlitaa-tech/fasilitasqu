<?php

namespace App\Services;

use App\Models\Kategori;
use App\Repositories\CategoryRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Validation\ValidationException;

class CategoryService
{
    protected CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories(array $filters = []): LengthAwarePaginator
    {
        return $this->categoryRepository->getAll($filters);
    }

    public function getCategoryById(int $id): Kategori
    {
        return $this->categoryRepository->findById($id);
    }

    public function createCategory(array $data): Kategori
    {
        return $this->categoryRepository->create($data);
    }

    public function updateCategory(
        Kategori $category,
        array $data
    ): Kategori {
        return $this->categoryRepository->update($category, $data);
    }

    public function deleteCategory(Kategori $category): void
    {
        if ($category->facilities()->exists()) {
            throw ValidationException::withMessages([
                'category' => [
                    'Kategori tidak dapat dihapus karena masih digunakan oleh fasilitas.',
                ],
            ]);
        }

        $this->categoryRepository->delete($category);
    }
}
