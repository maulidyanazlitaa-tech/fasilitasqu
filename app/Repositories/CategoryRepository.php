<?php

namespace App\Repositories;

use App\Models\Kategori;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CategoryRepository
{
    public function getAll(array $filters = []): LengthAwarePaginator
    {
        $query = Kategori::withCount('facilities');

        if (!empty($filters['search'])) {
            $query->where(
                'name',
                'like',
                '%' . $filters['search'] . '%'
            );
        }

        return $query->orderBy('name')->paginate(10)->withQueryString();
    }

    public function findById(int $id): Kategori
    {
        return Kategori::with('facilities')
            ->withCount('facilities')
            ->findOrFail($id);
    }

    public function create(array $data): Kategori
    {
        return Kategori::create($data)
            ->loadCount('facilities');
    }

    public function update(Kategori $category, array $data): Kategori
    {
        $category->update($data);

        return $category->loadCount('facilities');
    }

    public function delete(Kategori $category): bool
    {
        return $category->delete();
    }
}
