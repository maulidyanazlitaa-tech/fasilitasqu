<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateFacilityRequest;
use App\Models\Fasilitas;
use App\Services\FacilityService;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    protected FacilityService $facilityService;

    public function __construct(FacilityService $facilityService)
    {
        $this->facilityService = $facilityService;
    }

    // Menampilkan semua fasilitas
    public function index(Request $request)
    {
        $filters = $request->only([
            'search',
            'category_id',
            'condition_status',
        ]);

        $facilities = $this->facilityService->getAllFacilities($filters);

        return response()->json([
            'success' => true,
            'message' => 'Daftar fasilitas berhasil ditampilkan.',
            'data' => $facilities,
        ], 200);
    }

    // Menampilkan detail fasilitas
    public function show(Fasilitas $facility)
    {
        $facility = $this->facilityService->getFacilityById(
            $facility->id
        );

        return response()->json([
            'success' => true,
            'message' => 'Detail fasilitas berhasil ditampilkan.',
            'data' => $facility,
        ], 200);
    }

    // Menambahkan fasilitas
    public function store(Request $request)
    {
        $facility = $this->facilityService->createFacility(
            $request->all()
        );

        return response()->json([
            'success' => true,
            'message' => 'Fasilitas berhasil ditambahkan.',
            'data' => $facility,
        ], 201);
    }

    // Mengubah fasilitas
    public function update(
        UpdateFacilityRequest $request,
        Fasilitas $facility
    ) {
        $updatedFacility = $this->facilityService->updateFacility(
            $facility,
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Fasilitas berhasil diperbarui.',
            'data' => $updatedFacility,
        ], 200);
    }

    // Menghapus fasilitas
    public function destroy(Fasilitas $facility)
    {
        $this->facilityService->deleteFacility($facility);

        return response()->json([
            'success' => true,
            'message' => 'Fasilitas berhasil dihapus.',
        ], 200);
    }
}
