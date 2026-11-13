<?php

namespace App\Services;

use App\Models\Fasilitas;
use App\Repositories\FacilityRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

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
        return $this->facilityRepository->delete($facility);
    }
}
