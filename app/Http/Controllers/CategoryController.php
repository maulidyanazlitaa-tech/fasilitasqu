<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Kategori;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(
        private readonly CategoryService $categoryService
    ) {
    }

    public function index(Request $request)
    {
        $categories = $this->categoryService->getAllCategories(
            $request->only('search')
        );

        return view('Categories.index', compact('categories'));
    }

    public function create()
    {
        return view('Categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $this->categoryService->createCategory(
            $request->validated()
        );

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(Kategori $category)
    {
        return view('Categories.edit', compact('category'));
    }

    public function update(
        UpdateCategoryRequest $request,
        Kategori $category
    ) {
        $this->categoryService->updateCategory(
            $category,
            $request->validated()
        );

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Kategori $category)
    {
        $this->categoryService->deleteCategory($category);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}