<?php

namespace App\Services;

use App\Models\Fasilitas;
use App\Repositories\FacilityRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Validation\ValidationException;

class FacilityService
{
    protected FacilityRepository $facilityRepository;

    public function __construct(FacilityRepository $facilityRepository)
    {
        $this->facilityRepository = $facilityRepository;
    }

    public function getAllFacilities(array $filters = []): LengthAwarePaginator
    {
        return $this->facilityRepository->getAll($filters);
    }

    public function getFacilityById(int $id): Fasilitas
    {
        return $this->facilityRepository->findById($id);
    }

    public function createFacility(array $data): Fasilitas
    {
        return $this->facilityRepository->create($data);
    }

    public function updateFacility(Fasilitas $facility, array $data): Fasilitas
    {
        return $this->facilityRepository->update($facility, $data);
    }

    public function deleteFacility(Fasilitas $facility): bool
    {
        if ($facility->reports()->exists()) {
            throw ValidationException::withMessages([
                'facility' => [
                    'Fasilitas tidak dapat dihapus karena masih digunakan oleh laporan.',
                ],
            ]);
        }

        return $this->facilityRepository->delete($facility);
    }
}
