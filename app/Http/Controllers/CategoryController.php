<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use App\Models\Kategori;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    // Menampilkan seluruh kategori
    public function index(Request $request)
    {
        $categories = $this->categoryService->getAllCategories(
            $request->only(['search'])
        );

        return response()->json([
            'success' => true,
            'message' => 'Daftar kategori berhasil ditampilkan.',
            'data' => $categories,
        ], 200);
    }

    // Menampilkan detail kategori
    public function show(Kategori $category)
    {
        $category = $this->categoryService->getCategoryById(
            $category->id
        );

        return response()->json([
            'success' => true,
            'message' => 'Detail kategori berhasil ditampilkan.',
            'data' => $category,
        ], 200);
    }

    // Menambahkan kategori
    public function store(StoreFacilityRequest $request)
    {
        $category = $this->categoryService->createCategory(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil ditambahkan.',
            'data' => $category,
        ], 201);
    }

    // Mengubah kategori
    public function update(
        UpdateFacilityRequest $request,
        Kategori $category
    ) {
        $updatedCategory = $this->categoryService->updateCategory(
            $category,
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil diperbarui.',
            'data' => $updatedCategory,
        ], 200);
    }

    // Menghapus kategori
    public function destroy(Kategori $category)
    {
        $this->categoryService->deleteCategory($category);

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil dihapus.',
        ], 200);
    }
}
