<?php

namespace App\Repositories;

use App\Models\Fasilitas;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class FacilityRepository
{
    public function getAll(array $filters = []): LengthAwarePaginator
    {
        $query = Fasilitas::with('kategori:id,name,severity_weight');

        if (!empty($filters['search'])) {
            $search = $filters['search'];

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('building', 'like', "%{$search}%");
            });
        }

        if (!empty($filters['category_id'])) {
            $query->where('category_id', $filters['category_id']);
        }

        if (!empty($filters['condition_status'])) {
            $query->where(
                'condition_status',
                $filters['condition_status']
            );
        }

        return $query->latest()->paginate(10)->withQueryString();
    }

    public function findById(int $id): Fasilitas
    {
        return Fasilitas::with('kategori:id,name,severity_weight')
            ->findOrFail($id);
    }

    public function create(array $data): Fasilitas
    {
        $facility = Fasilitas::create($data);

        return $facility->load('kategori:id,name,severity_weight');
    }

    public function update(Fasilitas $facility, array $data): Fasilitas
    {
        $facility->update($data);

        return $facility->load('kategori:id,name,severity_weight');
    }

    public function delete(Fasilitas $facility): bool
    {
        return $facility->delete();
    }
}
